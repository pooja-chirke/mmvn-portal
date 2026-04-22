@extends('layouts.app')

@section('content')

<!-- ================= PAGE BANNER ================= -->
<section class="page-banner">

    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">

    <div class="banner-text">
        <h1>Our Programs</h1>
        <p>
            Empowering women through education, skills, leadership,
            and community development initiatives.
        </p>
    </div>

</section>


<!-- ================= PROGRAMS SECTION ================= -->
<section class="program-container">

    <div class="program-grid">

        <!-- PROGRAM 1 -->
        <div class="program-card">
            <img src="{{ asset('images/icons/education.png') }}">
            <h3>Women Education Program</h3>
            <p>
                Providing educational support and awareness programs to improve literacy
                and knowledge among women in rural and urban communities.
            </p>
        </div>

        <!-- PROGRAM 2 -->
        <div class="program-card">
            <img src="{{ asset('images/icons/books.png') }}">
            <h3>Skill Development Training</h3>
            <p>
                Training programs designed to help women develop professional skills
                and start small businesses or employment opportunities.
            </p>
        </div>

        <!-- PROGRAM 3 -->
        <div class="program-card">
            <img src="{{ asset('images/icons/award.png') }}">
            <h3>Entrepreneurship Support</h3>
            <p>
                Encouraging women entrepreneurs by providing mentorship,
                financial guidance, and business development training.
            </p>
        </div>

        <!-- PROGRAM 4 -->
        <div class="program-card">
            <img src="{{ asset('images/icons/education.png') }}">
            <h3>Self Help Group Development</h3>
            <p>
                Supporting self-help groups that empower women through
                collective savings, financial independence, and community development.
            </p>
        </div>

        <!-- PROGRAM 5 -->
        <div class="program-card">
            <img src="{{ asset('images/icons/books.png') }}">
            <h3>Health Awareness Programs</h3>
            <p>
                Organizing health awareness camps and workshops to improve
                women’s health, hygiene, and nutrition awareness.
            </p>
        </div>

        <!-- PROGRAM 6 -->
        <div class="program-card">
            <img src="{{ asset('images/icons/award.png') }}">
            <h3>Leadership Development</h3>
            <p>
                Developing leadership qualities among women so they can
                actively participate in community and social development activities.
            </p>
        </div>

    </div>

</section>

@endsection