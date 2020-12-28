<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class duongController extends Controller
{
    public function demo(){
        return view('login');
    }
    public function postLogin(Request $request){

        $this->validate($request,[
           'username'=>'required',
            'password'=>'required|min:5|max:200'

        ],[
            'username.required'=>'looix',
            'password.require'=>'loi'

        ]);
        if(Auth::attempt(['name' => $request->username, 'password' => $request->password])){
            echo "login success";
        }
    }
}
