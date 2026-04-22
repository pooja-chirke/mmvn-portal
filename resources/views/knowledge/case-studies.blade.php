@extends('layouts.app')

@section('content')

<style>

.case-page{
padding:60px 10%;
background:#f4f6f9;
}

.case-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.case-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.case-card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
transition:0.3s;
}

.case-card:hover{
transform:translateY(-5px);
}

.case-card img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
margin-bottom:15px;
}

.case-card h3{
font-size:20px;
margin-bottom:10px;
}

.case-card p{
font-size:14px;
color:#555;
}

.read-btn{
display:inline-block;
margin-top:10px;
padding:8px 15px;
background:#0b5ed7;
color:white;
text-decoration:none;
border-radius:5px;
font-size:14px;
}

.read-btn:hover{
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


<!-- CASE STUDIES SECTION -->

<section class="case-page">

<h2 class="case-title">Case Studies</h2>

<div class="case-grid">

<div class="case-card">
<img src="{{ asset('images/case-studies/case1.jpg') }}">
<h3>Women Self Help Group Success</h3>
<p>
A group of rural women started a small handicraft business with the
support of MMVN training programs and microfinance initiatives.
</p>
<a href="#" class="read-btn">Read More</a>
</div>

<div class="case-card">
<img src="{{ asset('images/case-studies/case2.jpg') }}">
<h3>Skill Training Impact</h3>
<p>
Women from underprivileged communities received vocational training
that enabled them to start their own tailoring businesses.
</p>
<a href="#" class="read-btn">Read More</a>
</div>

<div class="case-card">
<img src="{{ asset('images/case-studies/case3.jpg') }}">
<h3>Community Leadership Development</h3>
<p>
MMVN leadership programs encouraged women to participate in local
governance and community development activities.
</p>
<a href="#" class="read-btn">Read More</a>
</div>

<div class="case-card">
<img src="{{ asset('images/case-studies/case4.jpg') }}">
<h3>Financial Independence Journey</h3>
<p>
Through financial literacy workshops, women learned budgeting,
saving, and small investment strategies.
</p>
<a href="#" class="read-btn">Read More</a>
</div>

</div>

<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection