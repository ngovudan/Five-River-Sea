<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function index(){
        return view('admin/login');
    }
    public function checkLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $data = [
            'lienhe' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($data)){
            if(Auth::check()){
                session(['admin'=>Auth::user()]);
                return redirect('/admin');
            } else{
                return redirect('/admin/login');
            }
        }
    }
    function logout(){
        session()->forget('admin');
        return redirect('/admin');
    }
}
