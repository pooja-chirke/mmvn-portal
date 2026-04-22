<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Knowledge Center | MMVN</title>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/cards.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

<style>

/* ===== PAGE SECTION ===== */

.knowledge-page{
padding:50px 20px;
background:#f4f6f9;
}

.knowledge-title{
text-align:center;
font-size:30px;
margin-bottom:30px;
font-weight:600;
color:#333;
}

/* ===== GRID ===== */

.knowledge-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
}

/* ===== CARD ===== */

.knowledge-card{
background:white;
padding:25px;
border-radius:12px;
box-shadow:0 4px 10px rgba(0,0,0,0.08);
text-align:center;
transition:0.3s;
cursor:pointer;
}

.knowledge-card:hover{
transform:translateY(-5px);
box-shadow:0 6px 15px rgba(0,0,0,0.12);
}

.knowledge-card a{
text-decoration:none;
font-size:17px;
font-weight:600;
color:#0077b6;
display:block;
}

</style>

</head>

<body>


<!-- ================= TOP BAR ================= -->

<div class="top-bar">
Last Update - 12 November 2025 |
Visitors Count - 11,111 |
English | Marathi
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
<li><a href="{{ url('/about') }}">Who We Are</a></li>
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



<!-- ================= KNOWLEDGE CENTER ================= -->

<section class="knowledge-page">

<h2 class="knowledge-title">Knowledge Center</h2>

<div class="knowledge-grid">

<div class="knowledge-card">
<a href="{{ url('/special-stories') }}">Special Stories</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/feedback') }}">Feedback</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/resources') }}">Resources</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/quizzes') }}">Quizzes</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/case-studies') }}">Case Studies</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/community') }}">Community</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/achievements') }}">Achievements</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/course-catalog') }}">Course Catalog</a>
</div>

<div class="knowledge-card">
<a href="{{ url('/help') }}">Help</a>
</div>

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
<p>HO Number - 022 78567890</p>
<p>Email - xyz@mmvn.co.in</p>
</div>

</div>

<div class="footer-bottom">
<p>© 2025 Mahila Mandal Vikas NGO (MMVN). All Rights Reserved.</p>
</div>

</footer>

</body>
</html>