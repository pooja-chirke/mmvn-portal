@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/media.css') }}">

<div class="media-container">

    <!-- TITLE -->
    <h2 class="media-title">Newsletters</h2>

    <!-- FEATURED NEWSLETTER -->
    <div class="featured-newsletter">
        <img src="{{ asset('images/newsletter-feature.jpg') }}" alt="newsletter">
        <div class="featured-content">
            <h3>🌟 Latest: November 2025 Newsletter</h3>
            <p>Explore our latest achievements, success stories, and upcoming initiatives.</p>
            <a href="#" class="media-btn">View</a>
            <a href="#" class="media-btn secondary">Download PDF</a>
        </div>
    </div>

    <!-- FILTER -->
    <div class="media-controls">
        <input type="text" id="searchInput" placeholder="Search newsletter...">

        <select id="filterYear">
            <option value="">All Years</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
        </select>
    </div>

    <!-- GRID -->
    <div class="media-grid" id="newsletterGrid">

        @foreach([
            ['title'=>'November Newsletter','date'=>'Nov 2025','year'=>'2025','img'=>'n1.jpg'],
            ['title'=>'October Newsletter','date'=>'Oct 2025','year'=>'2025','img'=>'n2.jpg'],
            ['title'=>'September Newsletter','date'=>'Sep 2025','year'=>'2025','img'=>'n3.jpg'],
            ['title'=>'August Newsletter','date'=>'Aug 2025','year'=>'2025','img'=>'n4.jpg'],
            ['title'=>'July Newsletter','date'=>'Jul 2025','year'=>'2025','img'=>'n5.jpg'],
            ['title'=>'June Newsletter','date'=>'Jun 2025','year'=>'2025','img'=>'n6.jpg'],
            ['title'=>'May Newsletter','date'=>'May 2025','year'=>'2025','img'=>'n7.jpg'],
            ['title'=>'April Newsletter','date'=>'Apr 2025','year'=>'2025','img'=>'n8.jpg'],
            ['title'=>'March Newsletter','date'=>'Mar 2025','year'=>'2025','img'=>'n9.jpg'],
            ['title'=>'February Newsletter','date'=>'Feb 2025','year'=>'2025','img'=>'n10.jpg'],
        ] as $news)

        <div class="media-card" data-year="{{ $news['year'] }}">

            <div class="media-img">
                <img src="{{ asset('images/'.$news['img']) }}" alt="newsletter">
            </div>

            <div class="media-content">
                <h4>{{ $news['title'] }}</h4>
                <p class="media-meta">📅 {{ $news['date'] }}</p>

                <div class="media-actions">
                    <a href="#" class="media-btn">View</a>
                    <a href="#" class="media-btn secondary">Download</a>
                </div>
            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- JS FILTER -->
<script>
    const searchInput = document.getElementById('searchInput');
    const filterYear = document.getElementById('filterYear');
    const cards = document.querySelectorAll('.media-card');

    searchInput.addEventListener('keyup', filterCards);
    filterYear.addEventListener('change', filterCards);

    function filterCards() {
        let search = searchInput.value.toLowerCase();
        let year = filterYear.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardYear = card.getAttribute('data-year');

            let matchSearch = text.includes(search);
            let matchYear = year === "" || year === cardYear;

            if (matchSearch && matchYear) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>

@endsection