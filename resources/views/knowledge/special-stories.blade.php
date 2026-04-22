@extends('layouts.app')

@section('content')

<style>
.stories-page{
padding:60px 10%;
background:#f4f6f9;
}

.stories-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.stories-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.story-card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
transition:0.3s;
}

.story-card:hover{
transform:translateY(-5px);
}

.story-card img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
margin-bottom:15px;
}

.story-card h3{
font-size:20px;
margin-bottom:10px;
}

.story-card p{
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


<!-- SPECIAL STORIES SECTION -->

<section class="stories-page">

<h2 class="stories-title">Special Stories</h2>

<div class="stories-grid">

<div class="story-card">
<img src="{{ asset('images/stories/story1.jpg') }}">
<h3>From Homemaker to Entrepreneur</h3>
<p>
Through MMVN entrepreneurship training, Sunita started
her own handicraft business and now employs several
women from her village.
</p>
<a href="#" class="read-btn">Read More</a>
</div>

<div class="story-card">
<img src="{{ asset('images/stories/story2.jpg') }}">
<h3>Empowering Rural Women</h3>
<p>
A group of rural women formed a Self Help Group and
successfully built a sustainable micro-enterprise
with MMVN support.
</p>
<a href="#" class="read-btn">Read More</a>
</div>

<div class="story-card">
<img src="{{ asset('images/stories/story3.jpg') }}">
<h3>Digital Skills Transformation</h3>
<p>
MMVN digital literacy programs helped women learn
computer and internet skills, opening new employment
opportunities.
</p>
<a href="#" class="read-btn">Read More</a>
</div>

<div class="story-card">
<img src="{{ asset('images/stories/story4.jpg') }}">
<h3>Leadership in the Community</h3>
<p>
Women leaders trained by MMVN are actively participating
in community decision-making and local governance.
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