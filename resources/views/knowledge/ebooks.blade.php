@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

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

        <input type="text" id="searchBox" placeholder="Search categories..."
               style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc;">
    </div>
</section>

<!-- ================= CATEGORY ================= -->
<section class="courses-section">
<div class="container">
<h2 class="section-title">Popular Categories</h2>

<div class="course-grid">

<div class="course-card category" data-query="programming">Digital Skills</div>
<div class="course-card category" data-query="business">Business</div>
<div class="course-card category" data-query="health">Health</div>
<div class="course-card category" data-query="self development">Self Development</div>
<div class="course-card category" data-query="finance">Finance</div>
<div class="course-card category" data-query="technology">Technology</div>
<div class="course-card category" data-query="motivation">Motivation</div>
<div class="course-card category" data-query="entrepreneurship">Entrepreneurship</div>
<div class="course-card category" data-query="data science">Data Science</div>

</div>
</div>
</section>

<!-- ================= GOOGLE BOOKS ================= -->
<section class="courses-section">
<div class="container">

<h2 class="section-title">Live E-Books (Google Library)</h2>

<!-- 🔍 GOOGLE SEARCH -->
<input type="text" id="bookSearch" placeholder="Search books from Google..."
       style="width:100%; padding:10px; border-radius:8px; border:1px solid #ccc; margin-bottom:20px;">

<div id="booksContainer" class="course-grid"></div>

<div style="text-align:center; margin-top:20px;">
    <button onclick="prevPage()">⬅ Prev</button>
    <button onclick="nextPage()">Next ➡</button>
</div>

</div>
</section>

<!-- ================= FEATURED ================= -->
<section class="updates-section">
<div class="container">
<h2 class="section-title">Featured E-Books</h2>

<div class="update-grid">
<div class="update-card">Rich Dad Poor Dad</div>
<div class="update-card">Atomic Habits</div>
<div class="update-card">The Lean Startup</div>
<div class="update-card">Think and Grow Rich</div>
<div class="update-card">Deep Work</div>
</div>

</div>
</section>

<!-- ================= JAVASCRIPT ================= -->
<script>

document.addEventListener("DOMContentLoaded", function () {

let startIndex = 0;
let currentQuery = "education";

// ✅ OPTIONAL (put your own key if you have)
const API_KEY = ""; 

const container = document.getElementById("booksContainer");
const categorySearch = document.getElementById("searchBox");
const bookSearch = document.getElementById("bookSearch");


// ================= LOAD BOOKS =================
async function loadBooks(query = "education", start = 0) {

    // ✅ SMART QUERY (fix empty result issue)
    if (!query || query.length < 2) {
        query = "education";
    }

    let finalQuery = query + " books";

    container.innerHTML = "<p style='text-align:center;'>Loading...</p>";

    try {
        currentQuery = query;

        let url = `https://www.googleapis.com/books/v1/volumes?q=${encodeURIComponent(finalQuery)}&startIndex=${start}&maxResults=8`;

        // ✅ add API key if available
        if (API_KEY) {
            url += `&key=${API_KEY}`;
        }

        let res = await fetch(url);
        let data = await res.json();

        console.log(data);

        container.innerHTML = "";

        // ✅ FALLBACK FIX (VERY IMPORTANT)
        if (!data.items || data.items.length === 0) {

            // fallback query
            if (query !== "education") {
                loadBooks("education", 0);
                return;
            }

            container.innerHTML = "<p style='text-align:center;'>No books found</p>";
            return;
        }

        data.items.forEach(book => {

            let title = book.volumeInfo.title || "No Title";
            let img = book.volumeInfo.imageLinks?.thumbnail || "https://via.placeholder.com/150";
            let link = book.volumeInfo.previewLink || "#";

            container.innerHTML += `
            <div class="course-card">
                <img src="${img}" style="width:100%; height:180px; object-fit:cover;">
                <h4>${title}</h4>
                <a href="${link}" target="_blank">Read Book</a>
            </div>
            `;
        });

    } catch (error) {
        console.log(error);
        container.innerHTML = "<p style='text-align:center;'>Error loading books</p>";
    }
}


// ================= CATEGORY SEARCH FILTER =================
categorySearch.addEventListener("keyup", function () {

    let value = this.value.toLowerCase();

    document.querySelectorAll(".category").forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(value)
            ? "block"
            : "none";
    });

});


// ================= GOOGLE BOOK SEARCH =================
let timer;

bookSearch.addEventListener("keyup", function () {

    clearTimeout(timer);

    let value = this.value.trim();

    timer = setTimeout(() => {
        startIndex = 0;
        loadBooks(value);
    }, 500);

});


// ================= CATEGORY CLICK =================
document.querySelectorAll(".category").forEach(card => {
    card.addEventListener("click", function () {

        let query = this.dataset.query;

        bookSearch.value = query;
        startIndex = 0;

        loadBooks(query);
    });
});


// ================= PAGINATION =================
window.nextPage = function () {
    startIndex += 8;
    loadBooks(currentQuery, startIndex);
};

window.prevPage = function () {
    if (startIndex >= 8) {
        startIndex -= 8;
        loadBooks(currentQuery, startIndex);
    }
};


// ================= INITIAL LOAD =================
loadBooks();

});

</script>
@endsection