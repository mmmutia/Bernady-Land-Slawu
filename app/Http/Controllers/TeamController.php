<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
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
    public function show(Team $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $about)
    {
        //
    }
}
