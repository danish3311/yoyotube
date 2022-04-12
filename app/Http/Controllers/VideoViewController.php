<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoViewController extends Controller
{

    public function videoview(){
        $videos = Video::limit(6)->get();
        return view('home',['videos' => $videos]);
    }

}
