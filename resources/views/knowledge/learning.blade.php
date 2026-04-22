@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Learning Platform</h1>
        <p>Upgrade your skills with real-time courses</p>
    </div>
</section>

<!-- ================= LOGIN ================= -->
<section class="content-section">
    <div class="container" style="text-align:center;">
        <button onclick="loginUser()" style="padding:10px 20px; background:#6a11cb; color:white; border:none; border-radius:6px;">
            Login (Demo)
        </button>
        <p id="userStatus"></p>
    </div>
</section>

<!-- ================= SEARCH ================= -->
<section class="content-section">
    <div class="container">
        <h2 class="section-title">Search Courses</h2>
        <input type="text" id="searchCourse" placeholder="Search courses..."
               style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc;">
    </div>
</section>

<!-- ================= FILTER ================= -->
<div style="text-align:center; margin:20px;">
    <button onclick="filterCategory('all')">All</button>
    <button onclick="filterCategory('ai')">AI</button>
    <button onclick="filterCategory('business')">Business</button>
    <button onclick="filterCategory('health')">Health</button>
</div>

<!-- ================= COURSE GRID ================= -->
<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Available Courses</h2>
        <div id="courseContainer" class="course-grid"></div>
    </div>
</section>

<!-- ================= VIDEO MODAL ================= -->
<div id="videoModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8);">
    <div style="width:80%; margin:50px auto; background:white; padding:20px;">
        <iframe id="videoFrame" width="100%" height="400"></iframe>
        <button onclick="closeVideo()">Close</button>
    </div>
</div>

<!-- ================= JAVASCRIPT ================= -->
<script>

let allCourses = [];
let currentPage = 1;
let itemsPerPage = 6;


// 🔐 LOGIN
function loginUser(){
    localStorage.setItem("user", "Pooja");
    document.getElementById("userStatus").innerText = "Logged in as Pooja";
}


// 🔍 SEARCH
document.getElementById("searchCourse").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();

    let filtered = allCourses.filter(item =>
        item.title.toLowerCase().includes(value)
    );

    displayCourses(filtered);
});


// 🎯 FILTER
function filterCategory(type){
    let filtered = (type === "all") ? allCourses :
        allCourses.filter(item => item.title.toLowerCase().includes(type));

    displayCourses(filtered);
}


// 📚 LOAD COURSES
async function loadCourses(){

    try{
        let res = await fetch("https://www.googleapis.com/books/v1/volumes?q=online+course");
        let data = await res.json();

        if(!data.items){
            throw "No data";
        }

        allCourses = data.items.map(item => ({
            title: item.volumeInfo.title || "Course",
            authors: item.volumeInfo.authors?.join(", ") || "Unknown",
            img: item.volumeInfo.imageLinks?.thumbnail || "https://via.placeholder.com/150",
            link: item.volumeInfo.previewLink || "#"
        }));

    }catch(e){

        // ✅ FALLBACK COURSES (IMPORTANT)
        allCourses = [
            {title:"AI Basics", authors:"Expert", img:"https://via.placeholder.com/150", link:"#"},
            {title:"Business Strategy", authors:"Mentor", img:"https://via.placeholder.com/150", link:"#"},
            {title:"Health & Fitness", authors:"Coach", img:"https://via.placeholder.com/150", link:"#"},
            {title:"Data Science", authors:"Trainer", img:"https://via.placeholder.com/150", link:"#"},
            {title:"Leadership Skills", authors:"Guide", img:"https://via.placeholder.com/150", link:"#"}
        ];
    }

    displayCourses(allCourses);
}


// 📄 DISPLAY COURSES
function displayCourses(data){

    let container = document.getElementById("courseContainer");
    container.innerHTML = "";

    // ✅ ALWAYS SHOW MIN 5 CARDS
    if(data.length < 5){
        data = data.concat(allCourses.slice(0, 5 - data.length));
    }

    let start = (currentPage - 1) * itemsPerPage;
    let paginated = data.slice(start, start + itemsPerPage);

    paginated.forEach((item) => {

        let progress = localStorage.getItem(item.title) || 0;

        container.innerHTML += `
            <div class="course-card">

                <img src="${item.img}" style="width:100%; height:150px; object-fit:cover;">

                <h4>${item.title}</h4>
                <p>${item.authors}</p>

                <!-- Progress -->
                <div style="background:#eee; height:8px;">
                    <div style="width:${progress}%; height:8px; background:#6a11cb;"></div>
                </div>
                <small>${progress}% Completed</small>

                <br><br>

                <button onclick="openVideo()" style="background:#8e44ad; color:white; padding:6px;">
                    Watch Video
                </button>

                <button onclick="updateProgress('${item.title}')" style="background:#27ae60; color:white; padding:6px;">
                    Mark Progress
                </button>

                <button onclick="downloadCertificate('${item.title}')" style="background:#e67e22; color:white; padding:6px;">
                    Certificate
                </button>

                <br><br>

                <a href="${item.link}" target="_blank">Start Learning</a>

            </div>
        `;
    });

    updatePagination(data.length);
}


// 🎥 VIDEO
function openVideo(){
    document.getElementById("videoModal").style.display = "block";
    document.getElementById("videoFrame").src = "https://www.youtube.com/embed/tgbNymZ7vqY";
}

function closeVideo(){
    document.getElementById("videoModal").style.display = "none";
}


// 📊 PROGRESS
function updateProgress(title){
    let progress = Math.floor(Math.random() * 100);
    localStorage.setItem(title, progress);
    alert("Progress Updated!");
    displayCourses(allCourses);
}


// 🎓 CERTIFICATE
function downloadCertificate(title){
    let content = "Certificate of Completion\n\nCourse: " + title;
    let blob = new Blob([content], { type: "text/plain" });
    let link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = title + "_certificate.txt";
    link.click();
}


// 🔁 PAGINATION
function updatePagination(totalItems){

    let totalPages = Math.ceil(totalItems / itemsPerPage);

    let html = `
        <div style="text-align:center; margin-top:20px;">
            <button onclick="prevPage()">Prev</button>
            Page ${currentPage} / ${totalPages}
            <button onclick="nextPage(${totalPages})">Next</button>
        </div>
    `;

    document.getElementById("courseContainer").innerHTML += html;
}

function nextPage(totalPages){
    if(currentPage < totalPages){
        currentPage++;
        displayCourses(allCourses);
    }
}

function prevPage(){
    if(currentPage > 1){
        currentPage--;
        displayCourses(allCourses);
    }
}


// 🚀 INIT
loadCourses();

</script>

@endsection