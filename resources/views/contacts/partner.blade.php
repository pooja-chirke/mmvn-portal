@extends('layouts.app')

@section('content')

<div class="page-container">

    <!-- TITLE -->
    <h2 class="page-title">Partner With Us</h2>
    <p class="page-subtitle">
        Join hands with MMVN to empower communities and create impact
    </p>

    <!-- GRID -->
    <div class="partner-grid">

        <!-- ================= LEFT CONTENT ================= -->
        <div class="card">

            <h3>Opportunities</h3>

            <p><b>Corporate (CSR)</b><br>
            Collaborate under CSR initiatives to support women empowerment & skill programs.</p>

            <p><b>NGO Collaboration</b><br>
            Work together on social development projects and campaigns.</p>

            <p><b>Volunteer Programs</b><br>
            Contribute your time and skills for social impact.</p>

            <p><b>Sponsorship</b><br>
            Support events, workshops, and training initiatives.</p>

            <h3>Why Partner With Us?</h3>
            <ul>
                <li>Impactful social change</li>
                <li>Visibility & recognition</li>
                <li>Government-backed NGO</li>
                <li>Access to rural & urban communities</li>
                <li>Sustainable programs</li>
            </ul>

            <h4>Contact Partnership Team</h4>
            <p>Email: partnerships@mmvn.co.in</p>
            <p>Phone: +91 9876543210</p>

        </div>

        <!-- ================= FORM ================= -->
        <div class="card">

            <h3>Become a Partner</h3>

            <form class="partner-form">

                <div class="form-row">
                    <input type="text" placeholder="Organization / Individual Name" required>
                    <input type="email" placeholder="Email Address" required>
                </div>

                <div class="form-row">
                    <input type="text" placeholder="Contact Number">
                    <select required>
                        <option>Select Partnership Type</option>
                        <option>CSR</option>
                        <option>NGO Collaboration</option>
                        <option>Volunteer</option>
                        <option>Sponsorship</option>
                    </select>
                </div>

                <textarea placeholder="Describe your interest..." rows="5"></textarea>

                <button class="btn">Submit Request</button>

            </form>

        </div>

    </div>

</div>

@endsection