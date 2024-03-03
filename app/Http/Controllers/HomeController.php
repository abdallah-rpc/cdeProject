<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index_ar(){
       return view('home_ar') ;
    }

    public function index_en(){
        return view('home_en') ;
     }
}
