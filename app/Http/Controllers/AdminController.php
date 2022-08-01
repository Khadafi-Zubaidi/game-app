<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function register_admin(){
        return view('register.register_admin');
    }
}
