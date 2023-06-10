<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPemesanan;
use Illuminate\Support\Facades\DB;

class ListPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listpemesanan = DB::table('pemesanan_rumah')->get();
        // $cluster = Cluster::all();
        return view('admin/list-pemesanan', compact('listpemesanan'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(ListPemesanan $listPemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(ListPemesanan $listPemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListPemesanan $listPemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListPemesanan $listPemesanan)
    {
        //
    }
}
