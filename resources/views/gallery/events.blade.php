@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<style>
.event-card {
    border-radius: 12px;
    padding: 15px;
    background: #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: 0.3s;
}
.event-card:hover {
    transform: translateY(-5px);
}

.calendar-box {
    text-align:center;
    padding:20px;
    background:#6a11cb;
    color:white;
    border-radius:10px;
    cursor:pointer;
}

.calendar-modal {
    display:none;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.85);
    z-index:9999;
}

.calendar-content {
    position:relative;
    width:95%;
    max-width:1100px;
    height:80vh;
    margin:60px auto;
    background:#fff;
    border-radius:10px;
    overflow:hidden;
}

.calendar-close {
    position:absolute;
    top:10px;
    right:15px;
    background:red;
    color:#fff;
    border:none;
    padding:6px 10px;
    cursor:pointer;
}
</style>

@php
    $events = $events ?? collect();
@endphp

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Events & Programs</h1>
        <p>Track NGO activities & live schedules</p>
    </div>
</section>

<!-- ================= CALENDAR ================= -->
<section class="content-section">
    <div class="container">

        <h2 class="section-title">Event Calendar</h2>

        <div class="calendar-box" onclick="openCalendar()">
            <h3 id="todayDate"></h3>
            <p>📅 Click to open full calendar</p>
        </div>

    </div>
</section>

<!-- ================= MODAL ================= -->
<div id="calendarModal" class="calendar-modal">
    <div class="calendar-content">
        <button class="calendar-close" onclick="closeCalendar()">X</button>
        <iframe 
            src="https://calendar.google.com/calendar/embed?src=en.indian%23holiday%40group.v.calendar.google.com&ctz=Asia%2FKolkata"
            style="border:0; width:100%; height:100%;">
        </iframe>
    </div>
</div>

<!-- ================= FILTER ================= -->
<section class="content-section">
    <div class="container">
        <h2 class="section-title">Filter Events</h2>

        <div style="text-align:center;">
            <button onclick="filterEvents('all')">All</button>
            <button onclick="filterEvents('training')">Training</button>
            <button onclick="filterEvents('health')">Health</button>
            <button onclick="filterEvents('workshop')">Workshop</button>
            <button onclick="filterEvents('awareness')">Awareness</button>
        </div>
    </div>
</section>

<!-- ================= EVENTS ================= -->
<section class="courses-section">
<div class="container">

<h2 class="section-title">Upcoming Events</h2>

<div class="course-grid">

@forelse($events as $event)

<div class="event-card event-item" data-category="{{ $event->category }}">
    <h3>{{ $event->title }}</h3>
    <p>📍 {{ $event->location }}</p>
    <p>📅 {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
    <p>{{ $event->description }}</p>
</div>

@empty

<!-- ✅ 10 STATIC EVENTS -->

<div class="event-card event-item" data-category="training">
<h3>Women Skill Training</h3>
<p>📍 Mumbai</p>
<p>📅 15 Jan 2025</p>
<p>Digital skills for women empowerment</p>
</div>

<div class="event-card event-item" data-category="health">
<h3>Health Awareness Camp</h3>
<p>📍 Pune</p>
<p>📅 20 Jan 2025</p>
<p>Free health checkup for women</p>
</div>

<div class="event-card event-item" data-category="workshop">
<h3>Entrepreneurship Workshop</h3>
<p>📍 Nashik</p>
<p>📅 25 Jan 2025</p>
<p>Startup training for women</p>
</div>

<div class="event-card event-item" data-category="awareness">
<h3>Women Safety Awareness</h3>
<p>📍 Nagpur</p>
<p>📅 30 Jan 2025</p>
<p>Safety & legal rights session</p>
</div>

<div class="event-card event-item" data-category="training">
<h3>Computer Literacy Program</h3>
<p>📍 Thane</p>
<p>📅 5 Feb 2025</p>
<p>Basic computer training</p>
</div>

<div class="event-card event-item" data-category="health">
<h3>Nutrition Workshop</h3>
<p>📍 Kolhapur</p>
<p>📅 10 Feb 2025</p>
<p>Healthy lifestyle training</p>
</div>

<div class="event-card event-item" data-category="workshop">
<h3>Digital Marketing Workshop</h3>
<p>📍 Mumbai</p>
<p>📅 15 Feb 2025</p>
<p>Online business growth</p>
</div>

<div class="event-card event-item" data-category="awareness">
<h3>Legal Rights Seminar</h3>
<p>📍 Pune</p>
<p>📅 20 Feb 2025</p>
<p>Know your rights</p>
</div>

<div class="event-card event-item" data-category="training">
<h3>Tailoring Training</h3>
<p>📍 Solapur</p>
<p>📅 25 Feb 2025</p>
<p>Skill development program</p>
</div>

<div class="event-card event-item" data-category="health">
<h3>Yoga Camp</h3>
<p>📍 Satara</p>
<p>📅 1 Mar 2025</p>
<p>Physical & mental wellness</p>
</div>

@endforelse

</div>
</div>
</section>

<!-- ================= MODAL ================= -->
<div id="eventModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.7);">

<div style="background:white; padding:20px; width:50%; margin:60px auto;">
<h3 id="modalTitle"></h3>
<p id="modalDesc"></p>
<button onclick="closeModal()">Close</button>
</div>

</div>

<!-- ================= JS ================= -->
<script>

document.getElementById("todayDate").innerText = new Date().toDateString();

function openCalendar(){
    document.getElementById("calendarModal").style.display = "block";
}

function closeCalendar(){
    document.getElementById("calendarModal").style.display = "none";
}

function filterEvents(type){
    document.querySelectorAll(".event-item").forEach(item => {
        let cat = item.getAttribute("data-category");
        item.style.display = (type === "all" || cat === type) ? "block" : "none";
    });
}

function openModal(title, desc){
    document.getElementById("eventModal").style.display = "block";
    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDesc").innerText = desc;
}

function closeModal(){
    document.getElementById("eventModal").style.display = "none";
}

</script>

@endsection