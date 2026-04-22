@extends('layouts.app')

@section('content')

<style>

.achievements-page{
padding:60px 10%;
background:#f4f6f9;
}

.achievements-title{
text-align:center;
font-size:32px;
margin-bottom:40px;
}

.achievements-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.achievement-card{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
text-align:center;
transition:0.3s;
}

.achievement-card:hover{
transform:translateY(-5px);
}

.achievement-card img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
margin-bottom:15px;
}

.achievement-card h3{
font-size:20px;
margin-bottom:10px;
}

.achievement-card p{
font-size:14px;
color:#555;
}

.back-btn{
display:inline-block;
margin-top:30px;
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


<!-- ACHIEVEMENTS SECTION -->

<section class="achievements-page">

<h2 class="achievements-title">Our Achievements</h2>

<div class="achievements-grid">

{{-- DATABASE DATA --}}
@if(isset($data) && count($data) > 0)

@foreach($data as $item)

<div class="achievement-card">

<img src="{{ asset('images/'.$item->image) }}">

<h3>{{ $item->title }}</h3>

<p>{{ $item->description }}</p>

</div>

@endforeach

{{-- STATIC DATA (Fallback) --}}
@else

<div class="achievement-card">
<img src="{{ asset('images/achievements/achievement1.jpg') }}">
<h3>Women Entrepreneurship Award</h3>
<p>
Recognized for empowering women entrepreneurs across rural Maharashtra
through skill development and financial support programs.
</p>
</div>

<div class="achievement-card">
<img src="{{ asset('images/achievements/achievement2.jpg') }}">
<h3>Community Development Program</h3>
<p>
Successfully implemented community programs benefiting thousands
of families in rural and urban areas.
</p>
</div>

<div class="achievement-card">
<img src="{{ asset('images/achievements/achievement3.jpg') }}">
<h3>Skill Development Training</h3>
<p>
Trained more than 10,000 women in vocational skills such as tailoring,
handicrafts, and small business management.
</p>
</div>

<div class="achievement-card">
<img src="{{ asset('images/achievements/achievement4.jpg') }}">
<h3>Women Leadership Initiative</h3>
<p>
Developed leadership programs encouraging women to participate
in community decision-making and governance.
</p>
</div>

@endif

</div>


<div style="text-align:center;">
<a href="{{ url('/knowledge') }}" class="back-btn">
Back to Knowledge Center
</a>
</div>

</section>

@endsection