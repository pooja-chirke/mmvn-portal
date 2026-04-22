@extends('layouts.app')

@section('content')

<!-- ================= STATISTICS ================= -->
<section class="stats">
    <div class="stat-box"><h3>01</h3><p>HO</p></div>
    <div class="stat-box"><h3>248</h3><p>CMRC</p></div>
    <div class="stat-box"><h3>60</h3><p>Excellent CMRC</p></div>
    <div class="stat-box"><h3>35</h3><p>District</p></div>
    <div class="stat-box"><h3>1,23,000</h3><p>Products</p></div>
    <div class="stat-box"><h3>10,000</h3><p>Families</p></div>
</section>

<!-- ================= BANNER ================= -->
<section class="banner">
    <div class="banner-slider">
        <img src="{{ asset('images/banner/women-empowerment-banner.jpg') }}" alt="Banner">
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

<!-- ================= NEWS ================= -->
<section class="news">
    <div class="section-header">
        <h2>News</h2>
        <a href="{{ url('/news') }}">All →</a>
    </div>

    <div class="news-container">
        <div class="news-card">
            <img src="{{ asset('images/news/news1.jpg') }}">
            <p>14 November 2025 | Departmental update</p>
            <p>Program related details.</p>
        </div>

        <div class="news-card">
            <img src="{{ asset('images/news/news2.jpg') }}">
            <p>14 November 2025 | Departmental update</p>
            <p>Program related details.</p>
        </div>

        <div class="news-card">
            <img src="{{ asset('images/news/news3.jpg') }}">
            <p>14 November 2025 | Departmental update</p>
            <p>Program related details.</p>
        </div>

        <div class="news-card">
            <img src="{{ asset('images/news/news4.jpg') }}">
            <p>14 November 2025 | Departmental update</p>
            <p>Program related details.</p>
        </div>
    </div>
</section>

<!-- ================= TESTIMONIALS ================= -->
<section class="testimonials">
    <div class="section-header">
        <h2>Testimonials</h2>
        <a href="#">All →</a>
    </div>

    <div class="testimonial-container">
        <div class="testimonial-card">
            <img src="{{ asset('images/testimonials/woman1.jpg') }}">
            <p>MMVN empowered me to pursue my entrepreneurial dream.</p>
        </div>

        <div class="testimonial-card">
            <img src="{{ asset('images/testimonials/woman2.jpg') }}">
            <p>Training programs changed my life.</p>
        </div>

        <div class="testimonial-card">
            <img src="{{ asset('images/testimonials/woman3.jpg') }}">
            <p>I gained confidence and financial stability.</p>
        </div>

        <div class="testimonial-card">
            <img src="{{ asset('images/testimonials/woman4.jpg') }}">
            <p>The community support uplifted my family.</p>
        </div>
    </div>
</section>

<!-- ================= VIDEOS ================= -->
<section class="videos">
    <div class="section-header">
        <h2>Videos</h2>
        <a href="#">All →</a>
    </div>

    <div class="video-container">
        <div class="video-card">
            <video controls>
                <source src="{{ asset('images/videos/video-thumbnail1.mp4') }}" type="video/mp4">
            </video>
            <p>20 July 2025 | Departmental update</p>
        </div>

        <div class="video-card">
            <video controls>
                <source src="{{ asset('images/videos/video-thumbnail2.mp4') }}" type="video/mp4">
            </video>
            <p>20 July 2025 | Departmental update</p>
        </div>
    </div>
</section>

@endsection