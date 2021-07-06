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
        $user = new Contacts;
        $items = Contact::all();
        return view('contact.index', ['items' => $items]);
    }
    public function confirm(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        unset($form['_token_']);
        return view('contact.confilm');
    }
    public function thanks(Request $request)
    {
        $form = Contact::find($request->id);
        return redirect('/');
    }
}
