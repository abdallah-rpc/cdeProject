<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($lang){
         $retVal = ($lang == 'ar') ? 'home_ar' : 'home_en' ;
         return view($retVal) ;
    }
}
