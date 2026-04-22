<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{

    // Display all media items on website
    public function index()
    {
        $media = Media::latest()->get();
        return view('media', compact('media'));
    }


    // Admin: Show form to create media
    public function create()
    {
        return view('admin.media.create');
    }


    // Admin: Store media in database
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);


        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('media_images'), $imageName);

        }


        Media::create([
            'title' => $request->title,
            'type' => $request->type,
            'link' => $request->link,
            'image' => $imageName
        ]);


        return redirect()->route('media.index')->with('success','Media Added Successfully');

    }


    // Admin: Edit media
    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.media.edit', compact('media'));
    }


    // Admin: Update media
    public function update(Request $request, $id)
    {

        $media = Media::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'type' => 'required',
            'link' => 'nullable|url'
        ]);


        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('media_images'), $imageName);

            $media->image = $imageName;

        }


        $media->title = $request->title;
        $media->type = $request->type;
        $media->link = $request->link;

        $media->save();


        return redirect()->route('media.index')->with('success','Media Updated Successfully');

    }


    // Admin: Delete media
    public function destroy($id)
    {

        $media = Media::findOrFail($id);
        $media->delete();

        return redirect()->route('media.index')->with('success','Media Deleted Successfully');

    }

}