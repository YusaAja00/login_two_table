<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use App\Http\Requests\StorepetugasRequest;
use App\Http\Requests\UpdatepetugasRequest;

class PetugasController extends Controller
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
     * @param  \App\Http\Requests\StorepetugasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepetugasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(petugas $petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepetugasRequest  $request
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepetugasRequest $request, petugas $petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(petugas $petugas)
    {
        //
    }
}
