@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="courses-banner">
    <img src="{{ asset('images/banner/skills-development.jpg') }}" class="courses-banner-img">

    <div class="courses-banner-text">
        <h1>Skill Development Programs</h1>
        <p>
            Building skills for employment, entrepreneurship, and self-reliance.
        </p>
    </div>
</section>


<!-- ================= MAIN SECTION ================= -->
<section class="courses-section">

    <h2 class="courses-title">Our Skill Development Initiatives</h2>
    <p class="courses-desc">
        We offer various skill development programs to empower women and youth with practical knowledge and career opportunities.
    </p>

    <div class="courses-grid">

        <!-- CARD 1 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Computer Skills</h3>
            <p>Basic to advanced computer training for digital literacy.</p>
        </div>

        <!-- CARD 2 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Tailoring & Fashion</h3>
            <p>Learn stitching, designing, and fashion techniques.</p>
        </div>

        <!-- CARD 3 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Beauty & Wellness</h3>
            <p>Training in beauty services and personal care industry.</p>
        </div>

        <!-- CARD 4 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Handicrafts</h3>
            <p>Develop creative skills for handmade products.</p>
        </div>

        <!-- CARD 5 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Digital Marketing</h3>
            <p>Learn social media marketing, SEO, and online promotion.</p>
        </div>

        <!-- CARD 6 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Entrepreneurship</h3>
            <p>Build and manage small businesses effectively.</p>
        </div>

        <!-- CARD 7 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Retail & Sales</h3>
            <p>Training in customer handling and sales techniques.</p>
        </div>

        <!-- CARD 8 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/skills.png') }}" class="courses-icon">
            <h3>Communication Skills</h3>
            <p>Improve speaking, confidence, and interpersonal skills.</p>
        </div>

    </div>
</section>


<!-- ================= HIGHLIGHTS ================= -->
<section class="courses-activities">

    <h2 class="courses-title">Program Highlights</h2>

    <div class="courses-activity-grid">

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/skills-development.jpg') }}">
            <h4>Hands-on Training</h4>
            <p>Practical sessions with real-world applications.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Expert Trainers</h4>
            <p>Learn from industry professionals.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/skills-development.jpg') }}">
            <h4>Certification</h4>
            <p>Get recognized certificates after completion.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Career Opportunities</h4>
            <p>Improve job prospects and self-employment chances.</p>
        </div>

    </div>
</section>

@endsection