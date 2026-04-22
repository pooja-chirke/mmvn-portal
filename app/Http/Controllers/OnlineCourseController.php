<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineCourse;

class OnlineCourseController extends Controller
{
    public function index()
    {
        // Fetch all courses (latest first)
        $courses = OnlineCourse::latest()->get();

        // Send data to blade
        return view('Whatwedo.onlinecourses', [
            'courses' => $courses
        ]);
    }
}