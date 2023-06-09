<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClusterController extends Controller
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
        return view('admin/cluster', compact('cluster'));
    }
    public function tambahclusterindex()
    {
        return view('admin/tambah-cluster');
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
        $cluster = new Cluster();
        $cluster->nama_cluster = $request->nama_cluster;
        $cluster->blok = $request->blok;
        $cluster->jumlah_unit = $request->jumlah_unit;
        $cluster->harga = $request->harga;
        $cluster->harga_dp = $request->harga_dp;
        $cluster->filter = $request->filter;
        $cluster->jenis_cluster = $request->jenis_cluster;

        if ($request->hasFile('foto_cluster')) {
            $file = $request->file('foto_cluster');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images',$filename);
            $cluster->foto_cluster = $filename;
        }

        $cluster->save();

        return redirect()->route('cluster');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cluster = DB::table('cluster')->where('id','=',$id)->first();
        // dd($cluster);
        return view('admin/edit-cluster',compact('cluster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cluster = DB::table('cluster')->where('id','=',$id);
        if ($request->hasFile('foto_cluster')) {
            $file = $request->file('foto_cluster');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images',$filename);
            $cluster->update([
                'nama_cluster' => $request->nama_cluster,
                'blok' => $request->blok,
                'jumlah_unit' => $request->jumlah_unit,
                'harga' => $request->harga,
                'harga_dp' => $request->harga_dp,
                'filter' => $request->filter,
                'jenis_cluster' => $request->jenis_cluster,
                'foto_cluster' => $filename,
                ]);
        }else {
            $cluster->update([
                'nama_cluster' => $request->nama_cluster,
                'blok' => $request->blok,
                'jumlah_unit' => $request->jumlah_unit,
                'harga' => $request->harga,
                'harga_dp' => $request->harga_dp,
                'filter' => $request->filter,
                'jenis_cluster' => $request->jenis_cluster,
                ]);
        }
        
        return redirect()->route('cluster');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
