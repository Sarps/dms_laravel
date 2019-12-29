<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\Order;
use App\Part;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Enquiry::with(["partSummary", "supplier"])->withCount("parts")->get();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** @var Supplier $supplier */
        $supplier = Supplier::findOrFail($request->get("supplier"));
        /** @var \App\User $user */
        $user = User::first();// Auth::user();
        /** @var Enquiry $enquiry */
        $enquiry = new Enquiry();
        $enquiry->user()->associate($user);
        $enquiry->supplier()->associate($supplier);
        $enquiry->save();
        $enquiry->parts()->attach($request->parts);
        return $enquiry;
    }

    public function transfer(Enquiry $enquiry) {
        $order = new Order();
        $order->supplier_id = $enquiry->supplier_id;
        $order->user_id = Auth::id();
        $order->type = "INDIRECT";
        $order->save();
        $order->parts()->attach($enquiry->parts);
        $enquiry->parts()->detach();
        $enquiry->delete();
        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
        $enquiry->load(["parts.manufacturer", "parts.model", "parts.category", "parts.image", "supplier"]);
        return $enquiry;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        /** @var \App\User $user */
        $user = User::first();// Auth::user();
        $enquiry->user()->associate($user);
        $enquiry->save();
        $enquiry->parts()->detach();
        $enquiry->parts()->attach($request->parts);
        return $enquiry;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
