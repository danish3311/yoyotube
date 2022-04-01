<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Whois extends Controller
{
   public function show(Request $request){
    //    return Auth::user()->name;
       return $request->user();
   }


   public function check(Request $request){
   if(Auth::check()){
       return "user is logged in";
   }
   else{
       return "unauthenticated user";   
   }
   }
}
