@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/media.css') }}">

<div class="media-container">

    <!-- TITLE -->
    <h2 class="media-title">Awards & Recognition</h2>

    <!-- FEATURED AWARD -->
    <div class="featured-award">
        <img src="{{ asset('images/award1.jpg') }}" alt="award">
        <div class="featured-content">
            <h3>🏆 Best NGO Award 2025</h3>
            <p>Recognized by Govt. of Maharashtra for outstanding contribution in women empowerment and rural development.</p>
            <span class="badge national">National</span>
        </div>
    </div>

    <!-- SEARCH + FILTER -->
    <div class="media-controls">
        <input type="text" id="searchInput" placeholder="Search awards...">

        <select id="filterCategory">
            <option value="">All Categories</option>
            <option value="National">National</option>
            <option value="State">State</option>
            <option value="CSR">CSR</option>
            <option value="International">International</option>
        </select>
    </div>

    <!-- GRID -->
    <div class="media-grid" id="awardGrid">

        @foreach([
            ['title'=>'Best NGO Award 2025','org'=>'Govt. of Maharashtra','year'=>'2025','category'=>'National','img'=>'award1.jpg'],
            ['title'=>'Women Empowerment Excellence','org'=>'UN Foundation','year'=>'2024','category'=>'International','img'=>'award2.jpg'],
            ['title'=>'CSR Impact Award','org'=>'Tata Group','year'=>'2024','category'=>'CSR','img'=>'award3.jpg'],
            ['title'=>'Rural Development Award','org'=>'State Govt','year'=>'2023','category'=>'State','img'=>'award4.jpg'],
            ['title'=>'Social Innovation Award','org'=>'NITI Aayog','year'=>'2023','category'=>'National','img'=>'award5.jpg'],
            ['title'=>'Best Community Service','org'=>'NGO Council','year'=>'2022','category'=>'National','img'=>'award6.jpg'],
            ['title'=>'Healthcare Impact Award','org'=>'WHO India','year'=>'2022','category'=>'International','img'=>'award7.jpg'],
            ['title'=>'Youth Empowerment Award','org'=>'Reliance Foundation','year'=>'2021','category'=>'CSR','img'=>'award8.jpg'],
            ['title'=>'Education Excellence Award','org'=>'State Govt','year'=>'2021','category'=>'State','img'=>'award9.jpg'],
            ['title'=>'Sustainability Award','org'=>'UNDP','year'=>'2020','category'=>'International','img'=>'award10.jpg'],
        ] as $award)

        <div class="media-card" data-category="{{ $award['category'] }}">

            <!-- IMAGE -->
            <div class="media-img">
                <img src="{{ asset('images/'.$award['img']) }}" alt="award">
            </div>

            <!-- CONTENT -->
            <div class="media-content">
                <h4>{{ $award['title'] }}</h4>

                <p class="media-meta">
                    🏢 {{ $award['org'] }}
                </p>

                <p class="media-meta">
                    📅 {{ $award['year'] }}
                </p>

                <span class="badge {{ strtolower($award['category']) }}">
                    {{ $award['category'] }}
                </span>

                <a href="#" class="media-btn">View Certificate</a>
            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- JS FILTER -->
<script>
    const searchInput = document.getElementById('searchInput');
    const filterCategory = document.getElementById('filterCategory');
    const cards = document.querySelectorAll('.media-card');

    searchInput.addEventListener('keyup', filterCards);
    filterCategory.addEventListener('change', filterCards);

    function filterCards() {
        let search = searchInput.value.toLowerCase();
        let category = filterCategory.value;

        cards.forEach(card => {
            let text = card.innerText.toLowerCase();
            let cardCategory = card.getAttribute('data-category');

            let matchSearch = text.includes(search);
            let matchCategory = category === "" || category === cardCategory;

            if (matchSearch && matchCategory) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>

@endsection