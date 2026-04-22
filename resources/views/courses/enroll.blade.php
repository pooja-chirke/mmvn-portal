<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Course Enrollment | MMVN</title>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

<style>

.enroll-section{
width:1200px;
margin:auto;
padding:60px 0;
}

.enroll-card{
width:500px;
margin:auto;
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 4px 12px rgba(0,0,0,0.1);
}

.enroll-card h2{
text-align:center;
margin-bottom:10px;
}

.course-name{
background:#f4f6f9;
padding:12px;
border-radius:5px;
margin-bottom:20px;
font-weight:600;
text-align:center;
}

.enroll-form label{
font-weight:600;
display:block;
margin-top:10px;
}

.enroll-form input{
width:100%;
padding:10px;
margin-top:5px;
margin-bottom:10px;
border:1px solid #ccc;
border-radius:4px;
}

.submit-btn{
background:#0b5ed7;
color:white;
padding:10px 18px;
border:none;
border-radius:5px;
cursor:pointer;
margin-top:10px;
}

.submit-btn:hover{
background:#084298;
}

</style>

</head>

<body>


<!-- TOP BAR -->

<div class="top-bar">
Last Update - 12 November 2025 |
Visitors Count - 11,111 |
English | Marathi
</div>


<!-- HEADER -->

<header class="header">

<div class="logo-section">
<img src="{{ asset('images/logo/india-emblem.png') }}">
</div>

<div class="title-section">
<h1>MAHILA MANDAL VIKAS NGO (MMVN)</h1>
<p>महिला मंडळ विकास NGO (ममवि)</p>
</div>

</header>


<!-- NAVBAR -->

<nav class="navbar">

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

</nav>



<!-- ENROLL FORM -->

<section class="enroll-section">

<div class="enroll-card">

<h2>Course Enrollment</h2>

<div class="course-name">
Selected Course: {{ $course }}
</div>

<form action="{{ route('enroll.store') }}" method="POST" class="enroll-form">

@csrf

<input type="hidden" name="course" value="{{ $course }}">

<label>Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Phone</label>
<input type="text" name="phone" required>

<button type="submit" class="submit-btn">Submit</button>

</form>

</div>

</section>



<!-- FOOTER -->

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