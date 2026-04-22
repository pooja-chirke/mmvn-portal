<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('gallery.events', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());

        if($request->email){
            Mail::raw("Event Reminder: ".$event->title, function($msg) use ($request){
                $msg->to($request->email)->subject('NGO Event Reminder');
            });
        }

        return back()->with('success', 'Event Added!');
    }
}