<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\Order;
use App\Receipt;
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
        $orders = Order::doesntHave('receipts')->with(["partSummary", "supplier"])->withCount("parts")->get();
        return $orders->map(function ($enquiry) {
            $enquiry->setAttribute("partSummary", $enquiry->partSummary->take(3));
            return $enquiry;
        });
    }

    public function backorders()
    {
        //
        $orders = Order::has('receipts')->with(["partSummary", "supplier"])->withCount("parts")->get();
        return $orders->map(function ($enquiry) {
            $enquiry->setAttribute("partSummary", $enquiry->partSummary->take(3));
            return $enquiry;
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
        $order->load(["parts.manufacturer", "parts.model", "parts.category", "parts.image", "supplier"]);
        $order->setRelation('parts', $order->parts->map(function ($part) {
            $part->setAttribute('image_url', $part->image == null ? '' : $part->image->getFullUrl());
            $part->setRelation('image', null);
            return $part;
        }));
        return $order;
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
        /** @var User $user */
        $user = User::first();// Auth::user();
        /** @var Order $order */
        $order->user()->associate($user);
        $order->save();
        $order->parts()->detach();
        $order->parts()->attach($request->parts);
        return $order;
    }

    public function confirm(Request $request, Order $order) {
        $order->status = 'CONFIRMED';
        $order->save();
        return $order;
    }

    public function receive(Request $request, Order $order) {
        /** @var Receipt $receipt */
        $receipt = $order->receipts()->create();
        $order->parts()->syncWithoutDetaching($request->order);
        $receipt->parts()->attach($request->receipt);
        return $receipt;
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
        $order->delete();
    }
}
