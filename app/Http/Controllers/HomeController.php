<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //練習八
    public function indexc()
    {
        return view('welcome');
    }

}
