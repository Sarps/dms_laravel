<?php

namespace App\Http\Controllers;

use App\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parts = Part::with([
            "manufacturer", "model", "franchise", "category", "supplier", "media"
        ])->get();
        return $parts->map(function ($part) {
            $part->media = $part->media == null ? '' : $part->media->getFullUrl();
            return $part;
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
        $validator = Validator::make($request->all(), array(
            'number' => 'required|string',
            'name' => 'required|string',
            'retail_price' => 'required|numeric',
            'cost_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'manufacturer_id' => 'required|exists:part_manufacturers,id',
            'model_id' => 'required|exists:part_models,id',
            'franchise_id' => 'exists:part_franchises,id',
            'quantity' => 'required|integer',
            'reorder' => 'numeric',
            'description' => 'string'
        ));

        $validator->validate();

        $part = new Part($request->all());
        $part->save();
        $part->addMedia($request->file('image'))->toMediaCollection('uploads', 'public');
        $part->loadMedia("uploads");
        $part->load([
            "manufacturer", "model", "franchise", "category"
        ]);
        return $part;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Part $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Part $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Part $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Part $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        //
    }
}
