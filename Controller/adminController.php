<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\catalog;
use App\tbluser;
use App\filter;
use DB;
class adminController extends Controller
{
    public function index(){
        if(session('admin')){
            return view('admin/dashboard');
        } else{
            return view('admin/login');
        }
        
    }
    public function table(){
        return view('admin/tables');
    }
    public function page(){
        return view('admin/page');
    }
    public function product(){
        $filter = filter::all();
        $productfilter = DB::table('products')->join('filter','products.iddanhmuc','=','filter.iddanhmuc')->get();
        $innercat = DB::table('catalog')->join('products','catalog.iddanhmuc','=','products.idsanpham')->get();
        $product = products::paginate(5);
        return view('admin/sanpham',['product'=>$product, 'innercat'=>$innercat, 'filter'=>$filter, 'productfilter'=>$productfilter]);
    }
    public function filterupdate(Request $request){
        
    }
    public function gallery(){
        return view('admin/gallery');
    }
    public function user(){
        $user = tbluser::paginate(5);
        return view('admin/user',['user'=>$user]);
    }
    public function addproduct(){
        return view('admin/addsanpham');
    }
}
