<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseEnrollment;

class CourseController extends Controller
{

public function form($course)
{
return view('courses.enroll',compact('course'));
}

public function store(Request $request)
{

CourseEnrollment::create([
'course'=>$request->course,
'name'=>$request->name,
'email'=>$request->email,
'phone'=>$request->phone
]);

return redirect('/')->with('success','Enrollment successful');

}

}