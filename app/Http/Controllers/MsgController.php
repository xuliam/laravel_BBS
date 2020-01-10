<?php

namespace App\Http\Controllers;

use App\Http\Requests\gbook;
use App\Msg;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    public function index(Msg $msg)
    {
        $msgs = $msg->orderBy('id','desc')->paginate(1);
        return view('msg', compact('msgs'));
     }

    public function save(gbook $request, Msg $msg)
    {
        $data = $request->validated();
        $msg->create($data);
        return back();
     }
}
