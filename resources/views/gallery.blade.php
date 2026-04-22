@extends('layouts.app')

@section('content')

<!-- ================= PAGE BANNER ================= -->
<section class="page-banner">

<img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">

<div class="banner-text">
    <h1>Photo Gallery</h1>
    <p>Explore our activities, workshops, and empowerment programs.</p>
</div>

</section>


<!-- ================= GALLERY GRID ================= -->
<section class="gallery-container">

<div class="gallery-card">
<img src="{{ asset('images/news/news1.jpg') }}">
<p>Women empowerment awareness program</p>
</div>

<div class="gallery-card">
<img src="{{ asset('images/news/news2.jpg') }}">
<p>Equality awareness campaign</p>
</div>

<div class="gallery-card">
<img src="{{ asset('images/news/news3.jpg') }}">
<p>Women empowerment workshop</p>
</div>

<div class="gallery-card">
<img src="{{ asset('images/news/news4.jpg') }}">
<p>Entrepreneurship development training</p>
</div>

<div class="gallery-card">
<img src="{{ asset('images/news/news1.jpg') }}">
<p>Community leadership program</p>
</div>

<div class="gallery-card">
<img src="{{ asset('images/news/news2.jpg') }}">
<p>Self-help group training</p>
</div>

<div class="gallery-card">
<img src="{{ asset('images/news/news3.jpg') }}">
<p>Women skill development program</p>
</div>

<div class="gallery-card">
<img src="{{ asset('images/news/news4.jpg') }}">
<p>Financial literacy workshop</p>
</div>

</section>

@endsection