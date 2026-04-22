@extends('layouts.app')

@section('content')

<!-- ================= PAGE HEADER ================= -->

<section class="about-header">
    <h1>Vision & Mission</h1>
    <p>Empowering Women for a Stronger Society</p>
</section>



<!-- ================= VISION ================= -->

<section class="vm-detail">

<div class="vm-row">

    <div class="vm-img-box">
        <img src="{{ asset('images/vision/vision.jpg') }}">
    </div>

    <div class="vm-text">
        <h2>Our Vision</h2>

        <p>
        MMVN envisions a society where women have equal access to
        opportunities, resources, and leadership roles. We aim to
        create an inclusive environment where women can contribute
        actively to social and economic development.
        </p>

        <ul>
            <li>Equal opportunities for all women</li>
            <li>Financial and social independence</li>
            <li>Leadership in community development</li>
        </ul>

    </div>

</div>

</section>



<!-- ================= MISSION ================= -->

<section class="vm-detail alt-bg">

<div class="vm-row reverse">

    <div class="vm-img-box">
        <img src="{{ asset('images/vision/mission.jpg') }}">
    </div>

    <div class="vm-text">
        <h2>Our Mission</h2>

        <p>
        Our mission is to empower women through education, skill
        development, entrepreneurship, and leadership programs.
        We focus on creating sustainable development opportunities
        across Maharashtra.
        </p>

        <ul>
            <li>Skill development & training programs</li>
            <li>Support for entrepreneurship</li>
            <li>Strengthening self-help groups</li>
            <li>Promoting financial literacy</li>
        </ul>

    </div>

</div>

</section>



<!-- ================= OBJECTIVES ================= -->

<section class="objectives-section">

<h2 class="text-center">Our Core Objectives</h2>

<div class="objectives-grid">

    <div class="obj-card">
        <img src="{{ asset('images/icons/women.png') }}">
        <span>Women Empowerment</span>
    </div>

    <div class="obj-card">
        <img src="{{ asset('images/icons/skill.png') }}">
        <span>Skill Development</span>
    </div>

    <div class="obj-card">
        <img src="{{ asset('images/icons/business.png') }}">
        <span>Entrepreneurship</span>
    </div>

    <div class="obj-card">
        <img src="{{ asset('images/icons/health.png') }}">
        <span>Health Awareness</span>
    </div>

    <div class="obj-card">
        <img src="{{ asset('images/icons/leadership.png') }}">
        <span>Leadership</span>
    </div>

</div>

</section>
<script>
//  STRONG TRANSLATION FIX

function applyTranslation() {
    const select = document.querySelector(".goog-te-combo");

    if (select) {
        let lang = select.value;

        if (lang && lang !== "") {
            select.dispatchEvent(new Event("change"));
        }
    }
}

// Run after page load
window.addEventListener("load", function () {
    setTimeout(applyTranslation, 2000);
});

// Run multiple times (VERY IMPORTANT)
setInterval(() => {
    applyTranslation();
}, 2000);
</script>

<style>
body {
    top: 0px !important;
}
</style>

@endsection