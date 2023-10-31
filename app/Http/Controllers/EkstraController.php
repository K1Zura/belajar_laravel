<?php

namespace App\Http\Controllers;

use App\Models\ekstra;
use App\Http\Requests\StoreekstraRequest;
use App\Http\Requests\UpdateekstraRequest;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekskul = ekstra::get();
        return view('ekstrakulikuler', ['ekskullist' => $ekskul]);
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
     * @param  \App\Http\Requests\StoreekstraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreekstraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ekstra = ekstra::with('students')
        ->findOrFail($id);
		return view('ekstrakulikuler_detail', ['ekstra' => $ekstra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function edit(ekstra $ekstra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateekstraRequest  $request
     * @param  \App\Models\ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateekstraRequest $request, ekstra $ekstra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function destroy(ekstra $ekstra)
    {
        //
    }
}
