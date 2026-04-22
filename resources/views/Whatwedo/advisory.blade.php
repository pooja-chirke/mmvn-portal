@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= PAGE BANNER ================= -->
<section class="courses-banner">
    <img src="{{ asset('images/banner/advisory.jpg') }}" class="courses-banner-img">

    <div class="courses-banner-text">
        <h1>Advisory Services</h1>
        <p>
            Providing expert guidance and strategic support for sustainable development and empowerment.
        </p>
    </div>
</section>


<!-- ================= MAIN SECTION ================= -->
<section class="courses-section">

    <h2 class="courses-title">Our Advisory Services</h2>
    <p class="courses-desc">
        We offer specialized advisory services to support communities, organizations, and individuals in achieving growth and sustainability.
    </p>

    <div class="courses-grid">

        <!-- CARD 1 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Business Advisory</h3>
            <p>Guidance for starting, managing, and growing businesses.</p>
        </div>

        <!-- CARD 2 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Financial Advisory</h3>
            <p>Support in financial planning, budgeting, and investments.</p>
        </div>

        <!-- CARD 3 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Skill Development Advisory</h3>
            <p>Guidance on selecting the right skills and training programs.</p>
        </div>

        <!-- CARD 4 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Women Empowerment Advisory</h3>
            <p>Strategic support for gender equality initiatives.</p>
        </div>

        <!-- CARD 5 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Climate & Sustainability Advisory</h3>
            <p>Guidance on eco-friendly practices and sustainability.</p>
        </div>

        <!-- CARD 6 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Digital Transformation</h3>
            <p>Helping organizations adopt digital tools and technologies.</p>
        </div>

        <!-- CARD 7 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Policy & Governance</h3>
            <p>Support in policy planning and governance strategies.</p>
        </div>

        <!-- CARD 8 -->
        <div class="courses-card">
            <img src="{{ asset('images/icons/advisory.png') }}" class="courses-icon">
            <h3>Career Guidance</h3>
            <p>Helping individuals choose the right career path.</p>
        </div>

    </div>
</section>


<!-- ================= HIGHLIGHTS ================= -->
<section class="courses-activities">

    <h2 class="courses-title">Service Highlights</h2>

    <div class="courses-activity-grid">

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/advisory.jpg') }}">
            <h4>Expert Consultation</h4>
            <p>Guidance from experienced professionals.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Customized Solutions</h4>
            <p>Tailored strategies for unique needs.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/advisory.jpg') }}">
            <h4>Community Impact</h4>
            <p>Improving livelihoods and opportunities.</p>
        </div>

        <div class="courses-activity-card">
            <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}">
            <h4>Long-term Growth</h4>
            <p>Focus on sustainable and scalable development.</p>
        </div>

    </div>
</section>

@endsection