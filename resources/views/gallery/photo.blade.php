@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Photo & Media Gallery</h1>
        <p>Explore NGO activities, videos & impact stories</p>
    </div>
</section>

<!-- ================= FILTER ================= -->
<section class="content-section">
    <div class="container">
        <h2 class="section-title">Browse by Category</h2>

        <div style="text-align:center;">
            <button onclick="filterGallery('all')">All</button>
            <button onclick="filterGallery('workshop')">Workshops</button>
            <button onclick="filterGallery('training')">Training</button>
            <button onclick="filterGallery('event')">Events</button>
            <button onclick="filterGallery('health')">Health</button>
        </div>
    </div>
</section>

<!-- ================= GALLERY ================= -->
<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Our Activities</h2>

        <!-- ✅ DATA STORE (NO JS ERROR) -->
        <div id="galleryData"
             data-gallery='@json($gallery ?? [])'></div>

        <div id="galleryGrid" class="course-grid"></div>
        <div id="pagination" style="text-align:center; margin-top:20px;"></div>
    </div>
</section>

<!-- ================= LIGHTBOX ================= -->
<div id="lightbox" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.8); justify-content:center; align-items:center;">
    <img id="lightboxImg" style="max-width:80%; max-height:80%;">
</div>

<!-- ================= VIDEO ================= -->
<div id="videoModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.8); justify-content:center; align-items:center;">
    <iframe id="videoFrame" width="80%" height="400"></iframe>
</div>

<!-- ================= JS ================= -->
<script>

let rawData = document.getElementById("galleryData").dataset.gallery;
let parsedData = rawData ? JSON.parse(rawData) : [];

let allData = parsedData.length ? parsedData : [
    {
        title: "Workshop Training",
        category: "workshop",
        image: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f",
        type: "image",
        date: "2025-01-10"
    },
    {
        title: "Community Event",
        category: "event",
        image: "https://images.unsplash.com/photo-1509062522246-3755977927d7",
        type: "image",
        date: "2025-02-15"
    },
    {
        title: "Awareness Video",
        category: "health",
        video: "https://www.youtube.com/embed/tgbNymZ7vqY",
        type: "video",
        date: "2025-03-20"
    }
];

let currentPage = 1;
let perPage = 6;


// ================= DISPLAY =================
function displayData(data){

    let grid = document.getElementById("galleryGrid");
    grid.innerHTML = "";

    let start = (currentPage-1)*perPage;
    let end = start + perPage;

    let pageData = data.slice(start, end);

    pageData.forEach(item => {

        let content = "";

        if(item.type === "image"){
            content = `<img src="${item.image}" style="width:100%; height:180px; object-fit:cover;" onclick="openImage('${item.image}')">`;
        }

        if(item.type === "video"){
            content = `<img src="https://img.youtube.com/vi/${getYouTubeId(item.video)}/0.jpg"
                        style="width:100%; height:180px; object-fit:cover;"
                        onclick="openVideo('${item.video}')">`;
        }

        grid.innerHTML += `
            <div class="course-card">
                ${content}
                <h4>${item.title}</h4>
                <p>${item.category}</p>
                <small>${formatDate(item.date)}</small>
            </div>
        `;
    });

    pagination(data.length);
}


// ================= FILTER =================
function filterGallery(type){

    currentPage = 1;

    let filtered = (type === "all") ? allData :
        allData.filter(i => i.category === type);

    displayData(filtered);
}


// ================= PAGINATION =================
function pagination(total){

    let pages = Math.ceil(total/perPage);

    document.getElementById("pagination").innerHTML =
        `<button onclick="prev()">Prev</button>
         Page ${currentPage} / ${pages}
         <button onclick="next(${pages})">Next</button>`;
}

function next(p){
    if(currentPage < p){
        currentPage++;
        displayData(allData);
    }
}

function prev(){
    if(currentPage > 1){
        currentPage--;
        displayData(allData);
    }
}


// ================= LIGHTBOX =================
function openImage(src){
    document.getElementById("lightbox").style.display = "flex";
    document.getElementById("lightboxImg").src = src;
}

document.getElementById("lightbox").onclick = function(){
    this.style.display = "none";
};


// ================= VIDEO =================
function openVideo(link){
    document.getElementById("videoModal").style.display = "flex";
    document.getElementById("videoFrame").src = link;
}

document.getElementById("videoModal").onclick = function(){
    this.style.display = "none";
};


// ================= HELPERS =================
function formatDate(date){
    return new Date(date).toDateString();
}

function getYouTubeId(url){
    return url.split("embed/")[1];
}


// ================= INIT =================
displayData(allData);

</script>

@endsection