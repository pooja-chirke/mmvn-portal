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

            @foreach($blogs as $blog)
                <div class="course-card">
                    <h3>{{ $blog['title'] }}</h3>
                    <p>{{ $blog['desc'] }}</p>
                    <small>{{ $blog['date'] }}</small>
                </div>
            @endforeach

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
}

setInterval(updateClock, 1000);
updateClock();
</script>

@endsection