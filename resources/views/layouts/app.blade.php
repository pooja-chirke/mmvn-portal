<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MMVN Portal</title>

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('css/courses.css') }}">
<link rel="stylesheet" href="{{ asset('css/knowledge.css') }}">
<link rel="stylesheet" href="{{ asset('css/newsupdates.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<style>

/* Top bar fix */
.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(to right,#6a11cb,#8e44ad);
    padding: 6px 20px;
    color: white;
    font-size: 13px;
}

/* Right section align */
.top-right {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Translator */
.translator-container {
    position: relative;
    z-index: 9999;
}

.translator-btn {
    background: white;
    color: #6a11cb;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
}

/* Dropdown */
.translator-dropdown {
    display: none;
    position: absolute;
    right: 0;
    top: 40px;
    width: 170px;
    background: white;
    z-index: 999;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    border-radius: 6px;
    padding: 8px;
}

.translator-dropdown.show {
    display: block;
}

/* Fix translator UI */
#google_translate_element {
    width: 100%;
}

.goog-te-combo {
    width: 100% !important;
    font-size: 14px !important;
    padding: 5px;
}

/* REMOVE GOOGLE TOP BAR */
.goog-te-banner-frame.skiptranslate {
    display: none !important;
}

body {
    top: 0px !important;
}

/* FORCE PROPER DROPDOWN */
.translator-dropdown {
    display: none;
    position: absolute;
    right: 0;
    top: 40px;
    width: 200px;
    background: white;
    z-index: 9999;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    border-radius: 6px;
    padding: 10px;
}

/* SHOW */
.translator-dropdown.show {
    display: block;
}

/* FIX GOOGLE DROPDOWN */
#google_translate_element {
    width: 100%;
}

.goog-te-gadget {
    width: 100% !important;
}

.goog-te-combo {
    width: 100% !important;
    font-size: 14px !important;
    padding: 6px;
    border-radius: 5px;
}

/* REMOVE GOOGLE TOP BAR */
.goog-te-banner-frame.skiptranslate {
    display: none !important;
}

body {
    top: 0px !important;
}

</style>

</head>

<body>

<!-- TOP BAR -->
<div class="top-bar">

    <div class="top-left">
        Last Update - 12 November 2025
    </div>

    <div class="top-right">
        <span>Visitors Count - 11,111 |</span>

        <!-- TRANSLATOR -->
        <div class="translator-container">
            <button class="translator-btn" onclick="toggleTranslator(event)">
                🌐 Translator
            </button>

            <div class="translator-dropdown">
                <div id="google_translate_element"></div>
            </div>
        </div>
    </div>

</div>

<!-- HEADER -->
<header class="header">
<div class="header-container">

<img src="{{ asset('images/logo/india-emblem.png') }}" class="logo">

<div class="title-section">
<h1 class="main-title">MAHILA MANDAL VIKAS NGO (MMVN)</h1>
<p class="sub-title">महिला मंडळ विकास NGO (ममवि)</p>
</div>

</div>
</header>

<!-- NAVBAR (UNCHANGED FULL) -->
<nav class="navbar">
<div class="navbar-container">

<ul class="nav-menu">

<li><a href="{{ url('/') }}">Home</a></li>

<li class="dropdown">
<a href="{{ url('/about') }}">About Us</a>
<ul class="dropdown-menu">
<li><a href="{{ url('/mavim-overview') }}">MAVIM Overview</a></li>

<li class="submenu">
<a href="#">Center of Excellence ▸</a>
<ul class="submenu-menu">
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

<li class="dropdown">
<a href="{{ url('/programs') }}">What We Do</a>
<ul class="dropdown-menu">
<li><a href="{{ url('/courses') }}">Online Courses</a></li>
<li><a href="{{ url('/certifications') }}">Certification Programs</a></li>
<li><a href="{{ url('/training') }}">Training</a></li>
<li><a href="{{ url('/women-empowerment') }}">Women Empowerment</a></li>
<li><a href="{{ url('/climate-change') }}">Climate Change</a></li>
<li><a href="{{ url('/skills') }}">Skill Development</a></li>
<li><a href="{{ url('/workshops') }}">Workshops</a></li>
<li><a href="{{ url('/advisory') }}">Advisory Services</a></li>
</ul>
</li>

