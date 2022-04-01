<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use App\View\Components\view;
use Illuminate\Http\Request;

class Form extends Controller
{
    public function index(Request $req)
    {
        return view('form');
    }

    public function view(Request $req)
    {
        $user = $req->user();
        $video = new Video();
        $video->title = $req->title;
        $video->user_id = $user->id;
        $video->description = $req->desc;
        // $req->validate([
        //     "video"=>"required | mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv |max:9000000",
        //     'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
        // ]);
        if ($req->hasFile('thumbnail')) {
            $thumbnail = $req->file('thumbnail');
            $thumbnailname = time() . '.' .$thumbnail->getClientOriginalExtension();
            $thumbnail->move('upload/thumbnails', $thumbnailname);
            $video->thumbnail_filename = $thumbnailname;
        }
        if ($req->hasFile('video')) {
            $videofile = $req->file('video');
            $videofilename = time() . '.' .$videofile->getClientOriginalExtension();
            $videofile->move('upload/videos',$videofilename);
            $video->video_filename = $videofilename;
        }
        $video->save();    
       return "Video Uploaded SuccessFully";
    }
}
