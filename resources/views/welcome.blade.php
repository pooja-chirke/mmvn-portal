<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MMVN Portal</title>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/cards.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>


<!-- ================= TOP BAR ================= -->

<div class="top-bar">
<span>Last Update - 12 November 2025</span>
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



<!-- ================= STATISTICS ================= -->

<section class="stats">

<div class="stat-box">
<h3>1</h3>
<p>HO</p>
</div>

<div class="stat-box">
<h3>248</h3>
<p>CMRC</p>
</div>

<div class="stat-box">
<h3>60</h3>
<p>Excellent CMRC</p>
</div>

<div class="stat-box">
<h3>35</h3>
<p>District</p>
</div>

<div class="stat-box">
<h3>1,23,000</h3>
<p>Products</p>
</div>

<div class="stat-box">
<h3>10,000</h3>
<p>Families</p>
</div>

</section>



<!-- ================= BANNER ================= -->

<section class="banner">

<div class="banner-slider">
<img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}">
</div>

<div class="banner-sidebar">

<a href="{{ url('/special-stories') }}">Special Stories</a>

<a href="{{ url('/feedback') }}">Feedback</a>

<a href="{{ url('/resources') }}">Resources</a>

<a href="{{ url('/quizzes') }}">Quizzes</a>

<a href="{{ url('/case-studies') }}">Case Studies</a>

<a href="{{ url('/community') }}">Community</a>

<a href="{{ url('/achievements') }}">Achievements</a>

<a href="{{ url('/course-catalog') }}">Course Catalog</a>

<a href="{{ url('/help') }}">Help</a>

</div>

</section>



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
<p>Her Journey</p>
<p>Vital Change</p>
<p>Women Warriors</p>

</div>


<div class="footer-col">

<h3>About Us</h3>

<p>Careers</p>
<p>FAQ</p>
<p>Library</p>
<p>Publications</p>

</div>


<div class="footer-col">

<h3>Contact Us</h3>

<p>HO Number - 02278567890</p>
<p>Email - xyz@mmvn.co.in</p>

</div>

</div>


<div class="footer-bottom">

<p>© 2025 Mahila Mandal Vikas NGO (MMVN). All Rights Reserved.</p>

</div>

</footer>


</body>
</html>