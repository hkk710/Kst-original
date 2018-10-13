<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;

class PrathishttaController extends Controller
{
    public function index(Request $request)
    {
        $descriptions = Description::class;
        return view('prathishtta.index')->withDescriptions($descriptions);
    }
}
