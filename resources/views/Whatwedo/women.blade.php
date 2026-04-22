@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="courses-banner">
    <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}" class="courses-banner-img">

    <div class="courses-banner-text">
        <h1>Women Empowerment & Gender Equality</h1>
        <p>
            Empowering women through education, awareness, and skill development initiatives.
        </p>
    </div>
</section>


<!-- ================= MAIN SECTION ================= -->
<section class="courses-section">

    <h2 class="courses-title">Our Empowerment Programs</h2>
    <p class="courses-desc">
        We focus on building confidence, financial independence, and equal opportunities for women through various initiatives.
    </p>

    <div class="courses-grid">

        <!-- CARD 1 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Self-Help Groups (SHGs)</h3>
            <p>Promoting savings, credit, and community support among women.</p>
        </div>

        <!-- CARD 2 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Financial Independence</h3>
            <p>Training women for income-generating activities and entrepreneurship.</p>
        </div>

        <!-- CARD 3 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Skill Development</h3>
            <p>Providing vocational training for sustainable livelihoods.</p>
        </div>

        <!-- CARD 4 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Leadership Development</h3>
            <p>Encouraging women to take leadership roles in society.</p>
        </div>

        <!-- CARD 5 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Health Awareness</h3>
            <p>Programs on hygiene, nutrition, and women’s health.</p>
        </div>

        <!-- CARD 6 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Legal Awareness</h3>
            <p>Educating women about their rights and legal protections.</p>
        </div>

        <!-- CARD 7 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Digital Inclusion</h3>
            <p>Bridging the digital divide with technology training.</p>
        </div>

        <!-- CARD 8 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/women.png') }}" class="courses-icon">
            <h3>Entrepreneurship Support</h3>
            <p>Helping women start and grow their own businesses.</p>
        </div>

    </div>
</section>


<!-- ================= IMPACT / HIGHLIGHTS ================= -->
<section class="courses-activities">

    <h2 class="courses-title">Impact & Highlights</h2>

    <div class="courses-activity-grid">

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}">
            <h4>Community Impact</h4>
            <p>Thousands of women empowered across regions.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Skill Training</h4>
            <p>Hands-on programs for employment and self-reliance.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}">
            <h4>Awareness Programs</h4>
            <p>Improving knowledge on rights, health, and equality.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Economic Growth</h4>
            <p>Supporting women-led businesses and income generation.</p>
        </div>

    </div>
</section>

@endsection