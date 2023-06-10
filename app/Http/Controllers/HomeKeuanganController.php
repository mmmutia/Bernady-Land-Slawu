<?php

namespace App\Http\Controllers;

use App\Models\HomeKeuangan;
use Illuminate\Http\Request;

class HomeKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/homekeuangan');
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
     * @param  \App\Models\HomeKeuangan  $homeKeuangan
     * @return \Illuminate\Http\Response
     */
    public function show(HomeKeuangan $homeKeuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeKeuangan  $homeKeuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeKeuangan $homeKeuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeKeuangan  $homeKeuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeKeuangan $homeKeuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeKeuangan  $homeKeuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeKeuangan $homeKeuangan)
    {
        //
    }
}
