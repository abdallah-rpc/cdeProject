<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription($lang){
        $retVal = ($lang == 'ar') ? 'insc_ar' : 'insc_en' ;
        return view($retVal);
    }
}
