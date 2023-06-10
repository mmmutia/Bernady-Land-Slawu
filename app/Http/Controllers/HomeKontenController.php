<?php

namespace App\Http\Controllers;

use App\Models\HomeKonten;
use Illuminate\Http\Request;

class HomeKontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/homekonten');
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
     * @param  \App\Models\HomeKonten  $homeKonten
     * @return \Illuminate\Http\Response
     */
    public function show(HomeKonten $homeKonten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeKonten  $homeKonten
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeKonten $homeKonten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeKonten  $homeKonten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeKonten $homeKonten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeKonten  $homeKonten
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeKonten $homeKonten)
    {
        //
    }
}
