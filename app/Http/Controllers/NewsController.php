<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    // Display all news on website
    public function index()
    {
        $news = News::latest()->get();
        return view('news', compact('news'));
    }


    // Show single news details
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news_details', compact('news'));
    }


    // Admin: Show form to create news
    public function create()
    {
        return view('admin.news.create');
    }


    // Admin: Store news in database
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);


        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('news_images'), $imageName);

        }


        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName
        ]);


        return redirect()->route('news.index')->with('success','News Added Successfully');

    }


    // Admin: Edit news
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }


    // Admin: Update news
    public function update(Request $request, $id)
    {

        $news = News::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);


        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('news_images'), $imageName);

            $news->image = $imageName;

        }


        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();


        return redirect()->route('news.index')->with('success','News Updated Successfully');

    }


    // Admin: Delete news
    public function destroy($id)
    {

        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success','News Deleted Successfully');

    }

}