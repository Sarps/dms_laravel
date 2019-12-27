<?php

namespace App\Http\Controllers;

use App\PartModel;
use Illuminate\Http\Request;

class PartModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PartModel::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PartModel  $partModel
     * @return \Illuminate\Http\Response
     */
    public function show(PartModel $partModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PartModel  $partModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PartModel $partModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PartModel  $partModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PartModel $partModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PartModel  $partModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartModel $partModel)
    {
        //
    }
}
