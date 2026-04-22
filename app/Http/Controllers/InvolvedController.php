<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Involved;

class InvolvedController extends Controller
{

    // Show Get Involved / Volunteer page
    public function index()
    {
        return view('involved');
    }


    // Store volunteer information
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:15',
            'message' => 'required'
        ]);


        Involved::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);


        return redirect()->back()->with('success','Thank you for getting involved!');

    }


    // Admin: View all volunteers
    public function volunteers()
    {

        $volunteers = Involved::latest()->get();

        return view('admin.volunteers.list', compact('volunteers'));

    }


    // Admin: Delete volunteer record
    public function destroy($id)
    {

        $volunteer = Involved::findOrFail($id);

        $volunteer->delete();

        return redirect()->back()->with('success','Volunteer Deleted Successfully');

    }

}