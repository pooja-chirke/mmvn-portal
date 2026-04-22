@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/notifications.css') }}">

<div class="notif-container">

    <h2 class="notif-title">Notifications Center</h2>

    <!-- FILTER -->
    <div class="notif-controls">
        <input type="text" id="searchInput" placeholder="Search notifications...">

        <select id="filterType">
            <option value="">All Types</option>
            <option value="News">News</option>
            <option value="Event">Event</option>
            <option value="Course">Course</option>
            <option value="Social">Social</option>
        </select>
    </div>

    <!-- GRID -->
    <div class="notif-grid" id="notifGrid">

        @foreach([
            // NEWS (10)
            ['title'=>'New NGO Initiative Launched','type'=>'News','channel'=>'Email','status'=>'Sent'],
            ['title'=>'Press Release Published','type'=>'News','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'Monthly Newsletter Released','type'=>'News','channel'=>'App','status'=>'Sent'],
            ['title'=>'Media Coverage Update','type'=>'News','channel'=>'Email','status'=>'Pending'],
            ['title'=>'Govt Announcement Shared','type'=>'News','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'NGO Achievements Highlighted','type'=>'News','channel'=>'App','status'=>'Sent'],
            ['title'=>'CSR Partnership News','type'=>'News','channel'=>'Email','status'=>'Sent'],
            ['title'=>'Community Success Story','type'=>'News','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'Health Awareness Update','type'=>'News','channel'=>'App','status'=>'Sent'],
            ['title'=>'Women Program Update','type'=>'News','channel'=>'Email','status'=>'Pending'],

            // EVENTS (8)
            ['title'=>'Workshop Scheduled','type'=>'Event','channel'=>'App','status'=>'Sent'],
            ['title'=>'Health Camp Reminder','type'=>'Event','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'Webinar Notification','type'=>'Event','channel'=>'Email','status'=>'Sent'],
            ['title'=>'Training Event Update','type'=>'Event','channel'=>'App','status'=>'Pending'],
            ['title'=>'Seminar Alert','type'=>'Event','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'Annual Event Notice','type'=>'Event','channel'=>'Email','status'=>'Sent'],
            ['title'=>'Conference Reminder','type'=>'Event','channel'=>'App','status'=>'Sent'],
            ['title'=>'Community Event Update','type'=>'Event','channel'=>'SMS','status'=>'Delivered'],

            // COURSES (5)
            ['title'=>'New Course Available','type'=>'Course','channel'=>'Email','status'=>'Sent'],
            ['title'=>'Course Registration Open','type'=>'Course','channel'=>'App','status'=>'Sent'],
            ['title'=>'Seats Filling Fast','type'=>'Course','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'Course Reminder','type'=>'Course','channel'=>'Email','status'=>'Pending'],
            ['title'=>'Training Update','type'=>'Course','channel'=>'App','status'=>'Sent'],

            // SOCIAL (10)
            ['title'=>'Instagram Post Update','type'=>'Social','channel'=>'App','status'=>'Sent'],
            ['title'=>'Facebook Campaign Live','type'=>'Social','channel'=>'Email','status'=>'Sent'],
            ['title'=>'Twitter Update Posted','type'=>'Social','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'YouTube Video Published','type'=>'Social','channel'=>'App','status'=>'Sent'],
            ['title'=>'Social Engagement Boost','type'=>'Social','channel'=>'Email','status'=>'Pending'],
            ['title'=>'Awareness Campaign Shared','type'=>'Social','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'NGO Post Trending','type'=>'Social','channel'=>'App','status'=>'Sent'],
            ['title'=>'Video Promotion Alert','type'=>'Social','channel'=>'Email','status'=>'Sent'],
            ['title'=>'Campaign Performance Update','type'=>'Social','channel'=>'SMS','status'=>'Delivered'],
            ['title'=>'New Social Post','type'=>'Social','channel'=>'App','status'=>'Sent'],
        ] as $notif)

        <div class="notif-card" data-type="{{ $notif['type'] }}">

            <h4>{{ $notif['title'] }}</h4>

            <p class="notif-meta">📂 {{ $notif['type'] }}</p>

            <span class="channel {{ strtolower($notif['channel']) }}">
                {{ $notif['channel'] }}
            </span>

            <span class="status {{ strtolower($notif['status']) }}">
                {{ $notif['status'] }}
            </span>

        </div>

        @endforeach

    </div>

</div>

<!-- JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById('searchInput');
    const filterType = document.getElementById('filterType');
    const cards = document.querySelectorAll('.notif-card');

    function filterNotifications() {
        let search = searchInput.value.toLowerCase();
        let type = filterType.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardType = card.dataset.type;

            let matchSearch = text.includes(search);
            let matchType = type === "" || type === cardType;

            card.style.display = (matchSearch && matchType) ? "block" : "none";
        });
    }

    searchInput.addEventListener('keyup', filterNotifications);
    filterType.addEventListener('change', filterNotifications);

});
</script>

@endsection