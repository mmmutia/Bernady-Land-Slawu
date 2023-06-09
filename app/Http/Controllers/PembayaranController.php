<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('pembayaran');
    }

    public function create(){
        $pembayaran = new Pembayaran;
        
    }
}
