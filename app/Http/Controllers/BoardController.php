<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Route;
class BoardController extends Controller
{
    public function getIndex()
    {
        return View::make('board');
    }
}
