<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{

    // ===============================
    // 📄 SHOW ALL BLOGS
    // ===============================
    public function index()
    {
        // Fetch blogs with comments
        $blogs = Blog::with('comments')
                    ->latest()
                    ->get();

        return view('knowledge.blogs', compact('blogs'));
    }


    // ===============================
    // ➕ STORE NEW BLOG (ADMIN)
    // ===============================
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        // Insert data
        Blog::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'Blog added successfully!');
    }


    // ===============================
    // ❌ DELETE BLOG
    // ===============================
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->back()->with('success', 'Blog deleted!');
    }


    // ===============================
    // 💬 ADD COMMENT
    // ===============================
    public function addComment(Request $request)
    {
        // Validation
        $request->validate([
            'blog_id' => 'required',
            'name' => 'required|max:100',
            'comment' => 'required'
        ]);

        Comment::create([
            'blog_id' => $request->blog_id,
            'name' => $request->name,
            'comment' => $request->comment
        ]);

        return redirect()->back()->with('success', 'Comment added!');
    }

}