<?php

namespace App\Http\Controllers;

use App\Models\ClusterSimpan;
use Illuminate\Http\Request;

class ClusterSimpanController extends Controller
{
    public function index()
    {
        return view('cluster-tersimpan');
    }

    public function create()
    {
        //
    }
}
