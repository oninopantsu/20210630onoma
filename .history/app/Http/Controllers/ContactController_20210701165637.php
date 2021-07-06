<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index')
    }
    public function confirm(Request $request)
    {

    }
    public function send(Request $request)
    {

    }
}
