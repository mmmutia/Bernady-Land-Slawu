<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
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
    public function show(Contact $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $about)
    {
        //
    }
}
