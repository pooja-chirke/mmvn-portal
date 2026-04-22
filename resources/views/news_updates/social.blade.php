@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/social.css') }}">

<div class="social-container">

    <!-- TITLE -->
    <h2 class="social-title">Social Media Feed</h2>

    <!-- CONTROLS -->
    <div class="social-controls">
        <input type="text" id="searchInput" placeholder="Search posts...">

        <select id="filterPlatform">
            <option value="">All Platforms</option>
            <option value="Instagram">Instagram</option>
            <option value="Facebook">Facebook</option>
            <option value="Twitter">Twitter</option>
            <option value="YouTube">YouTube</option>
        </select>
    </div>

    <!-- GRID -->
    <div class="social-grid" id="socialGrid">

        @foreach([
            ['title'=>'Women Empowerment Drive','platform'=>'Instagram','date'=>'12 Nov 2025','likes'=>120,'comments'=>30,'img'=>'s1.jpg','link'=>'https://instagram.com'],
            ['title'=>'Health Camp Awareness','platform'=>'Facebook','date'=>'10 Nov 2025','likes'=>90,'comments'=>20,'img'=>'s2.jpg','link'=>'https://facebook.com'],
            ['title'=>'Skill Training Session','platform'=>'Twitter','date'=>'8 Nov 2025','likes'=>60,'comments'=>10,'img'=>'s3.jpg','link'=>'https://twitter.com'],
            ['title'=>'NGO Achievement Video','platform'=>'YouTube','date'=>'5 Nov 2025','likes'=>200,'comments'=>50,'img'=>'s4.jpg','link'=>'https://youtube.com'],
            ['title'=>'Tree Plantation Drive','platform'=>'Instagram','date'=>'3 Nov 2025','likes'=>150,'comments'=>25,'img'=>'s5.jpg','link'=>'https://instagram.com'],
            ['title'=>'Job Fair Highlights','platform'=>'Facebook','date'=>'1 Nov 2025','likes'=>80,'comments'=>15,'img'=>'s6.jpg','link'=>'https://facebook.com'],
            ['title'=>'Digital Literacy','platform'=>'Twitter','date'=>'28 Oct 2025','likes'=>70,'comments'=>12,'img'=>'s7.jpg','link'=>'https://twitter.com'],
            ['title'=>'Women Safety Workshop','platform'=>'Instagram','date'=>'25 Oct 2025','likes'=>130,'comments'=>22,'img'=>'s8.jpg','link'=>'https://instagram.com'],
            ['title'=>'Startup Webinar','platform'=>'YouTube','date'=>'22 Oct 2025','likes'=>180,'comments'=>40,'img'=>'s9.jpg','link'=>'https://youtube.com'],
            ['title'=>'Scholarship Program','platform'=>'Facebook','date'=>'20 Oct 2025','likes'=>95,'comments'=>18,'img'=>'s10.jpg','link'=>'https://facebook.com'],
        ] as $post)

        <div class="social-card" data-platform="{{ $post['platform'] }}">

            <!-- IMAGE -->
            <div class="social-img">
                <img src="{{ asset('images/'.$post['img']) }}" alt="post">
            </div>

            <!-- CONTENT -->
            <div class="social-content">

                <span class="platform {{ strtolower($post['platform']) }}">
                    {{ $post['platform'] }}
                </span>

                <h4>{{ $post['title'] }}</h4>

                <p class="social-meta">📅 {{ $post['date'] }}</p>

                <div class="social-stats">
                    ❤️ {{ $post['likes'] }} &nbsp; 💬 {{ $post['comments'] }}
                </div>

                <div class="social-actions">
                    <a href="{{ $post['link'] }}" target="_blank" class="social-btn">View Post</a>

                    <button class="social-btn secondary shareBtn"
                        data-title="{{ $post['title'] }}">
                        Share
                    </button>
                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById('searchInput');
    const filterPlatform = document.getElementById('filterPlatform');
    const cards = document.querySelectorAll('.social-card');

    function filterPosts() {
        let search = searchInput.value.toLowerCase();
        let platform = filterPlatform.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardPlatform = card.dataset.platform;

            let matchSearch = text.includes(search);
            let matchPlatform = platform === "" || platform === cardPlatform;

            card.style.display = (matchSearch && matchPlatform) ? "block" : "none";
        });
    }

    searchInput.addEventListener('keyup', filterPosts);
    filterPlatform.addEventListener('change', filterPosts);

    // SHARE FUNCTION (WhatsApp)
    document.querySelectorAll('.shareBtn').forEach(btn => {
        btn.addEventListener('click', function () {
            let text = this.dataset.title;
            let url = "https://wa.me/?text=" + encodeURIComponent(text);
            window.open(url, '_blank');
        });
    });

});
</script>

@endsection