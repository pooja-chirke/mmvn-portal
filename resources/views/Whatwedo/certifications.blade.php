@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="courses-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="courses-banner-img">

    <div class="courses-banner-text">
        <h1>Certification Programs</h1>
        <p>
            Enhance your skills with industry-recognized certification programs designed for women empowerment.
        </p>
    </div>
</section>


<!-- ================= CERTIFICATION SECTION ================= -->
<section class="courses-section">

    <h2 class="courses-title">Our Certification Programs</h2>
    <p class="courses-desc">
        Explore our wide range of certification programs that provide practical knowledge, career growth, and empowerment opportunities.
    </p>

    <!-- GRID -->
    <div class="courses-grid">

        <!-- CARD 1 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Digital Literacy Certification</h3>
            <p>Learn essential computer and internet skills for daily use.</p>
        </div>

        <!-- CARD 2 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Entrepreneurship Certification</h3>
            <p>Start and manage your own business successfully.</p>
        </div>

        <!-- CARD 3 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Skill Development Certification</h3>
            <p>Gain industry-relevant skills for employment opportunities.</p>
        </div>

        <!-- CARD 4 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Financial Literacy Certification</h3>
            <p>Understand savings, banking, and financial planning.</p>
        </div>

        <!-- CARD 5 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Leadership Development Certification</h3>
            <p>Build leadership qualities and decision-making skills.</p>
        </div>

        <!-- CARD 6 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Health & Nutrition Certification</h3>
            <p>Learn about women’s health, nutrition, and wellness.</p>
        </div>

        <!-- CARD 7 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Tailoring & Fashion Design</h3>
            <p>Develop skills in tailoring, stitching, and fashion design.</p>
        </div>

        <!-- CARD 8 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Handicraft Certification</h3>
            <p>Learn creative handicraft skills for self-employment.</p>
        </div>

        <!-- CARD 9 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Digital Marketing Certification</h3>
            <p>Master social media, SEO, and online marketing skills.</p>
        </div>

        <!-- CARD 10 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/certificate.png') }}" class="courses-icon">
            <h3>Communication Skills Certification</h3>
            <p>Improve speaking, confidence, and professional communication.</p>
        </div>

    </div>
</section>


<!-- ================= ACTIVITIES / HIGHLIGHTS ================= -->
<section class="courses-activities">

    <h2 class="courses-title">Program Highlights</h2>

    <div class="courses-activity-grid">

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}">
            <h4>Practical Learning</h4>
            <p>Hands-on training with real-world applications.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Expert Trainers</h4>
            <p>Learn from experienced professionals and mentors.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}">
            <h4>Certification</h4>
            <p>Get recognized certificates after successful completion.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Career Growth</h4>
            <p>Boost your career and income opportunities.</p>
        </div>

    </div>
</section>

@endsection