<?php

namespace App\Http\Controllers;

use App\Models\Progres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progres = DB::table('progres')->join('pemesanan_rumah', 'progres.id_pemesanan_rumah', '=', 'pemesanan_rumah.id')->get();
        // $cluster = Cluster::all();
        return view('admin/progres', compact('progres'));
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
        $progres = new Progres();
        $progres->id_pemesanan_user = $request->id_pemesanan_user;
        $progres->id_user = $request->id_user;
        $progres->status = $request->status;
        $progres->keterangan = $request->keterangan;
        $progres->foto = $request->foto;
        $progres->tanggal = $request->tanggal;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images',$filename);
            $progres->foto = $filename;
        }


        $progres->save();

        return redirect()->route('progres');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function show(Progres $progres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function edit(Progres $progres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progres $progres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progres  $progres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progres $progres)
    {
        //
    }
}
