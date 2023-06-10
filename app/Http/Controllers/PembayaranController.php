<?php

namespace App\Http\Controllers;

use App\Models\PembayaranDP;
use App\Models\RiwayatPemesanan;
use Illuminate\Http\Request;
use App\Models\PembayaranInhouse;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = DB::table('pembayaran_dp')->get();
        // $cluster = Cluster::all();
        return view('pembayaran-user', compact('pembayaran'));
    }

    public function indexdp()
    {
        $pembayarandp = DB::table('pembayaran_dp')->get();
        // $cluster = Cluster::all();
        return view('admin/pembayaran', compact('pembayarandp'));
    }

    public function indexinhouse()
    {
        $pembayaraninhouse = DB::table('pembayaran_inhouse')->get();
        // $cluster = Cluster::all();
        return view('admin/pembayaran', compact('pembayaraninhouse'));
    }

    public function lihatpembayarandp()
    {
        $riwayatpembayarandpadmin = DB::table('pembayaran_dp')->get();
        // $cluster = Cluster::all();
        return view('admin/riwayat-pembayaran-dpadmin', compact('riwayatpembayarandpadmin'));
    }

    public function lihatpembayaraninhouse()
    {
        $riwayatpembayaraninhouseadmin = DB::table('pembayaran_inhouse')->get();
        // $cluster = Cluster::all();
        return view('admin/riwayat-pembayaran-inhouseadmin', compact('riwayatpembayaraninhouseadmin'));
    }

    public function riwayatpembayarandp()
    {
        $riwayatpembayarandp = DB::table('pembayaran_dp')->get();
        // $cluster = Cluster::all();
        return view('riwayat-pembayaran-dp', compact('riwayatpembayarandp'));
    }

    public function riwayatpembayaraninhouse()
    {
        $riwayatpembayaraninhouse = DB::table('pembayaran_inhouse')->get();
        // $cluster = Cluster::all();
        return view('riwayat-pembayaran-inhouse', compact('riwayatpembayaraninhouse'));
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
    public function storedp(Request $request)
    {
        $pembayarandp = new PembayaranDP();
        $pembayarandp->nama_pemesan = $request->nama_pemesan;
        $pembayarandp->tgl_pembayaran_dp = $request->tgl_pembayaran_dp;

        if ($request->hasFile('bukti_pembayaran_dp')) {
            $file = $request->file('bukti_pembayaran_dp');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images',$filename);
            $pembayarandp->bukti_pembayaran_dp = $filename;
        }
        DB::statement("ALTER TABLE pembayaran_dp ALTER COLUMN status_dp SET DEFAULT 'Belum di Konfirmasi'");

        $pembayarandp->save();

        return redirect()->route('pembayaran-user');
    }

    public function storeinhouse(Request $request)
    {
        $pembayaraninhouse = new PembayaranInhouse();
        $pembayaraninhouse->nama_pemesan = $request->nama_pemesan;
        $pembayaraninhouse->tgl_pembayaran_inhouse = $request->tgl_pembayaran_inhouse;

        if ($request->hasFile('bukti_pembayaran_inhouse')) {
            $file = $request->file('bukti_pembayaran_inhouse');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images',$filename);
            $pembayaraninhouse->bukti_pembayaran_inhouse = $filename;
        }
        DB::statement("ALTER TABLE pembayaran_inhouse ALTER COLUMN status_inhouse SET DEFAULT 'Belum di Konfirmasi'");

        $pembayaraninhouse->save();

        return redirect()->route('pembayaran-user');
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
        //
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
        //
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
