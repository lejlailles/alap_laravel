<?php

namespace App\Http\Controllers;
use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index(){

        $tevekenyseg = Tevekenyseg::all();

        return response()->json($tevekenyseg);
    }

}
