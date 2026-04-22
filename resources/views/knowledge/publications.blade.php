@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- 🔴 LIVE STYLE -->
<style>
.live-badge {
    background: red;
    color: white;
    font-size: 12px;
    padding: 4px 8px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 8px;
    animation: blink 1s infinite;
}
@keyframes blink {
    0% {opacity:1;}
    50% {opacity:0.4;}
    100% {opacity:1;}
}
</style>

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">

    <div class="banner-text">
        <h1>Publications</h1>
        <p>Research papers, articles & official documents</p>
    </div>
</section>


<!-- ================= SEARCH ================= -->
<section class="content-section">
    <div class="container">

        <h2 class="section-title">Search Publications</h2>

        <input type="text" id="searchPub" placeholder="Search publications..."
               style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc;">

    </div>
</section>


<!-- ================= FILTER BUTTONS ================= -->
<div style="text-align:center; margin:20px;">
    <button onclick="filterCategory('all')">All</button>
    <button onclick="filterCategory('ai')">AI</button>
    <button onclick="filterCategory('health')">Health</button>
    <button onclick="filterCategory('business')">Business</button>
</div>


<!-- ================= CATEGORY ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Publication Categories</h2>

        <div class="course-grid">

            <div class="course-card">
                <img src="{{ asset('images/publications/research.jpg') }}" class="course-icon">
                <h3>Research Papers</h3>
                <p>Academic and scientific research</p>
            </div>

            <div class="course-card">
                <img src="{{ asset('images/publications/report.jpg') }}" class="course-icon">
                <h3>Government Reports</h3>
                <p>Official reports and policies</p>
            </div>

            <div class="course-card">
                <img src="{{ asset('images/publications/ngo.jpg') }}" class="course-icon">
                <h3>NGO Publications</h3>
                <p>Impact reports & case studies</p>
            </div>

            <div class="course-card">
                <img src="{{ asset('images/publications/article.jpg') }}" class="course-icon">
                <h3>Articles</h3>
                <p>Blogs, journals & insights</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= LIVE PUBLICATIONS ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Live Publications</h2>

        <div id="pubContainer" class="course-grid"></div>

    </div>
</section>


<!-- ================= FEATURED ================= -->
<section class="updates-section">
    <div class="container">

        <h2 class="section-title">Featured Publications</h2>

        <div class="update-grid">

            <div class="update-card">
                <h4>Women Empowerment Report</h4>
                <p>Impact analysis of women programs.</p>
            </div>

            <div class="update-card">
                <h4>Digital India Study</h4>
                <p>Technology adoption in rural areas.</p>
            </div>

            <div class="update-card">
                <h4>Health Awareness Survey</h4>
                <p>Community health improvements.</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= JAVASCRIPT ================= -->
<script>

// GLOBAL VARIABLES
let allData = [];
let currentPage = 1;
let itemsPerPage = 8; // ✅ SHOW 8 LIVE CARDS


// 🔍 SEARCH
document.getElementById("searchPub").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();

    let filtered = allData.filter(item =>
        item.title.toLowerCase().includes(value)
    );

    currentPage = 1;
    displayData(filtered);
});


// 🎯 FILTER
function filterCategory(type) {

    let filtered;

    if(type === "all"){
        filtered = allData;
    } else {
        filtered = allData.filter(item =>
            item.title.toLowerCase().includes(type)
        );
    }

    currentPage = 1;
    displayData(filtered);
}


// 📚 LOAD DATA
async function loadPublications() {

    let res = await fetch("https://www.googleapis.com/books/v1/volumes?q=women+empowerment+research");
    let data = await res.json();

    allData = (data.items || []).map(item => ({
        title: item.volumeInfo.title || "No Title",
        authors: item.volumeInfo.authors?.join(", ") || "Unknown",
        img: item.volumeInfo.imageLinks?.thumbnail || "https://via.placeholder.com/150",
        link: item.volumeInfo.previewLink
    }));

    displayData(allData);
}


// 📄 DISPLAY FUNCTION
function displayData(data){

    let container = document.getElementById("pubContainer");
    container.innerHTML = "";

    let start = (currentPage - 1) * itemsPerPage;
    let end = start + itemsPerPage;

    let paginated = data.slice(start, end);

    paginated.forEach((item, index) => {

        // 🔴 LIVE BADGE (FIRST PAGE ONLY)
        let liveTag = (currentPage === 1 && index < 8)
            ? `<div class="live-badge">🔴 LIVE</div>`
            : "";

        container.innerHTML += `
            <div class="course-card">

                ${liveTag}

                <img src="${item.img}" style="width:100%; height:180px; object-fit:cover;">
                <h4>${item.title}</h4>
                <p>${item.authors}</p>

                <a href="${item.link}" target="_blank" style="color:#6a11cb;">
                    View Publication
                </a><br><br>

                <a href="${item.link}" target="_blank"
                   style="background:#6a11cb; color:white; padding:6px 10px; border-radius:6px;">
                   Read Online
                </a>

            </div>
        `;
    });

    updatePagination(data.length);
}


// 🔁 PAGINATION
function updatePagination(totalItems){

    let totalPages = Math.ceil(totalItems / itemsPerPage);

    let html = `
        <div style="text-align:center; margin-top:20px;">
            <button onclick="prevPage()">Prev</button>
            <span style="margin:0 10px;">Page ${currentPage} / ${totalPages}</span>
            <button onclick="nextPage(${totalPages})">Next</button>
        </div>
    `;

    document.getElementById("pubContainer").innerHTML += html;
}

function nextPage(totalPages){
    if(currentPage < totalPages){
        currentPage++;
        displayData(allData);
    }
}

function prevPage(){
    if(currentPage > 1){
        currentPage--;
        displayData(allData);
    }
}


// 🚀 INIT
loadPublications();

</script>

@endsection