<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Supplier::all();
    }

    public function datatables(Request $request)
    {
        return Supplier::paginate($request->get('per_page'));
    }

    public function ledger()
    {
        $suppliers = Supplier::with(['purchases' => function ($query) {
            $query->selectRaw('sum(purchasables.price * purchasables.delivered) as total')
            ->groupBy("laravel_through_key");
        }])->withCount(['orders', 'receipts'])->get();
        return $suppliers->map(function ($supplier) {
            $f = $supplier->purchases->first();
            $supplier->setRelation('purchases', null);
            $supplier->setAttribute('total', $f ? $f->total : 0);
            return $supplier;
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "address" => "required|string",
            "contact" => "required|string"
        ]);

        Supplier::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
        $supplier->load(["parts.manufacturer", "parts.model", "parts.category", "parts.image"]);
        $supplier->setRelation('parts', $supplier->parts->map(function ($part) {
            $part->setAttribute('image_url', $part->image == null ? '' : $part->image->getFullUrl());
            $part->setRelation('image', null);
            return $part;
        }));
        return $supplier;
    }

    public function showLedger(Supplier $supplier)
    {
        $supplier->load(['receipts.parts', 'receipts.order']);
        return $supplier;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            "name" => "string",
            "address" => "string",
            "contact" => "string"
        ]);

        $supplier->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
    }
}
