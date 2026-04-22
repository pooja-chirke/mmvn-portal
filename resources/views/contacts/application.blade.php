@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/application.css') }}">

<div class="application-container">

    <!-- ================= TITLE ================= -->
    <h2 class="application-title">Application Form</h2>
    <p class="application-subtitle">Apply for programs, training, or volunteer opportunities</p>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- ================= PERSONAL DETAILS ================= -->
        <div class="form-section">
            <h3>Personal Details</h3>

            <div class="form-grid">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="date" name="dob" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <input type="email" name="email" placeholder="Email Address" required>

                <select name="gender">
                    <option>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>

                <input type="text" name="aadhaar" placeholder="Aadhaar Number">
            </div>
        </div>

        <!-- ================= ADDRESS ================= -->
        <div class="form-section">
            <h3>Address Details</h3>

            <textarea name="address" placeholder="Full Address" rows="3"></textarea>

            <div class="form-grid">
                <input type="text" name="city" placeholder="City">
                <input type="text" name="state" placeholder="State">
                <input type="text" name="pincode" placeholder="Pincode">
            </div>
        </div>

        <!-- ================= EDUCATION ================= -->
        <div class="form-section">
            <h3>Education Details</h3>

            <div class="form-grid">
                <input type="text" name="qualification" placeholder="Highest Qualification">
                <input type="text" name="institution" placeholder="Institution Name">
                <input type="text" name="year" placeholder="Year of Passing">
            </div>
        </div>

        <!-- ================= PROGRAM ================= -->
        <div class="form-section">
            <h3>Program Details</h3>

            <select name="program" required>
                <option>Select Program</option>
                <option>Women Empowerment</option>
                <option>Skill Development</option>
                <option>Entrepreneurship Training</option>
                <option>Digital Literacy</option>
            </select>

            <textarea name="purpose" placeholder="Why do you want to join this program?" rows="3"></textarea>
        </div>

        <!-- ================= DOCUMENTS ================= -->
        <div class="form-section">
            <h3>Upload Documents</h3>

            <input type="file" name="photo">
            <input type="file" name="resume">
            <input type="file" name="certificate">
        </div>

        <!-- ================= DECLARATION ================= -->
        <div class="form-section declaration">
            <label>
                <input type="checkbox" required>
                I hereby declare that all information provided is true and correct.
            </label>
        </div>

        <!-- ================= SUBMIT ================= -->
        <button type="submit" class="submit-btn">Submit Application</button>

    </form>

</div>

@endsection