
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>About Us | MMVN</title>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>


<!-- ================= TOP BAR ================= -->

<div class="top-bar">

<span>Last Update - 12 November 2025, 10:00:00</span>
<span>Visitors Count - 11,111</span>
<span>English | Marathi</span>

</div>



<!-- ================= HEADER ================= -->

<header class="header">

<div class="header-container">

<img src="{{ asset('images/logo/india-emblem.png') }}" class="logo">

<div class="title-section">
<h1 class="main-title">MAHILA MANDAL VIKAS NGO (MMVN)</h1>
<p class="sub-title">महिला मंडळ विकास NGO (ममवि)</p>
</div>

</div>

</header>



<!-- ================= NAVBAR ================= -->

<nav class="navbar">

<div class="navbar-container">

<ul class="nav-menu">

<li><a href="{{ url('/') }}">Home</a></li>

<li class="dropdown">

<a href="{{ url('/about') }}">About Us</a>

<ul class="dropdown-menu">

<li><a href="{{ url('/mavim-overview') }}">MAVIM Overview</a></li>

<li class="submenu">

<a href="#">Central of Excellence ▸</a>

<ul class="submenu-dropdown">

<li><a href="{{ url('/technical-advisory') }}">Technical Advisory Services</a></li>

<li><a href="{{ url('/evidence-knowledge') }}">Evidence & Knowledge</a></li>

<li><a href="{{ url('/advocacy-policy') }}">Advocacy & Policy</a></li>

<li><a href="{{ url('/partnership-promotion') }}">Partnership & Promotion</a></li>

</ul>

</li>

<li><a href="{{ url('/vision-mission') }}">Vision & Mission</a></li>

<li><a href="{{ url('/coe-team') }}">COE Team</a></li>

</ul>

</li>

<li><a href="{{ url('/programs') }}">What We Do</a></li>

<li><a href="{{ url('/knowledge') }}">Knowledge Center</a></li>

<li><a href="{{ url('/gallery') }}">Gallery</a></li>

<li><a href="{{ url('/media') }}">Media</a></li>

<li><a href="{{ url('/news') }}">News & Updates</a></li>

<li><a href="{{ url('/contact') }}">Contacts</a></li>

<li><a href="{{ url('/get-involved') }}">Get Involved</a></li>

</ul>

</div>

</nav>



<!-- ================= PAGE HEADER (NO IMAGE) ================= -->

<section class="about-header">
    <h1>About MMVN</h1>
    <p>Empowering Women Through Education, Skills & Leadership</p>
</section>



<!-- ================= ABOUT CONTENT ================= -->

<section class="about-container">

<div class="about-text center">

<h3>Who We Are</h3>

<p>
Mahila Mandal Vikas NGO (MMVN) is a community-based organization dedicated to the
empowerment of women through education, entrepreneurship, and social development.
</p>

<p>
MMVN focuses on sustainable programs that help women gain financial independence,
develop skills, and actively participate in community growth.
</p>

</div>

</section>



<!-- ================= MISSION & VISION ================= -->

<section class="mission-vision-section">

<div class="mv-container">

    <div class="mv-card">
        <img src="{{ asset('images/icons/mission.png') }}" class="mv-img">
        <h3>Our Mission</h3>
        <p>
        To empower women through education, skill development, and leadership opportunities.
        </p>
    </div>

    <div class="mv-card">
        <img src="{{ asset('images/icons/vision.png') }}" class="mv-img">
        <h3>Our Vision</h3>
        <p>
        To create a society where women have equal opportunities and lead community development.
        </p>
    </div>

</div>

</section>



<!-- ================= OBJECTIVES ================= -->

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

<!-- ================= FOOTER ================= -->

<footer class="footer">

<div class="footer-container">


<div class="footer-col">

<h3>Region</h3>

<p>Kokan</p>
<p>Khandesh</p>
<p>Marathwada</p>
<p>Vidarbha</p>
<p>Western Maharashtra</p>

</div>



<div class="footer-col">

<h3>Products</h3>

<p>Empowerment Hub</p>
<p>Empowering Essentials</p>
<p>Her Confidence Corner</p>
<p>Her Journey</p>
<p>Women Warriors</p>

</div>



<div class="footer-col">

<h3>About Us</h3>

<p>Careers</p>
<p>Frequently asked Questions</p>
<p>Library</p>
<p>Procurement</p>
<p>Publications</p>

</div>



<div class="footer-col">

<h3>Contact Us</h3>

<p>HO number - 02278567890</p>
<p>02243567867</p>
<p>Email - xyz@mmvn.co.in</p>

</div>


</div>

</footer>



</body>

</html>
@endsection