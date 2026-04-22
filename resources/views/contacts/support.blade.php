@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/support.css') }}">

<div class="support-container">

    <!-- ================= TITLE ================= -->
    <h2 class="support-title">Support Centre</h2>
    <p class="support-subtitle">We are here to help you. Browse FAQs or raise a support request.</p>

    <!-- ================= HELP CATEGORIES ================= -->
    <div class="support-categories">

        <div class="category-card">
            <h4>Women Empowerment</h4>
            <p>Support related to women schemes & programs</p>
        </div>

        <div class="category-card">
            <h4>Skill Development</h4>
            <p>Courses, training & certification help</p>
        </div>

        <div class="category-card">
            <h4>Technical Support</h4>
            <p>Website, login, portal related issues</p>
        </div>

        <div class="category-card">
            <h4>General Inquiry</h4>
            <p>Any general questions or assistance</p>
        </div>

    </div>

    <!-- ================= SUPPORT FORM ================= -->
    <div class="support-grid">

        <div class="support-card">

            <h3>Raise Support Request</h3>

            <form action="#" method="POST">

                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email Address" required>
                <input type="text" placeholder="Phone Number">

                <select required>
                    <option>Select Department</option>
                    <option>Women Empowerment</option>
                    <option>Skill Development</option>
                    <option>Training Programs</option>
                    <option>Technical Support</option>
                    <option>Media & PR</option>
                </select>

                <select required>
                    <option>Issue Type</option>
                    <option>Course Issue</option>
                    <option>Payment Issue</option>
                    <option>Login Problem</option>
                    <option>General Query</option>
                </select>

                <textarea placeholder="Describe your issue..." rows="5" required></textarea>

                <button type="submit">Submit Request</button>

            </form>

        </div>

        <!-- ================= CONTACT INFO ================= -->
        <div class="support-card">

            <h3>Support Contacts</h3>

            <p><strong>Email:</strong> support@mmvn.co.in</p>
            <p><strong>Phone:</strong> +91 9876543210</p>

            <h4>Department Contacts</h4>

            <ul>
                <li>Women Empowerment: we@mmvn.co.in</li>
                <li>Skill Development: skills@mmvn.co.in</li>
                <li>Training: training@mmvn.co.in</li>
                <li>Technical: tech@mmvn.co.in</li>
            </ul>

            <p><strong>Working Hours:</strong> Mon - Sat (10 AM - 6 PM)</p>

        </div>

    </div>

    <!-- ================= FAQ SECTION ================= -->
    <div class="faq-section">

        <h3>Frequently Asked Questions</h3>

        <div class="faq-item">
            <button class="faq-question">How to enroll in courses?</button>
            <div class="faq-answer">
                <p>You can enroll from the courses section by filling the registration form.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Is certification provided?</button>
            <div class="faq-answer">
                <p>Yes, certificates are provided after successful completion.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">How to contact support?</button>
            <div class="faq-answer">
                <p>You can fill the support form or contact via email/phone.</p>
            </div>
        </div>

    </div>

    <!-- ================= EMERGENCY ================= -->
    <div class="emergency-box">
        <h3>Emergency Help</h3>
        <p>If you need urgent help, contact:</p>
        <p><strong>Helpline:</strong> 1091 (Women Helpline)</p>
    </div>

</div>

<!-- ================= FAQ SCRIPT ================= -->
<script>
document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
        const answer = btn.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});
</script>

@endsection