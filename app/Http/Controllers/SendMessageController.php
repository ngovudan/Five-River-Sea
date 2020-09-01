<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MyEvent;

class SendMessageController extends Controller
{
    public function index()
    {
        return view('message');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');

        event(new MyEvent($data));
        return redirect()->route('send');
    }
}
