<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Vehicle::all();
    }

    /**
     * Display a listing of the resource for a customer.
     *
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function customerIndex(Customer $customer)
    {
        $customer->load('vehicles.model.manufacturer');
        return $customer->vehicles;
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
        $validator = Validator::make($request->all(), array(
            'reg_no' => 'required|string',
            'chasis_no' => 'required|string',
            'engine_no' => 'required|string',
            'origin' => 'string',
            'colour' => 'string',
            'odometer_unit' => 'string',
            'customer_id' => 'required|exists:customers,id',
            'staff_id' => 'required|exists:staff,id',
            'part_model_id' => 'required|exists:part_models,id',
            'part_franchise_id' => 'exists:part_franchises,id',
            'note' => 'string'
        ));
        $validator->validate();

        return Vehicle::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
