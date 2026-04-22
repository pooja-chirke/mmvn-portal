@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/ebooks.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">

    <div class="banner-text">
        <h1>E-Books Library</h1>
        <p>Explore knowledge, skills and opportunities</p>
    </div>
</section>

<!-- ================= SEARCH ================= -->
<section class="content-section">
    <div class="container">
        <h2 class="section-title">Search E-Books</h2>

        <input type="text" id="searchBox" placeholder="Search books..."
               class="search-box">
    </div>
</section>

<!-- ================= CATEGORY SECTION ================= -->
<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Popular Categories</h2>

        <div class="course-grid" id="categorySection">

            <div class="course-card searchable">
                <h3>Digital Skills</h3>
                <p>Programming, AI, Data Science</p>
            </div>

            <div class="course-card searchable">
                <h3>Business</h3>
                <p>Entrepreneurship & startups</p>
            </div>

            <div class="course-card searchable">
                <h3>Health</h3>
                <p>Mental & physical well-being</p>
            </div>

            <div class="course-card searchable">
                <h3>Self Development</h3>
                <p>Personality & leadership</p>
            </div>

            <div class="course-card searchable">
                <h3>Finance</h3>
                <p>Investment & money management</p>
            </div>

            <div class="course-card searchable">
                <h3>Technology</h3>
                <p>Latest tech trends</p>
            </div>

        </div>
    </div>
</section>

<!-- ================= GOOGLE BOOKS ================= -->
<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Live E-Books (Google Library)</h2>

        <div id="booksContainer" class="course-grid"></div>
    </div>
</section>

<!-- ================= FEATURED BOOKS ================= -->
<section class="updates-section">
    <div class="container">
        <h2 class="section-title">Featured E-Books</h2>

        <div class="update-grid" id="featuredSection">

            <div class="update-card searchable">
                <h4>Rich Dad Poor Dad</h4>
                <p>Learn financial independence.</p>
            </div>

            <div class="update-card searchable">
                <h4>Atomic Habits</h4>
                <p>Build good habits effectively.</p>
            </div>

            <div class="update-card searchable">
                <h4>The Lean Startup</h4>
                <p>Startup strategies and growth.</p>
            </div>

            <div class="update-card searchable">
                <h4>Think and Grow Rich</h4>
                <p>Success mindset & wealth building.</p>
            </div>

            <div class="update-card searchable">
                <h4>Deep Work</h4>
                <p>Focus and productivity mastery.</p>
            </div>

        </div>
    </div>
</section>

<!-- ================= JAVASCRIPT ================= -->
<script>

// 🔍 GLOBAL SEARCH (ALL SECTIONS)
document.getElementById("searchBox").addEventListener("keyup", function () {
    let value = this.value.toLowerCase();

    let allCards = document.querySelectorAll(".searchable");

    allCards.forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(value)
            ? "block"
            : "none";
    });

    // Google books filtering
    let bookCards = document.querySelectorAll(".book-card");
    bookCards.forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(value)
            ? "block"
            : "none";
    });
});


// 📚 GOOGLE BOOKS API (DYNAMIC SEARCH)
async function loadBooks(query = "education") {

    let container = document.getElementById("booksContainer");
    container.innerHTML = "Loading...";

    let res = await fetch(`https://www.googleapis.com/books/v1/volumes?q=${query}`);
    let data = await res.json();

    container.innerHTML = "";

    data.items?.slice(0, 12).forEach(book => {

        let title = book.volumeInfo.title || "No Title";
        let img = book.volumeInfo.imageLinks?.thumbnail || "";
        let link = book.volumeInfo.previewLink;

        container.innerHTML += `
            <div class="course-card book-card">
                <img src="${img}" class="book-img">
                <h4>${title}</h4>
                <a href="${link}" target="_blank" class="read-btn">Read Book</a>
            </div>
        `;
    });
}

// 🔁 SEARCH API CALL
document.getElementById("searchBox").addEventListener("change", function () {
    let value = this.value;
    if(value.length > 2){
        loadBooks(value);
    }
});

// Initial load
loadBooks();

</script>

@endsection