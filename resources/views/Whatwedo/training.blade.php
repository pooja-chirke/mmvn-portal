@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="courses-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="courses-banner-img">

    <div class="courses-banner-text">
        <h1>Training & Capacity Building</h1>
        <p>
            Empowering women through skill-based training and capacity development programs.
        </p>
    </div>
</section>


<!-- ================= TRAINING SECTION ================= -->
<section class="courses-section">

    <h2 class="courses-title">Our Training Programs</h2>
    <p class="courses-desc">
        We provide hands-on training programs designed to enhance skills, improve employability, and support self-reliance.
    </p>

    <!-- GRID -->
    <div class="courses-grid">

        <!-- CARD 1 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Computer Training</h3>
            <p>Basic to advanced computer training for digital empowerment.</p>
        </div>

        <!-- CARD 2 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Entrepreneurship Training</h3>
            <p>Guidance on starting and managing small businesses.</p>
        </div>

        <!-- CARD 3 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Skill Development Training</h3>
            <p>Industry-based training programs for job readiness.</p>
        </div>

        <!-- CARD 4 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Financial Awareness</h3>
            <p>Training on savings, loans, and financial management.</p>
        </div>

        <!-- CARD 5 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Leadership Training</h3>
            <p>Develop leadership and decision-making skills.</p>
        </div>

        <!-- CARD 6 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Health & Hygiene Training</h3>
            <p>Awareness programs for better health and well-being.</p>
        </div>

        <!-- CARD 7 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Tailoring Training</h3>
            <p>Learn stitching and tailoring for self-employment.</p>
        </div>

        <!-- CARD 8 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/training.png') }}" class="courses-icon">
            <h3>Digital Marketing Training</h3>
            <p>Learn social media and online business promotion.</p>
        </div>

    </div>
</section>


<!-- ================= TRAINING HIGHLIGHTS ================= -->
<section class="courses-activities">

    <h2 class="courses-title">Training Highlights</h2>

    <div class="courses-activity-grid">

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}">
            <h4>Hands-on Training</h4>
            <p>Practical learning with real-life applications.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Expert Trainers</h4>
            <p>Guidance from experienced professionals.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}">
            <h4>Certification</h4>
            <p>Receive certificates after successful training.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Career Support</h4>
            <p>Support for employment and self-employment opportunities.</p>
        </div>

    </div>
</section>

@endsection