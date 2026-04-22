@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/faqs.css') }}">

<div class="faq-container">

    <!-- ================= TITLE ================= -->
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <p class="faq-subtitle">Find answers to common queries about our NGO services</p>

    <!-- ================= SEARCH ================= -->
    <div class="faq-search">
        <input type="text" id="faqSearch" placeholder="Search your question...">
    </div>

    <!-- ================= CATEGORY FILTER ================= -->
    <div class="faq-tabs">
        <button class="tab-btn active" onclick="filterFAQ(event,'all')">All</button>
        <button class="tab-btn" onclick="filterFAQ(event,'program')">Programs</button>
        <button class="tab-btn" onclick="filterFAQ(event,'course')">Courses</button>
        <button class="tab-btn" onclick="filterFAQ(event,'technical')">Technical</button>
        <button class="tab-btn" onclick="filterFAQ(event,'general')">General</button>
    </div>

    <!-- ================= FAQ LIST ================= -->
    <div class="faq-list">

        <div class="faq-item program">
            <button class="faq-question">What programs does MMVN offer?</button>
            <div class="faq-answer">
                <p>We offer women empowerment, skill development, entrepreneurship, and training programs.</p>
            </div>
        </div>

        <div class="faq-item course">
            <button class="faq-question">How can I enroll in courses?</button>
            <div class="faq-answer">
                <p>You can enroll through the courses section or application form on our website.</p>
            </div>
        </div>

        <div class="faq-item technical">
            <button class="faq-question">I am facing login issues. What should I do?</button>
            <div class="faq-answer">
                <p>Please contact technical support or use the helpdesk section to raise a ticket.</p>
            </div>
        </div>

        <div class="faq-item general">
            <button class="faq-question">Is there any certification provided?</button>
            <div class="faq-answer">
                <p>Yes, certificates are provided after successful completion of training programs.</p>
            </div>
        </div>

        <div class="faq-item program">
            <button class="faq-question">Who can apply for women empowerment schemes?</button>
            <div class="faq-answer">
                <p>Women from rural and urban areas who meet eligibility criteria can apply.</p>
            </div>
        </div>

    </div>

    <!-- ================= HELP SECTION ================= -->
    <div class="faq-help">

        <h3>Still have questions?</h3>
        <p>Our support team is here to help you</p>

        <!-- ✅ FIXED ROUTES -->
        <a href="{{ route('contacts.contact') }}" class="help-btn">
            Contact Support
        </a>

        <a href="{{ route('contacts.helpdesk') }}" class="help-btn secondary">
            Go to Helpdesk
        </a>

    </div>

</div>

<!-- ================= SCRIPT ================= -->
<script>

// ✅ ACCORDION (smooth toggle)
document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {

        const answer = btn.nextElementSibling;

        // close others (optional pro feature)
        document.querySelectorAll('.faq-answer').forEach(a => {
            if(a !== answer) a.style.display = 'none';
        });

        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});

// ✅ SEARCH FILTER
document.getElementById('faqSearch').addEventListener('keyup', function() {
    let value = this.value.toLowerCase();

    document.querySelectorAll('.faq-item').forEach(item => {
        item.style.display = item.innerText.toLowerCase().includes(value) ? 'block' : 'none';
    });
});

// ✅ CATEGORY FILTER (FIXED EVENT BUG)
function filterFAQ(e, category) {

    document.querySelectorAll('.faq-item').forEach(item => {
        if(category === 'all' || item.classList.contains(category)){
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    // active tab highlight
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    e.target.classList.add('active');
}

</script>

@endsection