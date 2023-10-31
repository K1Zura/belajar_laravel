<?php

namespace App\Http\Controllers;

use App\Models\SchoolModel;
use App\Http\Requests\StoreSchoolModelRequest;
use App\Http\Requests\UpdateSchoolModelRequest;

class SchoolModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSchoolModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolModel  $schoolModel
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolModel $schoolModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolModel  $schoolModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolModel $schoolModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolModelRequest  $request
     * @param  \App\Models\SchoolModel  $schoolModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolModelRequest $request, SchoolModel $schoolModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolModel  $schoolModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolModel $schoolModel)
    {
        //
    }
}
