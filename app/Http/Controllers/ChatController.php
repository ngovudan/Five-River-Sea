<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Events\client\chat;
use Illuminate\Http\Request;
use App\tbluser;
use App\chats;
use App\productt;
class ChatController extends Controller
{
    public function index($id){
        // $request->validate([
        //     'idnguoigui'=>'unique:chat',
        //     'idnguoinhan'=>'unique:chat',
        // ]);
        // $data = array(
        //     'idnguoigui'=>$request->nguoigui,
        //     'idnguoinhan'=>$request->nguoinhan,
        // );
        // $createchat = chats::create($data);

        // $iduser = chats::all();
        $iduser=productt::where('products.id',$id)
        ->join('chat','chat.idnguoigui','=','products.id_user')->get();   
        return view('client/message',['idusers'=>$iduser]);     
    }
    public function viewchat($user_id){

        // $my_id = Auth::user()->iduser;
        // $messages = chats::where(function ($query) use ($user_id, $my_id){
        //     $query->where('idnguoigui',$my_id)->where('idnguoinhan',$user_id);
        // })->orWhere(function ($query) use ($user_id, $my_id){
        //     $query->where('idnguoigui',$user_id)->where('idnguoinhan',$my_id);
        // })->get();
        
        // return view('client/message',['messages'=>$messages]);
        $messages = chats::where('idnguoinhan','=',$user_id)->get();
        return $messages;
    }
    public function submit(Request $request)
    {
        // $data = [
        //     'message' => $request->message,
        // ];
        // $creates = array(
        //     'tinnhan'=>$request->message,
        //     'idnguoigui'=>$request->nguoigui,
        //     'idnguoinhan'=>$request->nguoinhan,
        // );
        $data = [
            'message' => $request->message,
        ];
        event(new chat($data['message']));
        return response()->json(['message' => $data['message']], 200);
        // chats::create($creates);
    }
}
