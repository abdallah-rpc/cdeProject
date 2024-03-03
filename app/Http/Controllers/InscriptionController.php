<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription_ar(){
        return view('insc_ar');
    }
    public function inscription_en(){
        return view('insc_en');
    }
}
