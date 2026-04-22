@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">

    <div class="banner-text">
        <h1>Online Courses</h1>
        <p>Empowering women with digital, entrepreneurial and life skills</p>
    </div>
</section>


<!-- ================= INTRO ================= -->
<section class="content-section">
    <div class="container">
        <h2 class="section-title">Learn • Grow • Lead</h2>

        <p class="section-desc">
            Our structured programs help women gain digital skills,
            build businesses, and become financially independent.
        </p>
    </div>
</section>


<!-- ================= COURSE LIST (DYNAMIC + DEFAULT) ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Our Courses</h2>

        <div class="course-grid">

            @if($courses->count() > 0)

                @foreach($courses as $course)
                    <div class="course-card">

                        {{-- Course Image --}}
                        @if($course->image)
                            <img src="{{ asset('storage/'.$course->image) }}" class="course-icon">
                        @else
                            <img src="{{ asset('images/icons/skill.png') }}" class="course-icon">
                        @endif

                        {{-- Course Title --}}
                        <h3>{{ $course->title }}</h3>

                        {{-- Description --}}
                        <p>{{ $course->description }}</p>

                        {{-- Extra Info --}}
                        <small>
                            {{ $course->duration ?? 'N/A' }} |
                            {{ $course->level ?? 'All Levels' }}
                        </small>

                    </div>
                @endforeach

            @else

                {{-- DEFAULT STATIC COURSES --}}

                <div class="course-card">
                    <img src="{{ asset('images/icons/skill.png') }}" class="course-icon">
                    <h3>Digital Literacy</h3>
                    <p>Learn computer basics, internet usage, and online tools.</p>
                    <small>3 Months | Beginner</small>
                </div>

                <div class="course-card">
                    <img src="{{ asset('images/icons/business.png') }}" class="course-icon">
                    <h3>Entrepreneurship</h3>
                    <p>Start and manage your own business effectively.</p>
                    <small>6 Months | Intermediate</small>
                </div>

                <div class="course-card">
                    <img src="{{ asset('images/icons/women.png') }}" class="course-icon">
                    <h3>Leadership Development</h3>
                    <p>Build confidence and leadership skills.</p>
                    <small>2 Months | Beginner</small>
                </div>

                <div class="course-card">
                    <img src="{{ asset('images/icons/health.png') }}" class="course-icon">
                    <h3>Health & Wellness</h3>
                    <p>Focus on physical and mental well-being.</p>
                    <small>1 Month | All Levels</small>
                </div>

                <div class="course-card">
                    <img src="{{ asset('images/icons/skill.png') }}" class="course-icon">
                    <h3>Digital Marketing</h3>
                    <p>Learn social media marketing and online earning strategies.</p>
                    <small>4 Months | Intermediate</small>
                </div>

            @endif

        </div>

    </div>
</section>


<!-- ================= LATEST UPDATES ================= -->
<section class="updates-section">
    <div class="container">

        <h2 class="section-title">Latest Updates</h2>

        <div class="update-grid">

            <div class="update-card">
                <h4>Digital Marketing Course</h4>
                <p>New program on social media and online earning.</p>
                <span>20 July 2025</span>
            </div>

            <div class="update-card">
                <h4>Startup Workshop</h4>
                <p>Helping women entrepreneurs grow their ideas.</p>
                <span>14 Nov 2025</span>
            </div>

        </div>

    </div>
</section>


<!-- ================= ACTIVITIES ================= -->
<section class="activities-section">
    <div class="container">

        <h2 class="section-title">Training Activities</h2>

        <div class="activity-grid">

            <div class="activity-card">
                <h4>Live Sessions</h4>
                <p>Expert-led online interactive sessions.</p>
            </div>

            <div class="activity-card">
                <h4>Workshops</h4>
                <p>Hands-on practical training.</p>
            </div>

            <div class="activity-card">
                <h4>Certification</h4>
                <p>Recognized certificates after completion.</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= TESTIMONIAL ================= -->
<section class="testimonial-section">
    <div class="container">

        <h2 class="section-title">Success Story</h2>

        <div class="testimonial-card">
            <p>
                “MMVN empowered me to start my own business and support my family.”
            </p>
            <h4>— Kavita Deshmukh</h4>
        </div>

    </div>
</section>

@endsection