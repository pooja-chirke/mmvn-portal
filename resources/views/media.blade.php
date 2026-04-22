<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Media | MMVN</title>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

<style>

/* ===== PAGE TITLE ===== */
.page-title{
    text-align:center;
    padding:30px 20px;
}

/* ===== MEDIA SECTION ===== */
.media-section{
    padding:40px 20px;
    background:#f4f6f9;
}

.media-section h3{
    text-align:center;
    margin-bottom:20px;
}

/* ===== GRID FIX ===== */
.media-container{
    max-width:1200px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

/* ===== CARD ===== */
.media-card{
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    transition:0.3s;
    text-align:center;
    padding-bottom:15px;
}

.media-card:hover{
    transform:translateY(-5px);
}

/* ===== VIDEO ===== */
.media-card video{
    width:100%;
    height:200px;
    object-fit:cover;
}

/* ===== IMAGE ===== */
.media-card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

/* ===== TEXT ===== */
.media-date{
    font-size:13px;
    color:#777;
    margin:10px 0 5px;
}

.media-card p{
    padding:0 10px;
    font-size:14px;
}

</style>

</head>

<body>


<!-- ================= TOP BAR ================= -->

<div class="top-bar">
Last Update - 12 November 2025, 10:00:00 |
Visitors Count - 11,111 |
English | Marathi
</div>



<!-- ================= HEADER ================= -->

<header class="header">

<div class="header-container">

<img src="{{ asset('images/logo/india-emblem.png') }}" class="logo">

<h1>MAHILA MANDAL VIKAS NGO (MMVN)</h1>

</div>

</header>



<!-- ================= NAVBAR ================= -->

<nav class="navbar">

<ul>

<li><a href="{{ url('/') }}">Home</a></li>
<li><a href="{{ url('/about') }}">Who We Are</a></li>
<li><a href="{{ url('/programs') }}">What We Do</a></li>
<li><a href="{{ url('/knowledge') }}">Knowledge Center</a></li>
<li><a href="{{ url('/gallery') }}">Gallery</a></li>
<li><a href="{{ url('/media') }}">Media</a></li>
<li><a href="{{ url('/news') }}">News And Updates</a></li>
<li><a href="{{ url('/contact') }}">Contacts</a></li>
<li><a href="{{ url('/get-involved') }}">Get Involved</a></li>

</ul>

</nav>



<!-- ================= PAGE TITLE ================= -->

<section class="page-title">
<h2>Media Gallery</h2>
</section>



<!-- ================= VIDEO SECTION ================= -->

<section class="media-section">

<h3>Videos</h3>

<div class="media-container">

<div class="media-card">

<video controls>
<source src="{{ asset('videos/sample-video.mp4') }}" type="video/mp4">
</video>

<p class="media-date">20 July 2025 | Departmental update</p>

<p>Program updates and highlights.</p>

</div>



<div class="media-card">

<video controls>
<source src="{{ asset('videos/sample-video.mp4') }}" type="video/mp4">
</video>

<p class="media-date">20 July 2025 | Departmental update</p>

<p>Community engagement activities.</p>

</div>

</div>

</section>



<!-- ================= PHOTO SECTION ================= -->

<section class="media-section">

<h3>Photo Gallery</h3>

<div class="media-container">

<div class="media-card">
<img src="{{ asset('images/news/news1.jpg') }}">
<p class="media-date">14 November 2025</p>
<p>Women empowerment awareness program.</p>
</div>

<div class="media-card">
<img src="{{ asset('images/news/news2.jpg') }}">
<p class="media-date">14 November 2025</p>
<p>Equality campaign organized by MMVN.</p>
</div>

<div class="media-card">
<img src="{{ asset('images/news/news3.jpg') }}">
<p class="media-date">14 November 2025</p>
<p>Women empowerment training workshop.</p>
</div>

<div class="media-card">
<img src="{{ asset('images/news/news4.jpg') }}">
<p class="media-date">14 November 2025</p>
<p>Entrepreneurship development program.</p>
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
<p>Empowering Essentials</p>
<p>Her Confidence Corner</p>
<p>Her Journey</p>
<p>Women Warriors</p>
</div>

<div class="footer-col">
<h3>About Us</h3>
<p>Careers</p>
<p>Frequently Asked Questions</p>
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