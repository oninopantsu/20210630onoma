<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest as RequestsContactRequest;
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
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        unset($form['_token_']);
        $items = DB::table('items')->where('items',$user_id)->first();
        return view('index', ['lastname' => $items]);
    }
}
