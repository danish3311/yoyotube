<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //return dashboard
    public function index(){
       
        return view('admin.dashboard');
        
}
    //return users

    public function users(){
        $users = User::all();
        return view('admin.dashboard-users',['users'=>$users]);
    }


    //remove user
    public function remove(Request $request,$id){
        $users = User::find($id)->delete();
        // $request->session()->put('status', 'User Removed!');
        return redirect('/admin/dashboard/users');
        
}

    //edit user
    public function edit(Request $request,$id){
        $user = User::find($id);
        return view('admin.dashboard-user-edit',['user'=>$user]);

}


     public function update(Request $request,$id){
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();  
            return redirect(route('users'));
}



public function videos(){
    $videos = Video::limit(6)->get();
    return view('admin.dashboard-videos',['videos' => $videos]);
}

public function play($id){
    $video = Video::where("id",'=', $id)->first();       
        return view('admin.dashboard-videos-play',['videos'=> $video]);
}


}