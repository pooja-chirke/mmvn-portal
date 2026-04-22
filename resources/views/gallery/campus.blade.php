@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<style>

/* GLOBAL FIX */
.container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
}

/* SECTION SPACING */
.section {
    margin: 50px 0;
}

/* GRID FIX */
.grid {
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
    align-items:stretch;
}

/* CARD FIX */
.card {
    background:#fff;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    overflow:hidden;
    display:flex;
    flex-direction:column;
}

/* IMAGE ALIGN FIX */
.card img {
    width:100%;
    height:200px;
    object-fit:cover;
}

/* TEXT ALIGN */
.card p {
    padding:10px;
    text-align:center;
    font-weight:500;
}

/* MAP + VIDEO */
iframe {
    width:100%;
    border-radius:10px;
}

/* BOOKING FORM */
.booking-form {
    max-width:500px;
    margin:auto;
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
.booking-form input, 
.booking-form textarea {
    width:100%;
    margin:8px 0;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
}
.booking-form button {
    width:100%;
    padding:10px;
    background:#6a11cb;
    color:white;
    border:none;
    border-radius:5px;
}

/* CTA */
.cta {
    text-align:center;
    padding:30px;
    background:#6a11cb;
    color:white;
    border-radius:10px;
}

</style>

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Campus Tour</h1>
        <p>Explore our NGO environment in 360° & real-time</p>
    </div>
</section>


<!-- ================= 360° TOUR ================= -->
<section class="section">
<div class="container">

<h2 class="section-title">360° Virtual Tour</h2>

<iframe 
src="https://www.google.com/maps?q=NGO+office&output=embed"
height="400">
</iframe>

<p style="text-align:center; margin-top:10px;">
👉 Drag & explore the campus in 360°
</p>

</div>
</section>

<!-- ================= GALLERY ================= -->
<section class="section">
<div class="container">

<h2 class="section-title">Campus Gallery</h2>

<div class="grid">

@foreach($gallery ?? [] as $img)
<div class="card">
    <img src="{{ asset('gallery_images/'.$img->image) }}">
    <p>{{ $img->title }}</p>
</div>
@endforeach

<!-- DEMO -->
<div class="card">
<img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644">
<p>Training Center</p>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1509062522246-3755977927d7">
<p>Workshop Activity</p>
</div>

</div>

</div>
</section>


<!-- ================= ADMIN UPLOAD ================= -->
<section class="section">
<div class="container">

<h2 class="section-title">Upload Campus Images (Admin)</h2>

<form method="POST" action="/admin/gallery/store" enctype="multipart/form-data" class="booking-form">
@csrf

<input type="text" name="title" placeholder="Image Title" required>
<input type="file" name="image" required>

<button type="submit">Upload</button>

</form>

</div>
</section>


<!-- ================= BOOK VISIT ================= -->
<section class="section">
<div class="container">

<h2 class="section-title">Book Campus Visit</h2>

<div class="booking-form">

<form method="POST" action="/visit-booking">
@csrf

<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="date" name="date" required>
<input type="time" name="time" required>

<textarea name="message" placeholder="Purpose of Visit"></textarea>

<button type="submit">Book Visit</button>

</form>

</div>

</div>
</section>


<!-- ================= LIVE BOOKINGS ================= -->
<section class="section">
<div class="container">

<h2 class="section-title">Upcoming Visits</h2>

<div class="grid">

@foreach($visits ?? [] as $visit)
<div class="card">
<p><strong>{{ $visit->name }}</strong></p>
<p>📅 {{ $visit->date }}</p>
<p>⏰ {{ $visit->time }}</p>
<p>{{ $visit->message }}</p>
</div>
@endforeach

</div>

</div>
</section>


<!-- ================= CTA ================= -->
<section class="section">
<div class="container">

<div class="cta">
<h2>Visit Our NGO Campus</h2>
<p>Experience empowerment, learning & community growth</p>
</div>

</div>
</section>

@endsection