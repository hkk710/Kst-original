<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempleController extends Controller
{
    public function index(Request $request)
    {
        return view('temple.index');
    }
}
