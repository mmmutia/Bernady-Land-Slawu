<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $about)
    {
        //
    }
}
