<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_ytvideos;

class PostController extends Controller
{
    function show(){
        $data = model_ytvideos::all();
        return view('ytlist', ['vids' => $data]);
    }
}
