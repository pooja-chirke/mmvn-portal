<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knowledge;

class knowledgeController extends Controller
{
     public function index()
    {
        return view('knowledge.index');
    }

    public function achievements()
    {
        $data = Knowledge::where('category','achievements')->get();
        return view('knowledge.achievements', compact('data'));
    }

    public function caseStudies()
    {
        $data = Knowledge::where('category','case-studies')->get();
        return view('knowledge.case-studies', compact('data'));
    }

    public function community()
    {
        $data = Knowledge::where('category','community')->get();
        return view('knowledge.community', compact('data'));
    }

    public function resources()
    {
        $data = Knowledge::where('category','resources')->get();
        return view('knowledge.resources', compact('data'));
    }
}
