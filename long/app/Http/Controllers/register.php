<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function home(){
        return view('register');
    }

    public function store(){
        echo "Them thanh cong";
    }
}
