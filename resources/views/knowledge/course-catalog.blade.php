@extends('layouts.app')

@section('content')

<style>

.course-page{
padding:60px 10%;
background:#f4f6f9;
}

.course-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.course-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.course-card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
transition:0.3s;
}

.course-card:hover{
transform:translateY(-5px);
}

.course-card img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
margin-bottom:15px;
}

.course-card h3{
font-size:20px;
margin-bottom:10px;
}

.course-card p{
font-size:14px;
color:#555;
}

.enroll-btn{
display:inline-block;
margin-top:10px;
padding:8px 15px;
background:#0b5ed7;
color:white;
text-decoration:none;
border-radius:5px;
font-size:14px;
}

.enroll-btn:hover{
background:#084298;
}

.back-btn{
display:inline-block;
margin-top:40px;
padding:10px 20px;
background:#198754;
color:white;
text-decoration:none;
border-radius:5px;
}

</style>


<!-- COURSE CATALOG SECTION -->

<section class="course-page">

<h2 class="course-title">Training Course Catalog</h2>

<div class="course-grid">

<div class="course-card">
<img src="{{ asset('images/courses/course1.jpg') }}">
<h3>Entrepreneurship Development</h3>
<p>
Learn how to start and manage small businesses through financial
planning, marketing strategies, and entrepreneurship skills.
</p>
<a href="{{ url('/enroll/Entrepreneurship Development') }}" class="enroll-btn">
Enroll Now
</a>
</div>

<div class="course-card">
<img src="{{ asset('images/courses/course2.jpg') }}">
<h3>Tailoring & Fashion Design</h3>
<p>
Skill-based training for women to develop expertise in tailoring,
fashion design, and clothing production.
</p>
<a href="{{ url('/enroll/Tailoring & Fashion Design') }}" class="enroll-btn">
Enroll Now
</a>
</div>

<div class="course-card">
<img src="{{ asset('images/courses/course3.jpg') }}">
<h3>Digital Literacy</h3>
<p>
Training programs to help women learn computer basics,
internet usage, and digital tools for communication.
</p>
<a href="{{ url('/enroll/Digital Literacy') }}" class="enroll-btn">
Enroll Now
</a>
</div>

<div class="course-card">
<img src="{{ asset('images/courses/course4.jpg') }}">
<h3>Financial Literacy</h3>
<p>
Workshops teaching budgeting, saving, banking services,
and financial management for self-reliance.
</p>
<a href="{{ url('/enroll/Financial Literacy') }}" class="enroll-btn">
Enroll Now
</a>
</div>

</div>

<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection