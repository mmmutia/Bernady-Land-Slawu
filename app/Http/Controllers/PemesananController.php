<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = DB::table('pemesanan_rumah')->get();
        // $cluster = Cluster::all();
        return view('pemesanan', compact('pemesanan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemesanan = new Pemesanan();
        $pemesanan->nama_pemesan = $request->nama_pemesan;
        $pemesanan->id_user = $request->id_user;
        $pemesanan->alamat = $request->alamat;
        $pemesanan->no_telp = $request->no_telp;
        $pemesanan->nama_cluster = $request->nama_cluster;
        $pemesanan->jenis_pembayaran = $request->jenis_pembayaran;
        $pemesanan->tgl_pemesanan = $request->tgl_pemesanan;
        $pemesanan->jumlah_cicilan_dp = $request->jumlah_cicilan_dp;
        $pemesanan->jumlah_cicilan_inhouse = $request->jumlah_cicilan_inhouse;

        if ($request->hasFile('fc_ktp')) {
            $file = $request->file('fc_ktp');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images',$filename);
            $pemesanan->fc_ktp = $filename;
        }

        $pemesanan->save();

        return redirect()->route('homeuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $listPemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListPemesanan  $listPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

