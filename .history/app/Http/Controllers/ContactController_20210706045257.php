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
        $param = new Contact;
        $items = Contact::all();
        $this->validate($request, Contact::$rules);

        return view('contact.index', ['items' => $items]);
    }
    public function confirm(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        unset($form['_token_']);
        return view('contact.confirm');
    }
    public function thanks(Request $request)
    {
        return redirect('/');
    }
    public function search(Request $request)
    {
        $form = Contact::find($request->id);
        $form = $request->all();
        return redirect('contact.management');

    }
    public function delete(Request $request)
    {
        $form = Contact::find($request->id);
        return view('delete', ['form' =>])
    }
}
