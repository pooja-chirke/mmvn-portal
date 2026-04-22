@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/media.css') }}">

<div class="media-container">

    <!-- TITLE -->
    <h2 class="media-title">Media Coverage</h2>

    <!-- SEARCH + FILTER -->
    <div class="media-controls">
        <input type="text" id="searchInput" placeholder="Search news...">
        
        <select id="filterLocation">
            <option value="">All Locations</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
            <option value="Nagpur">Nagpur</option>
        </select>
    </div>

    <!-- GRID -->
    <div class="media-grid" id="mediaGrid">

        <!-- CARD -->
        @foreach([
            ['title'=>'MMVN featured in Times of India','date'=>'10 Nov 2025','time'=>'10:30 AM','location'=>'Mumbai','source'=>'Times of India','img'=>'news1.jpg'],
            ['title'=>'Women Empowerment Highlight','date'=>'5 Nov 2025','time'=>'2:00 PM','location'=>'Pune','source'=>'Indian Express','img'=>'news2.jpg'],
            ['title'=>'Rural Development Success Story','date'=>'28 Oct 2025','time'=>'11:00 AM','location'=>'Nagpur','source'=>'NDTV','img'=>'news3.jpg'],
            ['title'=>'Skill Training Initiative','date'=>'15 Oct 2025','time'=>'1:30 PM','location'=>'Mumbai','source'=>'Hindustan Times','img'=>'news4.jpg'],
            ['title'=>'Healthcare Camp Coverage','date'=>'1 Oct 2025','time'=>'9:00 AM','location'=>'Pune','source'=>'Zee News','img'=>'news5.jpg'],
            ['title'=>'Youth Employment Drive','date'=>'20 Sep 2025','time'=>'12:00 PM','location'=>'Nagpur','source'=>'ABP News','img'=>'news6.jpg'],
            ['title'=>'Environmental Campaign','date'=>'10 Sep 2025','time'=>'8:30 AM','location'=>'Mumbai','source'=>'News18','img'=>'news7.jpg'],
            ['title'=>'Women Safety Program','date'=>'28 Aug 2025','time'=>'4:00 PM','location'=>'Pune','source'=>'India Today','img'=>'news8.jpg'],
            ['title'=>'Education Scholarship News','date'=>'12 Aug 2025','time'=>'3:00 PM','location'=>'Nagpur','source'=>'Economic Times','img'=>'news9.jpg'],
            ['title'=>'Startup Support Initiative','date'=>'1 Aug 2025','time'=>'11:30 AM','location'=>'Mumbai','source'=>'Business Standard','img'=>'news10.jpg'],
        ] as $news)

        <div class="media-card" data-location="{{ $news['location'] }}">
            
            <div class="media-img">
                <img src="{{ asset('images/'.$news['img']) }}" alt="news">
            </div>

            <div class="media-content">
                <h4>{{ $news['title'] }}</h4>

                <p class="media-meta">
                    📅 {{ $news['date'] }} | ⏰ {{ $news['time'] }}
                </p>

                <p class="media-meta">
                    📰 {{ $news['source'] }} | 📍 {{ $news['location'] }}
                </p>

                <a href="#" class="media-btn">View Article</a>
            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- JS INTERACTIVITY -->
<script>
    const searchInput = document.getElementById('searchInput');
    const filterLocation = document.getElementById('filterLocation');
    const cards = document.querySelectorAll('.media-card');

    searchInput.addEventListener('keyup', filterCards);
    filterLocation.addEventListener('change', filterCards);

    function filterCards() {
        let search = searchInput.value.toLowerCase();
        let location = filterLocation.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardLocation = card.getAttribute('data-location');

            let matchSearch = text.includes(search);
            let matchLocation = location === "" || location === cardLocation;

            if (matchSearch && matchLocation) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>

@endsection