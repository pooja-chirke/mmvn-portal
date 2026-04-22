@extends('layouts.app')

@section('content')

<style>

.quiz-page{
padding:60px 10%;
background:#f4f6f9;
}

.quiz-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.quiz-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.quiz-card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
text-align:center;
transition:0.3s;
}

.quiz-card:hover{
transform:translateY(-5px);
}

.quiz-card img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
margin-bottom:15px;
}

.quiz-card h3{
font-size:20px;
margin-bottom:10px;
}

.quiz-card p{
font-size:14px;
color:#555;
}

.start-btn{
display:inline-block;
margin-top:10px;
padding:8px 15px;
background:#0b5ed7;
color:white;
text-decoration:none;
border-radius:5px;
}

.start-btn:hover{
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


<!-- QUIZ SECTION -->

<section class="quiz-page">

<h2 class="quiz-title">Knowledge Quizzes</h2>

<div class="quiz-grid">

<div class="quiz-card">
<img src="{{ asset('images/quizzes/quiz1.jpg') }}">
<h3>Women Empowerment Quiz</h3>
<p>
Test your knowledge about women empowerment, rights,
and leadership development programs.
</p>
<a href="#" class="start-btn">Start Quiz</a>
</div>

<div class="quiz-card">
<img src="{{ asset('images/quizzes/quiz2.jpg') }}">
<h3>Financial Literacy Quiz</h3>
<p>
Check your understanding of savings, banking,
and financial management concepts.
</p>
<a href="#" class="start-btn">Start Quiz</a>
</div>

<div class="quiz-card">
<img src="{{ asset('images/quizzes/quiz3.jpg') }}">
<h3>Entrepreneurship Quiz</h3>
<p>
Assess your knowledge about entrepreneurship,
business planning, and marketing strategies.
</p>
<a href="#" class="start-btn">Start Quiz</a>
</div>

<div class="quiz-card">
<img src="{{ asset('images/quizzes/quiz4.jpg') }}">
<h3>Digital Skills Quiz</h3>
<p>
Test your digital literacy skills including
internet usage, communication tools, and safety.
</p>
<a href="#" class="start-btn">Start Quiz</a>
</div>

</div>

<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection