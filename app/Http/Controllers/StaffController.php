<?php

namespace App\Http\Controllers;

use App\Company;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /** @var Company $company */
        $company = $request->user()->company;
        $company->load('staff.userable.branch');
        return $company->staff;
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
            'account_name' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string',
            'telephone' => 'required|string',
            'account_type' => 'required|string',
            'account_ref' => 'required|string',
            'credit_limit' => 'required|numeric',
            'tax_type' => 'required|string',
            'tax_perc' => 'required|numeric',
            'status' => 'required|string',
        ));
        $validator->validate();

        $customer = Staff::create($request->except(['name', 'email', 'password']));
        $customer->user()->create($request->only(['name', 'email', 'password']));

        return $customer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
