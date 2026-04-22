@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/media.css') }}">

<div class="media-container">

    <h2 class="media-title">Announcements</h2>

    <!-- SEARCH + FILTER -->
    <div class="media-controls">
        <input type="text" id="searchInput" placeholder="Search announcements...">

        <select id="filterType">
            <option value="">All Categories</option>
            <option value="Training">Training</option>
            <option value="Scholarship">Scholarship</option>
            <option value="Event">Event</option>
            <option value="Job">Job</option>
        </select>
    </div>

    <div class="media-grid" id="announcementGrid">

        @foreach([
            ['title'=>'New Training Batch Starting','date'=>'1 Dec 2025','deadline'=>'10 Dec 2025','type'=>'Training','badge'=>'New','desc'=>'Registration open for upcoming skill programs.'],
            ['title'=>'Scholarship Program 2025','date'=>'20 Nov 2025','deadline'=>'15 Dec 2025','type'=>'Scholarship','badge'=>'Important','desc'=>'Financial aid for underprivileged students.'],
            ['title'=>'Mega Job Fair','date'=>'15 Nov 2025','deadline'=>'25 Nov 2025','type'=>'Job','badge'=>'Urgent','desc'=>'100+ companies hiring freshers.'],
            ['title'=>'Women Empowerment Workshop','date'=>'10 Nov 2025','deadline'=>'18 Nov 2025','type'=>'Event','badge'=>'New','desc'=>'Skill-building sessions for women.'],
            ['title'=>'Digital Literacy Course','date'=>'5 Nov 2025','deadline'=>'20 Nov 2025','type'=>'Training','badge'=>'Important','desc'=>'Learn basic computer skills.'],
            ['title'=>'Healthcare Camp','date'=>'1 Nov 2025','deadline'=>'5 Nov 2025','type'=>'Event','badge'=>'Urgent','desc'=>'Free health check-up camp.'],
            ['title'=>'Startup Funding Program','date'=>'25 Oct 2025','deadline'=>'30 Nov 2025','type'=>'Job','badge'=>'New','desc'=>'Funding for innovative startups.'],
            ['title'=>'Free Coaching Classes','date'=>'18 Oct 2025','deadline'=>'28 Oct 2025','type'=>'Training','badge'=>'Important','desc'=>'Coaching for competitive exams.'],
            ['title'=>'Environmental Awareness Drive','date'=>'10 Oct 2025','deadline'=>'15 Oct 2025','type'=>'Event','badge'=>'New','desc'=>'Join our tree plantation drive.'],
            ['title'=>'Internship Opportunity','date'=>'1 Oct 2025','deadline'=>'12 Oct 2025','type'=>'Job','badge'=>'Urgent','desc'=>'Internship openings in NGO projects.'],
        ] as $item)

        <div class="media-card" data-type="{{ $item['type'] }}">

            <!-- BADGE -->
            <span class="badge {{ strtolower($item['badge']) }}">
                {{ $item['badge'] }}
            </span>

            <h4>{{ $item['title'] }}</h4>

            <p class="media-meta">
                📅 Posted: {{ $item['date'] }}
            </p>

            <p class="media-meta deadline">
                ⏳ Deadline: {{ $item['deadline'] }}
            </p>

            <p class="media-meta">
                📂 Category: {{ $item['type'] }}
            </p>

            <p>{{ $item['desc'] }}</p>

            <div class="media-actions">
                <a href="#" class="media-btn">Apply Now</a>
                <a href="#" class="media-btn secondary">Download</a>
            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- JS FILTER -->
<script>
    const searchInput = document.getElementById('searchInput');
    const filterType = document.getElementById('filterType');
    const cards = document.querySelectorAll('.media-card');

    searchInput.addEventListener('keyup', filterCards);
    filterType.addEventListener('change', filterCards);

    function filterCards() {
        let search = searchInput.value.toLowerCase();
        let type = filterType.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardType = card.getAttribute('data-type');

            let matchSearch = text.includes(search);
            let matchType = type === "" || type === cardType;

            if (matchSearch && matchType) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>

@endsection