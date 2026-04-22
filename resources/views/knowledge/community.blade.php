@extends('layouts.app')

@section('content')

<style>

.community-page{
padding:60px 10%;
background:#f4f6f9;
}

.community-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.community-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.community-card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
transition:0.3s;
}

.community-card:hover{
transform:translateY(-5px);
}

.community-card img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
margin-bottom:15px;
}

.community-card h3{
font-size:20px;
margin-bottom:10px;
}

.community-card p{
font-size:14px;
color:#555;
}

.back-btn{
display:inline-block;
margin-top:40px;
padding:10px 20px;
background:#0b5ed7;
color:white;
text-decoration:none;
border-radius:5px;
}

.back-btn:hover{
background:#084298;
}

</style>


<!-- COMMUNITY SECTION -->

<section class="community-page">

<h2 class="community-title">Community Programs</h2>

<div class="community-grid">

<div class="community-card">
<img src="{{ asset('images/community/community1.jpg') }}">
<h3>Women Self Help Groups</h3>
<p>
MMVN supports Self Help Groups (SHGs) that help women build financial
independence through savings, micro-loans, and entrepreneurship.
</p>
</div>

<div class="community-card">
<img src="{{ asset('images/community/community2.jpg') }}">
<h3>Rural Development</h3>
<p>
Community programs focusing on education, sanitation, and
health awareness in rural areas across Maharashtra.
</p>
</div>

<div class="community-card">
<img src="{{ asset('images/community/community3.jpg') }}">
<h3>Skill Development Workshops</h3>
<p>
Regular workshops are conducted to train women in vocational
skills like tailoring, handicrafts, and small business management.
</p>
</div>

<div class="community-card">
<img src="{{ asset('images/community/community4.jpg') }}">
<h3>Community Leadership</h3>
<p>
Programs designed to encourage women to take leadership roles
within their communities and local governance.
</p>
</div>

</div>

<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection