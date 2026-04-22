@extends('layouts.app')

@section('content')

<style>

.resources-page{
padding:60px 10%;
background:#f4f6f9;
}

.resources-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.resources-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.resource-card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
transition:0.3s;
text-align:center;
}

.resource-card:hover{
transform:translateY(-5px);
}

.resource-card img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
margin-bottom:15px;
}

.resource-card h3{
font-size:20px;
margin-bottom:10px;
}

.resource-card p{
font-size:14px;
color:#555;
}

.download-btn{
display:inline-block;
margin-top:10px;
padding:8px 15px;
background:#0b5ed7;
color:white;
text-decoration:none;
border-radius:5px;
}

.download-btn:hover{
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


<!-- RESOURCES SECTION -->

<section class="resources-page">

<h2 class="resources-title">Learning Resources</h2>

<div class="resources-grid">

<div class="resource-card">
<img src="{{ asset('images/resources/resource1.jpg') }}">
<h3>Entrepreneurship Guide</h3>
<p>
A complete guide to starting and managing small businesses
for women entrepreneurs.
</p>
<a href="#" class="download-btn">Download</a>
</div>

<div class="resource-card">
<img src="{{ asset('images/resources/resource2.jpg') }}">
<h3>Financial Literacy Handbook</h3>
<p>
Learn essential financial management skills including
saving, budgeting, and banking services.
</p>
<a href="#" class="download-btn">Download</a>
</div>

<div class="resource-card">
<img src="{{ asset('images/resources/resource3.jpg') }}">
<h3>Digital Skills Training Material</h3>
<p>
Educational materials designed to help women develop
digital literacy and computer skills.
</p>
<a href="#" class="download-btn">Download</a>
</div>

<div class="resource-card">
<img src="{{ asset('images/resources/resource4.jpg') }}">
<h3>Leadership Development Guide</h3>
<p>
Resources focused on leadership training and community
development initiatives.
</p>
<a href="#" class="download-btn">Download</a>
</div>

</div>

<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection