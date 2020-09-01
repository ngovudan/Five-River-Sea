<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Emloyee;
use App\tbluser;
use App\productt;
use App\catalog;
use App\quan;
use App\thanhpho;
use App\blogM;
use DB;
class homeController extends Controller
{
    public function index(){
        $cates=catalog::all();
        return view('home',['listcate'=>$cates]);
    }
    public function createUser(){
        return view('createuser');
    }
    public function getcreateUser(Request $request){
        Alert::error('Tạo tài khoản thất bại', 'Vui lòng kiểm tra lại!', 'Type');
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
            'password' => bcrypt($request->password),
            'lienhe' => $request->email,
            'thanhpho' => $request->thanhpho,
        );
        $regis = tbluser::create($data);
        $regis = Alert::success('Tạo tài khoản', 'Thành công', 'Type');
        return redirect('/');
    }

    public function getLogin(Request $request){
        alert()->html('Đăng nhập thất bại', '', "<button type='button' data-toggle='modal' data-target='#myModal'>Type</button>");
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = [
            'lienhe' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($data)){
            if(Auth::check()){
                session(['user'=>Auth::user()]);
                Alert::success('Đăng nhập thành công', '', 'Type');
                return redirect('/');
            } else {
                Alert::error('Đăng nhập thất bại', '', 'Type');
            }
        }
    }
    function logoutUser(){
        session()->forget('user');
        return redirect('/');
    }

    public function chat(){
        return view('chat');
    }
    public function ibuy(){
        return view('ibuy');
    }
    // public function post(){
    //     $cates=catalog::all();
    //     $thanhphos = thanhpho::groupBy('tenthanhpho')->select('tenthanhpho', DB::raw('count(*) as total'))->get();
    //     return view('dangtin',['listcate'=>$cates, 'thanhphos'=>$thanhphos]);
    // }
    public function post(){
        $cates=catalog::all();
        $thanhphos = thanhpho::groupBy('tenthanhpho')->select('tenthanhpho', DB::raw('count(*) as total'))->get();
        return view('dangtin',['listcate'=>$cates, 'thanhphos'=>$thanhphos]);
    }
    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'tennguoiban'=>'required',
            'post'=>'required',
            'gia'=>'required',
            'phone'=>'required',
            'name'=>'required',
            'danhmuc'=>'required',
            'thanhpho'=>'required',
            'quan'=>'required',
            'id_user'=>'required',
        ]);
        $cates=catalog::all();
    
        $employee =  new Emloyee();
        $employee->tensanpham = $request->input('name');
        $employee->tennguoiban = $request->input('tennguoiban');
        $employee->mota = $request->input('post');
        $employee->gia = $request->input('gia');
        $employee->phone = $request->input('phone');
        $employee->idCategory = $request->input('danhmuc');
        $employee->thanhpho = $request->input('thanhpho');
        $employee->quan = $request->input('quan');
        $employee->id_user = $request->input('id_user');
        $employee->trangthai= 0;
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            //$file->move(asset('upload'), $filename);
            $file->move('images', $filename);
            $employee->hinhanh = $filename;
        } else{
            return $request;
            $employee->hinhanh = '';
        }
        $employee->save();
        return view('dangtin',['listcate'=>$cates])->with('dangtin',$employee);
    }
    function filtercity(Request $request){
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('thanhpho')
        ->where($select, $value)
        ->groupBy($dependent)
        ->get();
        $output ='<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row){
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }
    public function createpost(Request $request){
        $request->validate([
            'danhmuc'=>'required',
            'thanhpho'=>'required',
            'quan'=>'required',
            'phuong'=>'required',
            'image'=>'required',
            'name'=>'required',
            'hinhthuc'=>'required',
            'title'=>'required',
            'detail'=>'required',
        ]);
        // kiểm tra upload file
        if($request->hasFile('image')){
            $allowedfileExtension = ['jpg','png'];
            $files = $request->file('image');
            // kiểm tra xem đã lưu trong DB chưa
            $exe_flg = true;
            // Kiểm tra tất cả các file có đuôi chưa
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
				$check = in_array($extension,$allowedfileExtension);

				if(!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
					$exe_flg = false;
					break;
				}
            }
            // nếu không gì bất thường thì okay
            if($exe_flg){
                $data = array(
                    
                );
                foreach ($request->image as $images) {
                    $filename = $images->storeAs('image', $image->getClientOriginalName());
                }
            }
        }
    }

    // START BLOG
    public function blog(){
        $ListBlog=blogM::all();

        return view('blog', ['Blogs' => $ListBlog]);
    }

    public function blogDetail($id){
        $show_detail = blogM::where('id', '=', $id)->get();
        return view('detail', ['productdetail'=>$show_detail]);
    }

    public function CreateBlog(){
        return view('createB');
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
        return view('/blog',['Blogs' => $ListBlog])->with('/blog',$employee);

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
