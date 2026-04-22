@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="courses-banner">
    <img src="{{ asset('images/banner/climate-change.jpg') }}" class="courses-banner-img">

    <div class="courses-banner-text">
        <h1>Climate Change & Sustainability</h1>
        <p>
            Promoting environmental awareness and sustainable practices for a better future.
        </p>
    </div>
</section>


<!-- ================= MAIN SECTION ================= -->
<section class="courses-section">

    <h2 class="courses-title">Our Climate Initiatives</h2>
    <p class="courses-desc">
        We empower communities, especially women, to actively participate in environmental conservation and climate action.
    </p>

    <div class="courses-grid">

        <!-- CARD 1 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Environmental Awareness</h3>
            <p>Educating communities about climate change and its impact.</p>
        </div>

        <!-- CARD 2 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Tree Plantation Drives</h3>
            <p>Encouraging afforestation and green initiatives.</p>
        </div>

        <!-- CARD 3 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Water Conservation</h3>
            <p>Promoting sustainable water usage and rainwater harvesting.</p>
        </div>

        <!-- CARD 4 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Waste Management</h3>
            <p>Training in recycling, waste segregation, and eco-friendly practices.</p>
        </div>

        <!-- CARD 5 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Renewable Energy Awareness</h3>
            <p>Promoting solar and other renewable energy solutions.</p>
        </div>

        <!-- CARD 6 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Sustainable Livelihood</h3>
            <p>Encouraging eco-friendly income-generating activities.</p>
        </div>

        <!-- CARD 7 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Climate Education</h3>
            <p>Workshops and training programs on sustainability.</p>
        </div>

        <!-- CARD 8 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/climate.png') }}" class="courses-icon">
            <h3>Community Participation</h3>
            <p>Engaging local communities in climate action initiatives.</p>
        </div>

    </div>
</section>


<!-- ================= HIGHLIGHTS ================= -->
<section class="courses-activities">

    <h2 class="courses-title">Impact & Highlights</h2>

    <div class="courses-activity-grid">

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/climate-change.jpg') }}">
            <h4>Green Initiatives</h4>
            <p>Thousands of trees planted across regions.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Awareness Programs</h4>
            <p>Educating communities about climate responsibility.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/climate-change.jpg') }}">
            <h4>Eco-friendly Practices</h4>
            <p>Promoting sustainable lifestyles and practices.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Community Impact</h4>
            <p>Empowering women to lead environmental change.</p>
        </div>

    </div>
</section>

@endsection