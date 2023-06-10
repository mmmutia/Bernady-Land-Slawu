<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPemesanan;
use Illuminate\Support\Facades\DB;

class RiwayatPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayatpemesanan = DB::table('pemesanan_rumah')->get();
        // $cluster = Cluster::all();
        return view('riwayat-pemesanan', compact('riwayatpemesanan'));
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
     * @param  \App\Models\RiwayatPemesanan  $riwayatPemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(RiwayatPemesanan $riwayatPemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiwayatPemesanan  $riwayatPemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(RiwayatPemesanan $riwayatPemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RiwayatPemesanan  $riwayatPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RiwayatPemesanan $riwayatPemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiwayatPemesanan  $riwayatPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiwayatPemesanan $riwayatPemesanan)
    {
        //
    }
}
