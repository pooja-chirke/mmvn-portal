@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">

    <div class="banner-text">
        <h1>Blogs</h1>
        <p>Latest updates, articles & reports</p>
    </div>
</section>


<!-- ================= DATE + TIME ================= -->
<section class="content-section">
    <div class="container">

        <h2 class="section-title">Live Date & Time</h2>

        <div id="clock" style="text-align:center; font-size:20px; color:#6a11cb;"></div>

    </div>
</section>


<!-- ================= BLOGS ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Latest Blogs</h2>

        <div class="course-grid">

            <!-- BLOG 1 -->
            <div class="course-card">
                <h3>Empowering Women Through Education</h3>
                <p>How education is transforming women's lives and creating equal opportunities worldwide.</p>
                <small>📅 12 March 2026 | 👁 15K views</small><br><br>
                <a href="https://youtu.be/Z9jtNbzTAgY?si=PiZv3ULuDdMB5lIz" target="_blank" style="color:#6a11cb;">▶ Watch Blog</a>
            </div>

            <!-- BLOG 2 -->
            <div class="course-card">
                <h3>Women Leadership & Success Stories</h3>
                <p>Inspiring journeys of women leaders breaking barriers and achieving success.</p>
                <small>📅 8 March 2026 | 👁 10K views</small><br><br>
                <a href="https://youtu.be/FVzHBWoIGEw?si=bqvqKoyKuWQTgTul" target="_blank" style="color:#6a11cb;">▶ Watch Blog</a>
            </div>

            <!-- BLOG 3 -->
            <div class="course-card">
                <h3>Financial Independence for Women</h3>
                <p>Why financial literacy is essential for women's empowerment and independence.</p>
                <small>📅 5 March 2026 | 👁 9K views</small><br><br>
                <a href="https://youtu.be/A7r2vCxa3pI?si=S9NJYKOeONNqeNrs" target="_blank" style="color:#6a11cb;">▶ Watch Blog</a>
            </div>

            <!-- BLOG 4 -->
            <div class="course-card">
                <h3>Breaking Gender Stereotypes</h3>
                <p>Understanding and overcoming societal barriers faced by women.</p>
                <small>📅 2 March 2026 | 👁 7.5K views</small><br><br>
                <a href="https://youtu.be/XaLTaLZh6p8?si=fgciW7P99DKPdZKQ" target="_blank" style="color:#6a11cb;">▶ Watch Blog</a>
            </div>

            <!-- BLOG 5 -->
            <div class="course-card">
                <h3>Digital Empowerment for Women</h3>
                <p>How technology and digital skills are empowering women in modern society.</p>
                <small>📅 28 Feb 2026 | 👁 6K views</small><br><br>
                <a href="https://youtu.be/pJE18us4eVA?si=Cg_WPZrNZB56EAvc" target="_blank" style="color:#6a11cb;">▶ Watch Blog</a>
            </div>

        </div>

    </div>
</section>


<!-- ================= REPORT SECTION ================= -->
<section class="updates-section">
    <div class="container">

        <h2 class="section-title">Reports & Insights</h2>

        <div class="update-grid">

            <div class="update-card">
                <h4>Monthly Report</h4>
                <p>Analysis of training programs and outcomes.</p>
            </div>

            <div class="update-card">
                <h4>Impact Report</h4>
                <p>Measuring empowerment and success stories.</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= JS FOR CLOCK ================= -->
<script>
function updateClock() {
    const now = new Date();

    const date = now.toLocaleDateString();
    const time = now.toLocaleTimeString();

    document.getElementById("clock").innerHTML =
        "Date: " + date + " | Time: " + time;
    
        // 🔥 Re-apply translation after update
    const select = document.querySelector(".goog-te-combo");
    if (select && select.value) {
        select.dispatchEvent(new Event("change"));
    }
}

setInterval(updateClock, 1000);
updateClock();
</script>

@endsection