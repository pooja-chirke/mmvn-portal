@extends('layouts.app')

@section('content')

<!-- ================= PAGE BANNER ================= -->

<section class="page-banner">
    <img src="{{ asset('images/banner/mavim-overview.jpg') }}" class="banner-img">

    <div class="banner-text">
        <h1>MAVIM Overview</h1>
        <p>
        Empowering women across Maharashtra through self-help groups,
        entrepreneurship development, and leadership opportunities.
        </p>
    </div>
</section>



<!-- ================= ABOUT MAVIM ================= -->

<section class="content-section">
<div class="content-container">

    <div class="content-text">
        <h2>About MAVIM</h2>

        <p>
        Mahila Arthik Vikas Mahamandal (MAVIM) is an organization dedicated
        to the economic and social empowerment of women across Maharashtra.
        </p>

        <p>
        Through training programs, financial literacy initiatives,
        entrepreneurship development, and community participation,
        MAVIM supports women in becoming economically independent.
        </p>

        <p>
        The organization focuses on building strong networks of women's groups
        and encouraging leadership.
        </p>
    </div>

    <div class="content-image">
        <img src="{{ asset('images/programs/women-empowerment.jpg') }}">
    </div>

</div>
</section>



<!-- ================= KEY PROGRAMS ================= -->

<section class="activities">

<h2 class="text-center">Key Programs</h2>

<div class="activity-container">

    <div class="activity-card">
        <img src="{{ asset('images/programs/training.jpg') }}">
        <h3>Skill Development</h3>
        <p>Helping women build sustainable livelihoods.</p>
    </div>

    <div class="activity-card">
        <img src="{{ asset('images/programs/research.jpg') }}">
        <h3>Financial Literacy</h3>
        <p>Training in banking and financial management.</p>
    </div>

    <div class="activity-card">
        <img src="{{ asset('images/programs/advocacy.jpg') }}">
        <h3>Community Leadership</h3>
        <p>Encouraging participation in decision making.</p>
    </div>

    <div class="activity-card">
        <img src="{{ asset('images/programs/partnership.jpg') }}">
        <h3>Women Enterprises</h3>
        <p>Supporting entrepreneurship and growth.</p>
    </div>

</div>

</section>



<!-- ================= IMPACT ================= -->

<section class="impact-section">

<div class="impact-container">

<h2>Our Impact</h2>

<p>
MAVIM has transformed thousands of women’s lives by providing skills and opportunities.
</p>

<p>
It strengthens communities and promotes economic independence.
</p>

</div>

</section>



<!-- ================= IMAGE GALLERY ================= -->

<section class="gallery-section">

<h2 class="text-center">Program Highlights</h2>

<div class="gallery-container">

    <div class="gallery-item">
        <img src="{{ asset('images/programs/training.jpg') }}">
    </div>

    <div class="gallery-item">
        <img src="{{ asset('images/programs/advocacy.jpg') }}">
    </div>

    <div class="gallery-item">
        <img src="{{ asset('images/programs/partnership.jpg') }}">
    </div>

    <div class="gallery-item">
        <img src="{{ asset('images/programs/women-empowerment.jpg') }}">
    </div>

</div>

</section>

@endsection