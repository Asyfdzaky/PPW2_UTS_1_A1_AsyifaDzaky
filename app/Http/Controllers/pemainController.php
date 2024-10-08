<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class pemainController extends Controller{
    public function index(){

        $pemain = pemain::all();
        return view('index', compact('pemain'));
    }
}