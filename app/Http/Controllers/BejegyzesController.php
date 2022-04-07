<?php

namespace App\Http\Controllers;
use App\Models\Bejegyzesek;

use Illuminate\Http\Request;

class BejegyzesController extends Controller
{
    public function index(){
        $bejegyzes=Bejegyzesek::with('tevekenyseg')->get();
        return $bejegyzes;
    }


    public function ujBejegyzes(Request $request){
        $bejegyzes=new Bejegyzesek();
        
    
    }
}
