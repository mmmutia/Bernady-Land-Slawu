<?php

namespace App\Http\Controllers;

use App\Models\Progres;
use Illuminate\Http\Request;

class ProgresController extends Controller
{
    public function index()
    {
        return view('progres');
    }

    public function create()
    {
        //
    }
}
