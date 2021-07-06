<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $items = Contact::all();
        return view('contact.confirm',[
            'items' => $items,
        ]);

            

    }
    public function send(Request $request)
    {

    }
}
