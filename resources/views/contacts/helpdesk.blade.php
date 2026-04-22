@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/helpdesk.css') }}">

<div class="helpdesk-container">

    <!-- ================= TITLE ================= -->
    <h2 class="helpdesk-title">Helpdesk Support</h2>
    <p class="helpdesk-subtitle">Find answers or raise a support ticket for assistance</p>

    <!-- ================= SEARCH ================= -->
    <div class="search-box">
        <input type="text" placeholder="Search help articles...">
    </div>

    <!-- ================= CATEGORIES ================= -->
    <div class="help-categories">

        <div class="help-card">
            <h4>Women Empowerment</h4>
            <p>Programs, schemes & benefits</p>
        </div>

        <div class="help-card">
            <h4>Courses & Training</h4>
            <p>Enrollments & certifications</p>
        </div>

        <div class="help-card">
            <h4>Technical Support</h4>
            <p>Website & login issues</p>
        </div>

        <div class="help-card">
            <h4>Payments</h4>
            <p>Fees & transactions</p>
        </div>

    </div>

    <!-- ================= GRID ================= -->
    <div class="help-grid">

        <!-- ================= FORM ================= -->
        <div class="help-card form-card">

    <h3>Raise Ticket</h3>

    <form class="helpdesk-form">

        <div class="form-row">
            <input type="text" placeholder="Full Name" required>
            <input type="email" placeholder="Email" required>
        </div>

        <div class="form-row">
            <select required>
                <option>Select Department</option>
                <option>Technical</option>
                <option>Training</option>
            </select>

            <select required>
                <option>Issue Type</option>
                <option>Login Issue</option>
                <option>Payment Issue</option>
            </select>
        </div>

        <textarea placeholder="Describe your issue..." rows="5"></textarea>

        <button type="submit" class="btn">Submit Ticket</button>

    </form>

</div>

        <!-- ================= TICKET STATUS ================= -->
        <div class="help-card status-card">

            <h3>Track Your Ticket</h3>

            <input type="text" placeholder="Enter Ticket ID">

            <button>Check Status</button>

            <div class="ticket-status">
                <p><strong>Status:</strong> Pending</p>
                <p><strong>Department:</strong> Technical</p>
            </div>

        </div>

    </div>

    <!-- ================= FAQ ================= -->
    <div class="faq-section">

        <h3>Frequently Asked Questions</h3>

        <div class="faq-item">
            <button class="faq-question">How to register for courses?</button>
            <div class="faq-answer">
                <p>You can register via the courses section on the website.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How to contact support?</button>
            <div class="faq-answer">
                <p>You can raise a ticket using the form above.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Is certification available?</button>
            <div class="faq-answer">
                <p>Yes, certification is provided after course completion.</p>
            </div>
        </div>

    </div>

</div>

<!-- FAQ SCRIPT -->
<script>
document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
        let ans = btn.nextElementSibling;
        ans.style.display = ans.style.display === 'block' ? 'none' : 'block';
    });
});
</script>

@endsection