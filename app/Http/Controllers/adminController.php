<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    //this content receive after login
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        return view('admin');
    }

    public function LoginCheck(Request $request){
        return view('dashboard');
    }
}
