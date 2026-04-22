@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/technical.css') }}">

<div class="technical-container">

    <!-- ================= TITLE ================= -->
    <h2 class="technical-title">Technical Advisory Services</h2>
    <p class="technical-subtitle">
        Empowering NGOs and communities with technology-driven solutions
    </p>

    <!-- ================= SERVICES ================= -->
    <div class="technical-services">

        <div class="tech-card">
            <h4>Data Analytics</h4>
            <p>Analyze program data to measure impact and improve decisions.</p>
        </div>

        <div class="tech-card">
            <h4>Digital Transformation</h4>
            <p>Help NGOs adopt digital tools and modern systems.</p>
        </div>

        <div class="tech-card">
            <h4>Web Development</h4>
            <p>Build websites, portals, and management systems.</p>
        </div>

        <div class="tech-card">
            <h4>AI & Machine Learning</h4>
            <p>Use AI models for prediction, automation, and insights.</p>
        </div>

    </div>

    <!-- ================= GRID ================= -->
    <div class="technical-grid">

        <!-- ================= FORM ================= -->
        <div class="technical-form">

            <h3>Request Consultation</h3>

            <form action="#" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Organization / Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="phone" placeholder="Contact Number">

                <select name="service" required>
                    <option value="">Select Service</option>
                    <option>Data Analytics</option>
                    <option>Web Development</option>
                    <option>AI & ML</option>
                    <option>Digital Transformation</option>
                </select>

                <textarea name="message" placeholder="Describe your requirement..." rows="5"></textarea>

                <button type="submit">Request Service</button>
            </form>

        </div>

        <!-- ================= TOOLS ================= -->
        <div class="technical-tools">

            <h3>Tools & Technologies</h3>

            <ul>
                <li>Python, Machine Learning</li>
                <li>Power BI, Tableau</li>
                <li>SQL Databases</li>
                <li>Cloud Computing</li>
                <li>Web Technologies (HTML, CSS, Laravel)</li>
            </ul>

            <h4>Contact Technical Team</h4>
            <p>Email: tech@mmvn.co.in</p>
            <p>Phone: +91 9876543210</p>

        </div>

    </div>

    <!-- ================= TEAM ================= -->
    <div class="technical-team">

        <h3>Our Experts</h3>

        <div class="team-grid">

            <div class="team-card">
                <h4>Data Scientist</h4>
                <p>Expert in analytics and ML models</p>
            </div>

            <div class="team-card">
                <h4>Web Developer</h4>
                <p>Builds scalable web applications</p>
            </div>

            <div class="team-card">
                <h4>AI Specialist</h4>
                <p>Designs intelligent AI systems</p>
            </div>

        </div>

    </div>

</div>

@endsection