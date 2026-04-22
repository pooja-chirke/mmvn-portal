<li class="dropdown">
    <a href="#">What We Do</a>

    <ul class="dropdown-menu">
        <li><a href="{{ route('courses') }}">Online Courses</a></li>
        <li><a href="{{ route('certifications') }}">Certification Programs</a></li>
        <li><a href="{{ route('training') }}">Training & Capacity Building</a></li>
        <li><a href="{{ route('women.empowerment') }}">Women Empowerment</a></li>
        <li><a href="{{ route('climate') }}">Climate Change</a></li>
        <li><a href="{{ route('skills') }}">Skill Development</a></li>
        <li><a href="{{ route('workshops') }}">Workshops & Webinars</a></li>
        <li><a href="{{ route('advisory') }}">Advisory Services</a></li>
    </ul>
</li>

<li class="dropdown">
    <a href="#">Contacts ▾</a>

    <ul class="dropdown-menu">
        <li><a href="{{ route('contacts.contact') }}">Contact Us</a></li>
        <li><a href="{{ route('contacts.support') }}">Support Centre</a></li>
        <li><a href="{{ route('contacts.helpdesk') }}">Help Desk</a></li>
        <li><a href="{{ route('contacts.grievance') }}">Grievance Redressal</a></li>
        <li><a href="{{ route('contacts.partner') }}">Partner With Us</a></li>
        <li><a href="{{ route('contacts.technical') }}">Technical Advisory</a></li>
        <li><a href="{{ route('contacts.application') }}">Application Form</a></li>
        <li><a href="{{ route('contacts.faqs') }}">FAQs</a></li>
    </ul>
</li>

<script>
// 🔥 FULL FORCE TRANSLATION FIX (WORKS FOR ALL PAGES)

// Run after page load
window.addEventListener("load", function () {
    setTimeout(applyTranslation, 1500);
});

// Main function
function applyTranslation() {
    const select = document.querySelector(".goog-te-combo");

    if (select) {
        // If already selected language, re-trigger it
        const lang = select.value;

        if (lang) {
            select.dispatchEvent(new Event("change"));
        }
    }
}

// 🔁 Run multiple times (important for Laravel pages)
setInterval(() => {
    applyTranslation();
}, 2000);

// 🛑 Fix dropdown close
document.addEventListener("click", function(event) {
    const container = document.querySelector(".translator-container");

    if (container && !container.contains(event.target)) {
        const dropdown = document.querySelector(".translator-dropdown");
        if (dropdown) dropdown.classList.remove("show");
    }
});

// 🛑 Prevent internal click close
document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.querySelector(".translator-dropdown");
    if (dropdown) {
        dropdown.addEventListener("click", function(e) {
            e.stopPropagation();
        });
    }
});
</script>

<style>
body {
    top: 0px !important;
}
</style>