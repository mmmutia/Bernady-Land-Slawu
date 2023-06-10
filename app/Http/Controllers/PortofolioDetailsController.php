<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortofolioDetails;
use Illuminate\Support\Facades\DB;

class PortofolioDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cluster = DB::table('cluster')->get();
        // $cluster = Cluster::all();
        return view('portofolio-details', compact('cluster'));
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
     * @param  \App\Models\PortofolioDetails  $portofolioDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PortofolioDetails $portofolioDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortofolioDetails  $portofolioDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PortofolioDetails $portofolioDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortofolioDetails  $portofolioDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortofolioDetails $portofolioDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortofolioDetails  $portofolioDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortofolioDetails $portofolioDetails)
    {
        //
    }
}
