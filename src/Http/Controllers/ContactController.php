<?php

namespace Abdo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Abdo\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact::contact');
    }

    public function Send(Request $request)
    {
    	 Contact::create($request->all());
    	 return back();
    }
}
