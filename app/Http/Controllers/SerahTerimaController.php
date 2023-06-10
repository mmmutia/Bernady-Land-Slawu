<?php

namespace App\Http\Controllers;

use App\Models\SerahTerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SerahTerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serahterima = DB::table('serah_terima')->join('pemesanan_rumah', 'serah_terima.id_pemesanan_rumah', '=', 'pemesanan_rumah.id')->get();
        // $cluster = Cluster::all();
        return view('admin/serah-terima-admin', compact('serahterima'));
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
        $serahterima = new SerahTerima();
        $serahterima->id_pemesanan_rumah = $request->id_pemesanan_rumah;
        $serahterima->no_surat_bangunan = $request->no_surat_bangunan;

        $serahterima->save();

        return redirect()->route('pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SerahTerima  $serahTerima
     * @return \Illuminate\Http\Response
     */
    public function show(SerahTerima $serahTerima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SerahTerima  $serahTerima
     * @return \Illuminate\Http\Response
     */
    public function edit(SerahTerima $serahTerima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SerahTerima  $serahTerima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SerahTerima $serahTerima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SerahTerima  $serahTerima
     * @return \Illuminate\Http\Response
     */
    public function destroy(SerahTerima $serahTerima)
    {
        //
    }
}
