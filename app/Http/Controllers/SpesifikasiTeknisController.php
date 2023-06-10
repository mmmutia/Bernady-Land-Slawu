<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpesifikasiTeknis;
use Illuminate\Support\Facades\DB;

class SpesifikasiTeknisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spek = DB::table('spesifikasi_teknis')->join('cluster', 'spesifikasi_teknis.id_cluster', '=', 'cluster.id')->get();
        // $cluster = Cluster::all();
        return view('admin/cluster', compact('cluster'));
    }
    public function tambahspekindex()
    {
        return view('admin/tambah-spek');
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
        $spek = new SpesifikasiTeknis();
        $spek->id_cluster = $request->id_cluster;
        $spek->pondasi = $request->pondasi;
        $spek->dinding = $request->dinding;
        $spek->rangka_atap = $request->rangka_atap;
        $spek->kusen = $request->kusen;
        $spek->plafond = $request->plafond;
        $spek->air = $request->air;
        $spek->listrik = $request->listrik;
        $spek->jumlah_kamar = $request->jumlah_kamar;
        $spek->luas_tanah = $request->luas_tanah;

        $spek->save();

        return redirect()->route('cluster');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SpesifikasiTeknis  $spesifikasiTeknis
     * @return \Illuminate\Http\Response
     */
    public function show(SpesifikasiTeknis $spesifikasiTeknis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpesifikasiTeknis  $spesifikasiTeknis
     * @return \Illuminate\Http\Response
     */
    public function edit(SpesifikasiTeknis $spesifikasiTeknis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpesifikasiTeknis  $spesifikasiTeknis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpesifikasiTeknis $spesifikasiTeknis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpesifikasiTeknis  $spesifikasiTeknis
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpesifikasiTeknis $spesifikasiTeknis)
    {
        //
    }
}