<li class="dropdown">
<a href="{{ url('/knowledge') }}">Knowledge Center</a>
<ul class="dropdown-menu">
<li><a href="{{ url('/blogs') }}">Blogs</a></li>
<li><a href="{{ url('/ebooks') }}">E-books</a></li>
<li><a href="{{ url('/publications') }}">Publications</a></li>
<li><a href="{{ url('/research') }}">Research</a></li>
<li><a href="{{ url('/learning') }}">Learning</a></li>
<li><a href="{{ url('/success-stories') }}">Success Stories</a></li>
<li><a href="{{ url('/toolkits') }}">Toolkits</a></li>
<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
<li><a href="{{ url('/experts') }}">Experts</a></li>
</ul>
</li>

<li class="dropdown">
<a href="{{ url('/gallery') }}">Gallery</a>
<ul class="dropdown-menu">
<li><a href="{{ url('/photo-gallery') }}">Photo Gallery</a></li>
<li><a href="{{ url('/video-gallery') }}">Video Gallery</a></li>
<li><a href="{{ url('/events') }}">Events</a></li>
<li><a href="{{ url('/campus-tour') }}">Campus Tour</a></li>
</ul>
</li>

<li class="dropdown">
<a href="{{ route('media.index') }}">Media</a>
<ul class="dropdown-menu">
<li><a href="{{ route('media.press') }}">Press Release</a></li>
<li><a href="{{ route('media.coverage') }}">Media Coverage</a></li>
<li><a href="{{ route('media.announcements') }}">Announcements</a></li>
<li><a href="{{ route('media.newsletters') }}">Newsletters</a></li>
<li><a href="{{ route('media.awards') }}">Awards</a></li>
</ul>
</li>

<li class="dropdown">
<a href="#">News & Updates</a>
<ul class="dropdown-menu">
<li><a href="{{ route('newsupdates.latest') }}">Latest News</a></li>
<li><a href="{{ route('newsupdates.courses') }}">Upcoming Courses</a></li>
<li><a href="{{ route('newsupdates.events') }}">Events Calendar</a></li>
<li><a href="{{ route('newsupdates.webinar') }}">Webinar Schedule</a></li>
<li><a href="{{ route('newsupdates.social') }}">Social Media Feed</a></li>
<li><a href="{{ route('newsupdates.notifications') }}">Important Notifications</a></li>
</ul>
</li>

<li class="dropdown-click">
<a href="#" onclick="toggleDropdown(event)">Contacts</a>
<ul class="dropdown-menu">
<li><a href="{{ route('contacts.contact') }}">Contact Us</a></li>
<li><a href="{{ route('contacts.support') }}">Support Centre</a></li>
<li><a href="{{ route('contacts.helpdesk') }}">Help Desk</a></li>
<li><a href="{{ route('contacts.grievance') }}">Grievance Redressal</a></li>
<li><a href="{{ route('contacts.partner') }}">Partner With Us</a></li>
<li><a href="{{ route('contacts.technical') }}">Technical Advisory</a></li>
<li><a href="{{ route('contacts.application') }}">Application Form</a></li>
<li><a href="{{ route('contacts.faqs') }}">FAQs</a></li>
</ul>
</li>

<li><a href="{{ url('/get-involved') }}">Get Involved</a></li>

</ul>

</div>
</nav>

@yield('content')

<!-- FOOTER (UNCHANGED) -->
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
<p>FAQs</p>
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

<div class="footer-bottom">
© 2025 MMVN. All Rights Reserved.
</div>
</footer>



<!-- JS -->
<script>
function toggleTranslator(event) {
    event.stopPropagation();
    document.querySelector(".translator-dropdown").classList.toggle("show");
}

document.addEventListener("click", function(event) {
    const container = document.querySelector(".translator-container");
    if (!container.contains(event.target)) {
        document.querySelector(".translator-dropdown").classList.remove("show");
    }
});
</script>

<!-- GOOGLE TRANSLATE -->
<script>
let translatorLoaded = false;

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        autoDisplay: false
    }, 'google_translate_element');

    translatorLoaded = true;
}
</script>

<script>
function toggleTranslator(event) {
    event.stopPropagation();

    const dropdown = document.querySelector(".translator-dropdown");
    dropdown.classList.toggle("show");

    // 🔥 FORCE GOOGLE LOAD AFTER OPEN
    setTimeout(() => {
        if (!translatorLoaded) {
            googleTranslateElementInit();
        }
    }, 300);
}
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>
</html>