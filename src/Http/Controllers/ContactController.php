<?php

namespace Polyloans\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Polyloans\Contact\Models\Contact;

class ContactController extends BaseController
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Contact::create($request->all());
        return back();
    }
}
