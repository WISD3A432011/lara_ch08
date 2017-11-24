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
        //return View('board');
        $scores = Score::orderByTotal()->orderBySubject()->get();
        $data = ['scores'=>$scores];
        return view('board',$data);
    }
}
