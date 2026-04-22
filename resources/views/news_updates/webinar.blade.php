@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/webinar.css') }}">

<div class="webinar-container">

    <h2 class="webinar-title">Webinar Scheduler</h2>

    <!-- SEARCH -->
    <div class="webinar-controls">
        <input type="text" id="searchInput" placeholder="Search webinars...">
    </div>

    <!-- WEBINAR GRID -->
    <div class="webinar-grid" id="webinarGrid">

        @foreach([
            ['title'=>'Women Empowerment Webinar','date'=>'2026-01-10','time'=>'10:00','speaker'=>'Dr. Mehta','link'=>'#'],
            ['title'=>'Digital Skills Training','date'=>'2026-01-15','time'=>'14:00','speaker'=>'Ms. Pooja','link'=>'#'],
            ['title'=>'Health Awareness Session','date'=>'2026-01-20','time'=>'11:00','speaker'=>'Dr. Sharma','link'=>'#'],
            ['title'=>'Startup Guidance Webinar','date'=>'2026-01-25','time'=>'16:00','speaker'=>'Mr. Amit','link'=>'#'],
        ] as $webinar)

        <div class="webinar-card">

            <h4>{{ $webinar['title'] }}</h4>

            <p class="webinar-meta">👤 {{ $webinar['speaker'] }}</p>
            <p class="webinar-meta">📅 {{ $webinar['date'] }} | ⏰ {{ $webinar['time'] }}</p>

            <!-- STATUS -->
            <span class="status" 
                data-date="{{ $webinar['date'] }}" 
                data-time="{{ $webinar['time'] }}">
                Loading...
            </span>

            <!-- COUNTDOWN -->
            <p class="countdown" 
                data-date="{{ $webinar['date'] }}" 
                data-time="{{ $webinar['time'] }}">
            </p>

            <div class="webinar-actions">
                <button class="webinar-btn registerBtn" data-title="{{ $webinar['title'] }}">Register</button>
                <a href="{{ $webinar['link'] }}" class="webinar-btn secondary">Join</a>
            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- MODAL -->
<div id="webinarModal" class="modal">
    <div class="modal-content">

        <span class="close">&times;</span>

        <h3 id="webinarTitle">Register</h3>

        <form method="POST" action="#">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>

            <button type="submit" class="webinar-btn">Submit</button>
        </form>

    </div>
</div>

<!-- JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    // SEARCH
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.webinar-card');

    searchInput.addEventListener('keyup', function () {
        let search = this.value.toLowerCase();

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            card.style.display = text.includes(search) ? "block" : "none";
        });
    });

    // STATUS + COUNTDOWN
    function updateStatus() {
        let now = new Date();

        document.querySelectorAll('.status').forEach(el => {
            let date = el.dataset.date;
            let time = el.dataset.time;

            let eventDate = new Date(date + "T" + time);

            if (now < eventDate) {
                el.innerText = "Upcoming";
                el.className = "status upcoming";
            } else if (now - eventDate < 3600000) {
                el.innerText = "Live";
                el.className = "status live";
            } else {
                el.innerText = "Completed";
                el.className = "status completed";
            }
        });

        document.querySelectorAll('.countdown').forEach(el => {
            let date = el.dataset.date;
            let time = el.dataset.time;

            let eventDate = new Date(date + "T" + time);
            let diff = eventDate - now;

            if (diff > 0) {
                let days = Math.floor(diff / (1000*60*60*24));
                let hours = Math.floor((diff / (1000*60*60)) % 24);
                let mins = Math.floor((diff / (1000*60)) % 60);

                el.innerText = `⏳ Starts in ${days}d ${hours}h ${mins}m`;
            } else {
                el.innerText = "";
            }
        });
    }

    setInterval(updateStatus, 1000);

    // MODAL
    const modal = document.getElementById("webinarModal");
    const closeBtn = document.querySelector(".close");
    const title = document.getElementById("webinarTitle");

    document.querySelectorAll(".registerBtn").forEach(btn => {
        btn.addEventListener("click", function () {
            modal.style.display = "block";
            title.innerText = "Register for " + this.dataset.title;
        });
    });

    closeBtn.onclick = () => modal.style.display = "none";

    window.onclick = function(event) {
        if (event.target == modal) modal.style.display = "none";
    };

});
</script>

@endsection