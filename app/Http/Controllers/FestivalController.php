<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function index(Request $request)
    {
        return view("festival.index");
    }
}
