@extends('layouts.app')

@section('content')

<style>
.feedback-page{
padding:60px 10%;
background:#f4f6f9;
}

.feedback-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.feedback-form{
max-width:600px;
margin:auto;
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
}

.feedback-form input,
.feedback-form textarea{
width:100%;
padding:10px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

.feedback-form button{
padding:10px 20px;
background:#0b5ed7;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

.feedback-form button:hover{
background:#084298;
}

.back-btn{
display:inline-block;
margin-top:30px;
padding:10px 20px;
background:#198754;
color:white;
text-decoration:none;
border-radius:5px;
}
</style>


<!-- FEEDBACK SECTION -->

<section class="feedback-page">

<h2 class="feedback-title">Share Your Feedback</h2>

<div class="feedback-form">

<form>

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<textarea name="message" rows="5" placeholder="Write your feedback here..." required></textarea>

<button type="submit">Submit Feedback</button>

</form>

</div>


<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection