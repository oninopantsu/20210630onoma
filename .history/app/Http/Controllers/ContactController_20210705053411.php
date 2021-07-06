<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use illuminate\Http\ContactRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $items = Contact::all();
        return view('contact.index', ['items' => $items]);
    }
    public function confirm(Request $request)
    {
        $this->validate()
        ]);

            

    }
    public function send(Request $request)
    {

    }
}
