@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<div class="course-container">

    <!-- TITLE -->
    <h2 class="course-title">Upcoming Courses</h2>

    <!-- SEARCH + FILTER -->
    <div class="course-controls">
        <input type="text" id="searchInput" placeholder="Search courses...">

        <select id="filterMode">
            <option value="">All Modes</option>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
        </select>
    </div>

    <!-- COURSE GRID -->
    <div class="course-grid" id="courseGrid">

        @foreach([
            ['title'=>'Digital Literacy','trainer'=>'Ms. Pooja','date'=>'1 Dec 2025','duration'=>'1 Month','mode'=>'Online','seats'=>'20'],
            ['title'=>'Tailoring Skills','trainer'=>'Mrs. Kavita','date'=>'5 Dec 2025','duration'=>'2 Months','mode'=>'Offline','seats'=>'15'],
            ['title'=>'Basic Computer','trainer'=>'Mr. Rahul','date'=>'10 Dec 2025','duration'=>'1 Month','mode'=>'Online','seats'=>'25'],
            ['title'=>'Spoken English','trainer'=>'Ms. Anita','date'=>'15 Dec 2025','duration'=>'1.5 Months','mode'=>'Offline','seats'=>'18'],
            ['title'=>'Entrepreneurship','trainer'=>'Mr. Amit','date'=>'20 Dec 2025','duration'=>'1 Month','mode'=>'Online','seats'=>'30'],
        ] as $course)

        <div class="course-card" data-mode="{{ $course['mode'] }}">

            <h4>{{ $course['title'] }}</h4>

            <p class="course-meta">👨‍🏫 {{ $course['trainer'] }}</p>
            <p class="course-meta">📅 {{ $course['date'] }}</p>
            <p class="course-meta">⏳ {{ $course['duration'] }}</p>
            <p class="course-meta">💻 {{ $course['mode'] }}</p>
            <p class="course-meta">🎯 Seats: {{ $course['seats'] }}</p>

            <button type="button"
                class="course-btn openModalBtn"
                data-course="{{ $course['title'] }}">
                Register
            </button>

        </div>

        @endforeach

    </div>

</div>

<!-- MODAL -->
<div id="courseModal" class="modal">
    <div class="modal-content">

        <span class="close">&times;</span>

        <h3 id="courseName">Register</h3>

        <!-- FORM (Laravel Ready) -->
        <form method="POST" action="#">
            @csrf

            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>

            <button type="submit" class="course-btn">Submit</button>
        </form>

    </div>
</div>

<!-- JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById('searchInput');
    const filterMode = document.getElementById('filterMode');
    const cards = document.querySelectorAll('.course-card');

    // FILTER
    function filterCards() {
        let search = searchInput.value.toLowerCase();
        let mode = filterMode.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardMode = card.getAttribute('data-mode');

            let matchSearch = text.includes(search);
            let matchMode = mode === "" || mode === cardMode;

            card.style.display = (matchSearch && matchMode) ? "block" : "none";
        });
    }

    searchInput.addEventListener('keyup', filterCards);
    filterMode.addEventListener('change', filterCards);

    // MODAL
    const modal = document.getElementById("courseModal");
    const courseName = document.getElementById("courseName");
    const closeBtn = document.querySelector(".close");

    document.querySelectorAll(".openModalBtn").forEach(btn => {
        btn.addEventListener("click", function () {
            modal.style.display = "block";
            courseName.innerText = "Register for " + this.dataset.course;
        });
    });

    closeBtn.onclick = () => modal.style.display = "none";

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

});
</script>

@endsection