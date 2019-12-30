<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\Order;
use App\Supplier;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Order::with(["partSummary", "supplier"])->withCount("parts")->get();
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
        /** @var User $user */
        $user = User::first();// Auth::user();
        /** @var Order $order */
        $order = new Order($request->only('type', 'due_date'));
        $order->user()->associate($user);
        $order->supplier()->associate($supplier);
        $order->save();
        $order->parts()->attach($request->parts);
        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        /** @var User $user */
        $user = User::first();// Auth::user();
        /** @var Order $order */
        $order->user()->associate($user);
        $order->save();
        $order->parts()->detach();
        $order->parts()->attach($request->parts);
        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
