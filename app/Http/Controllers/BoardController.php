<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Score;
use View;
use Route;
class BoardController extends Controller
{
    public function getIndex()
    {
        return View('board');
    }
}
