<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|min:10',
            'comments'=>'required'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comments = $request->comments;
        $contact->save();
        return redirect()->back()->with('message','Your message has been sent successfully');
    }
}
