<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    // Show contact page
    public function index()
    {
        return view('contact');
    }


    // Store contact form data
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);


        return redirect()->back()->with('success','Message Sent Successfully');

    }


    // Admin: View all contact messages
    public function messages()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts.messages', compact('contacts'));
    }


    // Admin: Delete message
    public function destroy($id)
    {

        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect()->back()->with('success','Message Deleted Successfully');

    }

}