<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function ses_get(Request $request)
    {
        $sessdata = $request->session()->get('$param');
        return view('session',['session_data'=>$sessdata]);
    }
    public function ses_put(Request $request)
    {
        $param = $request->input;
        $request->session()->put('param',$param)
    }
}
