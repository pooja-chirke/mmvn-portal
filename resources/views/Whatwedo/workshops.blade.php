@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="courses-banner">
    <img src="{{ asset('images/banner/workshops.jpg') }}" class="courses-banner-img">

    <div class="courses-banner-text">
        <h1>Workshops & Webinars</h1>
        <p>
            Interactive learning sessions to build knowledge, awareness, and practical skills.
        </p>
    </div>
</section>


<!-- ================= MAIN SECTION ================= -->
<section class="courses-section">

    <h2 class="courses-title">Our Workshops & Webinars</h2>
    <p class="courses-desc">
        We organize workshops and webinars to provide hands-on learning experiences, expert guidance, and community engagement.
    </p>

    <div class="courses-grid">

        <!-- CARD 1 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Digital Literacy Workshop</h3>
            <p>Learn basic computer and internet usage skills.</p>
        </div>

        <!-- CARD 2 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Entrepreneurship Webinar</h3>
            <p>Guidance on starting and growing your own business.</p>
        </div>

        <!-- CARD 3 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Health & Wellness Session</h3>
            <p>Awareness about women’s health, nutrition, and hygiene.</p>
        </div>

        <!-- CARD 4 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Financial Literacy Workshop</h3>
            <p>Understanding savings, banking, and financial planning.</p>
        </div>

        <!-- CARD 5 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Skill Development Session</h3>
            <p>Hands-on training for job-oriented skills.</p>
        </div>

        <!-- CARD 6 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Climate Awareness Webinar</h3>
            <p>Understanding climate change and sustainable practices.</p>
        </div>

        <!-- CARD 7 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Leadership Workshop</h3>
            <p>Develop leadership and decision-making abilities.</p>
        </div>

        <!-- CARD 8 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/workshop.png') }}" class="courses-icon">
            <h3>Communication Skills Webinar</h3>
            <p>Improve public speaking and professional communication.</p>
        </div>

    </div>
</section>


<!-- ================= HIGHLIGHTS ================= -->
<section class="courses-activities">

    <h2 class="courses-title">Workshop Highlights</h2>

    <div class="courses-activity-grid">

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/workshops.jpg') }}">
            <h4>Interactive Sessions</h4>
            <p>Engaging and practical learning experiences.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Expert Speakers</h4>
            <p>Sessions conducted by experienced professionals.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/workshops.jpg') }}">
            <h4>Community Engagement</h4>
            <p>Connecting participants with real-world knowledge.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Practical Learning</h4>
            <p>Hands-on activities and real-life examples.</p>
        </div>

    </div>
</section>

@endsection