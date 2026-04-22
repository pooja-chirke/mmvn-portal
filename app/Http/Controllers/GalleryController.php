<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{

    // Show gallery on website
    public function index()
    {
        $gallery = Gallery::latest()->get();

        // ✅ FIXED VIEW PATH
        return view('gallery.photo', compact('gallery'));
    }


    // Show form to add gallery image (Admin)
    public function create()
    {
        return view('admin.gallery.create');
    }


    // Store gallery image
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('gallery_images'), $imageName);

        }

        Gallery::create([
            'title' => $request->title,
            'image' => $imageName
        ]);

        return redirect()->route('gallery.index')->with('success','Image Added Successfully');

    }


    // Edit gallery image
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }


    // Update gallery image
    public function update(Request $request, $id)
    {

        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255'
        ]);

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('gallery_images'), $imageName);

            $gallery->image = $imageName;

        }

        $gallery->title = $request->title;

        $gallery->save();

        return redirect()->route('gallery.index')->with('success','Gallery Updated Successfully');

    }


    // Delete gallery image
    public function destroy($id)
    {

        $gallery = Gallery::findOrFail($id);

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success','Image Deleted Successfully');

    }

}