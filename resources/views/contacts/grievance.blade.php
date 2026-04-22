@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/grievance.css') }}">

<div class="grievance-container">

    <!-- ================= TITLE ================= -->
    <h2 class="grievance-title">Grievance Redressal</h2>
    <p class="grievance-subtitle">Submit your complaint and track its resolution</p>

    <!-- ================= FORM ================= -->
   <div class="grievance-grid">

    <!-- ================= FORM ================= -->
    <div class="card">

        <h3>Submit Grievance</h3>

        <form class="grievance-form">

            <div class="form-row">
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email Address" required>
            </div>

            <div class="form-row">
                <input type="text" placeholder="Phone Number">
                <select required>
                    <option>Select Category</option>
                    <option>Women Empowerment</option>
                    <option>Training</option>
                    <option>Technical</option>
                </select>
            </div>

            <div class="form-row">
                <select required>
                    <option>Priority Level</option>
                    <option>Low</option>
                    <option>Medium</option>
                    <option>High</option>
                </select>

                <input type="file">
            </div>

            <textarea placeholder="Describe your grievance..." rows="5"></textarea>

            <button class="btn">Submit Grievance</button>

        </form>

    </div>

    <!-- ================= TRACK ================= -->
    <div class="card">

        <h3>Track Grievance</h3>

        <input type="text" placeholder="Enter Grievance ID">
        <button class="btn">Check Status</button>

        <div class="status-box">
            <p><strong>Status:</strong> Pending</p>
            <p><strong>Department:</strong> Women Empowerment</p>
            <p><strong>Date:</strong> 12 Nov 2025</p>
        </div>

    </div>

</div>
        
    <!-- ================= GUIDELINES ================= -->
    <div class="guidelines">

        <h3>Guidelines</h3>

        <ul>
            <li>Provide clear and accurate information</li>
            <li>Attach supporting documents if available</li>
            <li>Do not submit duplicate complaints</li>
            <li>Grievances are resolved within 7–15 working days</li>
        </ul>

    </div>

    <!-- ================= EMERGENCY ================= -->
    <div class="emergency-box">
        <h3>Emergency Help</h3>
        <p><strong>Women Helpline:</strong> 1091</p>
        <p><strong>Email:</strong> grievance@mmvn.co.in</p>
    </div>

</div>

@endsection