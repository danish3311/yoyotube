<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\View\Components\view;
use Illuminate\Http\Request;

class Play extends Controller
{

    public function index($id)
    {
        $video = Video::where("id",'=', $id)->first();       
        return view('play',['video'=> $video]);
      }
}
