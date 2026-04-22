@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<style>
/* ================= CONTACT PAGE ================= */

.contact-container{
    max-width:1000px;
    margin:60px auto;
    padding:20px;
}

.contact-title{
    text-align:center;
    color:#6a11cb;
    font-size:32px;
}

.contact-subtitle{
    text-align:center;
    color:#666;
    margin-bottom:30px;
}

/* GRID */
.contact-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:20px;
}

/* CARD */
.contact-card{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

/* FORM */
.contact-card input,
.contact-card select,
.contact-card textarea{
    width:100%;
    padding:12px;
    margin-bottom:12px;
    border:1px solid #ccc;
    border-radius:5px;
}

.contact-card button{
    width:100%;
    background:#6a11cb;
    color:white;
    padding:12px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.contact-card button:hover{
    background:#4a0fa3;
}

/* ALERTS */
.success{
    background:#d4edda;
    color:#155724;
    padding:10px;
    margin-bottom:15px;
    border-radius:5px;
}

.error{
    background:#f8d7da;
    color:#721c24;
    padding:10px;
    margin-bottom:15px;
    border-radius:5px;
}

/* DEPARTMENTS */
.dept-list{
    padding-left:15px;
}

/* MAP */
.map-section{
    margin-top:30px;
}

/* SOCIAL */
.social-links a{
    margin-right:10px;
    text-decoration:none;
    color:#6a11cb;
    font-weight:bold;
}
</style>

<div class="contact-container">

    <!-- TITLE -->
    <h2 class="contact-title">Contact Us</h2>
    <p class="contact-subtitle">
        We’d love to hear from you. Reach out to any department or send us a message.
    </p>

    <!-- SUCCESS -->
    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <!-- ERRORS -->
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- GRID -->
    <div class="contact-grid">

        <!-- ================= FORM ================= -->
        <div class="contact-card">

            <h3>Send Message</h3>

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>

                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>

                <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">

                <select name="department" required>
                    <option value="">Select Department</option>
                    <option>Women Empowerment</option>
                    <option>Skill Development</option>
                    <option>Training Programs</option>
                    <option>Media & PR</option>
                    <option>Support / Help</option>
                </select>

                <textarea name="message" placeholder="Your Message" required>{{ old('message') }}</textarea>

                <button type="submit">Send Message</button>

            </form>

        </div>

        <!-- ================= INFO ================= -->
        <div class="contact-card">

            <h3>Head Office</h3>
            <p><strong>Address:</strong> Mumbai, Maharashtra, India</p>
            <p><strong>Email:</strong> xyz@mmvn.co.in</p>
            <p><strong>Phone:</strong> +91 9876543210</p>

            <h3>Departments</h3>
            <ul class="dept-list">
                <li>Women Empowerment: we@mmvn.co.in</li>
                <li>Skill Development: skills@mmvn.co.in</li>
                <li>Training: training@mmvn.co.in</li>
                <li>Media & PR: media@mmvn.co.in</li>
                <li>Support: support@mmvn.co.in</li>
            </ul>

        </div>

    </div>

    <!-- ================= MAP ================= -->
    <div class="map-section">
        <h3>Our Location</h3>

        <iframe 
            src="https://www.google.com/maps?q=Mumbai&output=embed"
            width="100%" height="300" style="border:0;" allowfullscreen="">
        </iframe>
    </div>

    <!-- ================= SOCIAL ================= -->
    <div class="map-section">
        <h3>Follow Us</h3>

        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
            <a href="#">LinkedIn</a>
        </div>
    </div>

</div>

@endsection