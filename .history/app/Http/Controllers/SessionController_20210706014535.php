<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function ses_get(Request $request)
    {
        $sessdata = $request->session()->get('')
    }
}
