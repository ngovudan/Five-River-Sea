<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\tbluser;
use App\productt;
use App\catalog;
use App\quan;
use App\thanhpho;
class homeController extends Controller
{
    public function index(){
        return view('home');
    }
        public function createUser(){
        return view('createuser');
    }
    public function getcreateUser(Request $request){
        $request->validate([
            'hoten' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'thanhpho' => 'required'
        ]);
        $data = array(
            'hoten' => $request->hoten,
            'user' => $request->username,
            'pass' => bcrypt($request->password),
            'lienhe' => $request->email,
            'thanhpho' => $request->thanhpho,
        );
        tbluser::create($data);
        return redirect('/');
    }
    public function about(){
        return view('about');
    }
    public function chat(){
        return view('chat');
    }
    public function ibuy(){
        return view('ibuy');
    }
    public function post(){
        $cates=catalog::all();
        return view('dangtin',['listcate'=>$cates]);
    }
}
