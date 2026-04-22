@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">

    <div class="banner-text">
        <h1>Research</h1>
        <p>Explore global research, studies & innovations</p>
    </div>
</section>


<!-- ================= SEARCH ================= -->
<section class="content-section">
    <div class="container">

        <h2 class="section-title">Search Research Papers</h2>

        <input type="text" id="searchResearch" placeholder="Search research topics..."
               style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc;">

    </div>
</section>


<!-- ================= CATEGORY ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Research Fields</h2>

        <div class="course-grid">

            <div class="course-card">
                <img src="{{ asset('images/publications/research.jpg') }}" class="course-icon">
                <h3>Technology</h3>
                <p>AI, Data Science, Cybersecurity</p>
            </div>

            <div class="course-card">
                <img src="{{ asset('images/publications/report.jpg') }}" class="course-icon">
                <h3>Healthcare</h3>
                <p>Medical & public health research</p>
            </div>

            <div class="course-card">
                <img src="{{ asset('images/publications/ngo.jpg') }}" class="course-icon">
                <h3>Social Impact</h3>
                <p>Women empowerment & NGOs</p>
            </div>

            <div class="course-card">
                <img src="{{ asset('images/publications/article.jpg') }}" class="course-icon">
                <h3>Business</h3>
                <p>Economics & entrepreneurship</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= LIVE RESEARCH ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Latest Research (Live)</h2>

        <div id="researchContainer" class="course-grid"></div>

    </div>
</section>


<!-- ================= FEATURED ================= -->
<section class="updates-section">
    <div class="container">

        <h2 class="section-title">Featured Research Topics</h2>

        <div class="update-grid">

            <div class="update-card">
                <h4>Artificial Intelligence</h4>
                <p>Advancements in machine learning.</p>
            </div>

            <div class="update-card">
                <h4>Women Empowerment</h4>
                <p>Social and economic development.</p>
            </div>

            <div class="update-card">
                <h4>Healthcare Innovation</h4>
                <p>Improving public health systems.</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= JAVASCRIPT ================= -->
<script>

// 🔍 Search filter (for static cards)
document.getElementById("searchResearch").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();
    let cards = document.querySelectorAll(".course-card");

    cards.forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(value)
            ? "block"
            : "none";
    });
});


// 📚 Load real-time research (Google Books API)
async function loadResearch() {

    let res = await fetch("https://www.googleapis.com/books/v1/volumes?q=research+science");
    let data = await res.json();

    let container = document.getElementById("researchContainer");

    data.items.slice(0, 10).forEach(item => {

        let title = item.volumeInfo.title || "No Title";
        let authors = item.volumeInfo.authors?.join(", ") || "Unknown Author";
        let img = item.volumeInfo.imageLinks?.thumbnail || "";
        let link = item.volumeInfo.previewLink;

        container.innerHTML += `
            <div class="course-card">
                <img src="${img}" style="width:100px; height:140px; object-fit:cover;">
                <h4>${title}</h4>
                <p>${authors}</p>
                <a href="${link}" target="_blank" style="color:#6a11cb;">
                    Read Research
                </a>
            </div>
        `;
    });
}

loadResearch();

</script>

@endsection