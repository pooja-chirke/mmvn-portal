@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<style>
.video-overlay {
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.9);
    justify-content:center;
    align-items:center;
    z-index:999;
}
.video-overlay iframe{
    width:80%;
    height:420px;
    border-radius:10px;
}
.course-card{ transition:0.3s; }
.course-card:hover{ transform:translateY(-5px); }
.live-badge{ color:red; font-weight:bold; }
.category-tag{ color:#6a11cb; font-size:13px; font-weight:600; }
</style>

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Video Gallery</h1>
        <p>Women Empowerment, Education & NGO Activities</p>
    </div>
</section>

<div id="videoData" data-video='@json($videos ?? [])'></div>

<section class="courses-section">
    <div class="container">
        <div id="videoGrid" class="course-grid"></div>
    </div>
</section>

<!-- ================= MODAL ================= -->
<div id="videoModal" class="video-overlay">
    <iframe id="videoFrame" allowfullscreen></iframe>
</div>

<script>

// ================= FETCH DATA =================
let raw = document.getElementById("videoData").dataset.video;
let videos = raw ? JSON.parse(raw) : [];

// ================= NGO DEMO VIDEOS =================
let demoVideos = [
    {
        title: "Women Empowerment Workshop",
        category: "Empowerment",
        url: "https://www.youtube.com/embed/Z5lB_7b8K7E",
        description: "Skill development and self-reliance training for women",
        is_live: false,
        created_at: new Date()
    },
    {
        title: "Mahila Self Defense Training",
        category: "Safety Training",
        url: "https://www.youtube.com/embed/3Y7Fz5Q7q9M",
        description: "Self-defense awareness and training session for women",
        is_live: true,
        created_at: new Date()
    },
    {
        title: "Girls Education Awareness Program",
        category: "Education",
        url: "https://www.youtube.com/embed/1i0zH7d7z2g",
        description: "Promoting education among girls in rural areas",
        is_live: false,
        created_at: new Date()
    },
    {
        title: "Women Sports Activity Event",
        category: "Sports",
        url: "https://www.youtube.com/embed/9No-FiEInLA",
        description: "Encouraging women participation in sports activities",
        is_live: false,
        created_at: new Date()
    },
    {
        title: "NGO Health Awareness Camp",
        category: "Health",
        url: "https://www.youtube.com/embed/7X8II6J-6mU",
        description: "Health checkup and awareness drive for women",
        is_live: false,
        created_at: new Date()
    }
];

// 👉 If no DB videos → use demo
if(videos.length === 0){
    videos = demoVideos;
}

// ================= DISPLAY =================
function display(){

    let grid = document.getElementById("videoGrid");
    grid.innerHTML = "";

    videos.forEach(v => {

        let thumb = getThumb(v.url);

        let liveTag = v.is_live
            ? `<span class="live-badge">🔴 LIVE</span>`
            : "";

        grid.innerHTML += `
            <div class="course-card">

                <img src="${thumb}" 
                     onclick="playVideo('${v.url}')"
                     style="width:100%; height:180px; object-fit:cover; cursor:pointer;">

                <div style="padding:10px">

                    <h4>${v.title} ${liveTag}</h4>

                    <p class="category-tag">${v.category}</p>

                    <p>${v.description ?? ''}</p>

                    <small>${formatDate(v.created_at)}</small>

                </div>

            </div>
        `;
    });

    // 🔥 IMPORTANT: Re-apply translation
    applyTranslationFix();
}
// ================= PLAY =================
function playVideo(url){
    document.getElementById("videoModal").style.display = "flex";
    document.getElementById("videoFrame").src = url + "?autoplay=1";
}

// ================= CLOSE =================
document.getElementById("videoModal").onclick = function(){
    this.style.display = "none";
    document.getElementById("videoFrame").src = "";
};

// ================= THUMB =================
function getThumb(url){
    if(!url.includes("embed/")) return "";
    let id = url.split("embed/")[1];
    return "https://img.youtube.com/vi/" + id + "/0.jpg";
}

// ================= DATE =================
function formatDate(date){
    return new Date(date).toDateString();
}

// INIT

display();

// 🔁 Re-run translator after load
setTimeout(applyTranslationFix, 1500);
</script>

@endsection