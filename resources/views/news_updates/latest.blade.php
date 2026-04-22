@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/newsupdates.css') }}">

<div class="latest-news-wrapper">

    <!-- ================= TITLE ================= -->
    <h2 class="latest-title">Latest News</h2>

    <!-- ================= SEARCH + FILTER ================= -->
    <div class="latest-controls">
        <input type="text" id="searchInput" placeholder="Search news...">

        <select id="filterCategory">
            <option value="">All Categories</option>
            <option value="Program">Program</option>
            <option value="Training">Training</option>
            <option value="Event">Event</option>
            <option value="Health">Health</option>
        </select>
    </div>

    <!-- ================= FEATURED ================= -->
    <div class="latest-featured">

        <img src="{{ asset('images/news-feature.jpg') }}" alt="featured">

        <div class="latest-featured-content">
            <h3>🌟 Women Empowerment Mega Program</h3>
            <p>
                MMVN launched a large-scale initiative impacting 
                10,000+ rural women across Maharashtra.
            </p>

            <a href="#" class="latest-btn">Read Full Story</a>
        </div>

    </div>

    <!-- ================= NEWS CARDS ================= -->
    <div class="latest-grid" id="newsGrid">

        @php
        $newsList = [
            ['title'=>'Women Empowerment Program','desc'=>'New initiative launched for rural women.','date'=>'12 Nov 2025','location'=>'Mumbai','category'=>'Program','img'=>'n1.jpg'],
            ['title'=>'Skill Training Camp','desc'=>'Free training camp started.','date'=>'10 Nov 2025','location'=>'Pune','category'=>'Training','img'=>'n2.jpg'],
            ['title'=>'Healthcare Awareness Drive','desc'=>'Free medical camps organized.','date'=>'5 Nov 2025','location'=>'Nagpur','category'=>'Health','img'=>'n3.jpg'],
            ['title'=>'Job Fair 2025','desc'=>'Employment opportunities for youth.','date'=>'1 Nov 2025','location'=>'Mumbai','category'=>'Event','img'=>'n4.jpg'],
            ['title'=>'Digital Literacy Campaign','desc'=>'Training for digital skills.','date'=>'25 Oct 2025','location'=>'Pune','category'=>'Training','img'=>'n5.jpg'],
            ['title'=>'Women Safety Workshop','desc'=>'Self-defense training sessions.','date'=>'20 Oct 2025','location'=>'Nagpur','category'=>'Program','img'=>'n6.jpg']
        ];
        @endphp

        @foreach($newsList as $news)

        <div class="latest-card" data-category="{{ $news['category'] }}">

            <img src="{{ asset('images/'.$news['img']) }}" alt="news">

            <div class="latest-card-body">

                <h4>{{ $news['title'] }}</h4>

                <p class="latest-meta">
                    📅 {{ $news['date'] }} | 📍 {{ $news['location'] }}
                </p>

                <p>{{ $news['desc'] }}</p>

                <a href="#" class="latest-btn">Read More</a>

            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- ================= FILTER SCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById('searchInput');
    const filterCategory = document.getElementById('filterCategory');
    const cards = document.querySelectorAll('.latest-card');

    function filterCards() {
        let search = searchInput.value.toLowerCase();
        let category = filterCategory.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardCategory = card.getAttribute('data-category');

            let matchSearch = text.includes(search);
            let matchCategory = category === "" || category === cardCategory;

            card.style.display = (matchSearch && matchCategory) ? "block" : "none";
        });
    }

    searchInput.addEventListener('keyup', filterCards);
    filterCategory.addEventListener('change', filterCards);

});
</script>

@endsection