<?php

namespace App\Http\Controllers;

use App\View\Components\view;
use Illuminate\Http\Request;

class ForgetController extends Controller
{
    public function index(){
        return view('forget');
    }
}
