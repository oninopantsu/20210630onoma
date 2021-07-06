<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'postcode' => 'required|max:8',
            'address' => "required",
            'buildingname' => '',
            'opinion' => 'required|max:8',
        ]);
        $item = $request->all();
        return view('contact.confirm',[
            'items' => $item,
        ]);

            

    }
    public function send(Request $request)
    {

    }
}
