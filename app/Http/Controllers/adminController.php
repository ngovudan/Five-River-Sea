<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productt;
use App\catalog;
use App\tbluser;
use App\filter;
use App\blogM;
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
        $ListBlog=blogM::all();
        return view('admin/page',['Blogs' => $ListBlog]);
    }
    public function product(){
        // $productfilter = DB::table('products')->join('filter','products.iddanhmuc','=','filter.iddanhmuc')->get();
        $innercat = DB::table('catalog')->join('products','catalog.idCategory','=','products.idCategory')->get(); 
        $productt = productt::all();
        return view('admin/sanpham',['productt'=>$productt,'innercat'=>$innercat]);
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
    public function upduyet(Request $request,$id)
    {
        $innercat = DB::table('catalog')->join('products','catalog.idCategory','=','products.idCategory')->get();
        $data=array(
            'trangthai'=> 1
        );
        $prO=productt::whereId($id)->update($data);
        $productt = productt::all();
        return view('admin/sanpham',['productt'=>$productt,'innercat'=>$innercat]);
    }
    public function koduyet(Request $request,$id)
    {
        $innercat = DB::table('catalog')->join('products','catalog.idCategory','=','products.idCategory')->get();
        $data=array(
            'trangthai'=> 0
        );
        $prO=productt::whereId($id)->update($data);
        $productt = productt::all();
        return view('admin/sanpham',['productt'=>$productt,'innercat'=>$innercat]);
    }
    public function CreateBlog(){
        return view('admin/createB');
    }

    public function blogC(Request $request){

        $ListBlog=blogM::all();
        $employee = new blogM;

        $employee->imgB = $request->input('imgB');
        $employee->nameB = $request->input('nameB');
        $employee->description = $request->input('descriptionB');
        $employee->contentB = $request->input('contentB');
        $employee->dayB = $request->input('dayB');
        $employee->view = $request->input('view');

        if($request->hasFile('imgB'))
        {
            
            $file = $request->file('imgB');
            $extension = $file->getClientOriginalExtension();
            $changeName = time() . '.' . $extension;
            //$file->move(asset('upload'), $filename);
            $file->move('images', $changeName);
            $employee->imgB = $changeName;
        }
        else
        {
            return $request;
            $employee->imgB = '';
        }
        $employee->save();
        return view('admin/page',['Blogs' => $ListBlog])->with('admin/page',$employee);

        // $request->validate([
        //     'imgB'=>['required'],
        //     'nameB'=>['required'],
        //     'contentB'=>['required'],
        //     'dayB'=>['required'],
        //     'view'=>['required']
        // ]);

        //get data form
        // $data=array(
        //     'imgB'=>$request->imgB,
        //     'nameB'=>$request->nameB,
        //     'contentB'=>$request->contentB,
        //     'dayB'=>$request->dayB,
        //     'view'=>$request->view
        // );

        
        //them vao database
        // blogM::create($data);
        // return redirect('/blog');
    }

    function delete($id){
        blogM::where('id', $id)->delete();
        return redirect()->back();
    }

    function edit($id){
        $blogU = blogM::find($id);
        return view('updateB',['blogU'=>$blogU]);
    }

    function update(Request $request, $id){
        $data = array(
            'imgB'=>$request->imgB,
            'nameB'=>$request->nameB,
            'contentB'=>$request->contentB,
            'dayB'=>$request->dayB,
            'view'=>$request->view
        );
        $blogU = blogM::whereId($id)->update($data);
        return redirect('/blog');
    }
}
