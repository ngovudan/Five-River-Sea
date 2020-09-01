<?php

namespace App\Http\Controllers\Admin;
use App\Events\admin\chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){
        return view('admin/chat');
    }
    public function submit(Request $request)
    {
        $data = [
            'message' => $request->message,
        ];
        event(new chat($data['message']));

        return response()->json(['message' => $data['message']], 200);
    }
}
