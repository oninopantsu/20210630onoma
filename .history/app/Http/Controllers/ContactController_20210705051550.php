<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $items = Contact::all();
        return view('index', ['items' => $items]);
    }
    public function confirm(ContactRequest $request)
    {
        $items = Contact::all();
        return view('contact.confirm',[
            'items' => $items,
        ]);

            

    }
    public function send(Request $request)
    {

    }
}
