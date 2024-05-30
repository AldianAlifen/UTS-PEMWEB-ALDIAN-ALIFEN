<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataguru;

class frontend extends Controller
{
    public function home () {
        $datagurus  = Dataguru::get();
        return view('Guru.index', compact('datagurus'));
    }
}
