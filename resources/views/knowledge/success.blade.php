@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Success Stories</h1>
        <p>Real journeys of empowerment and transformation</p>
    </div>
</section>


<!-- ================= COUNTERS ================= -->
<section class="content-section">
    <div class="container">

        <h2 class="section-title">Our Impact</h2>

        <div style="display:flex; justify-content:center; gap:40px; flex-wrap:wrap; text-align:center;">

            <div>
                <h2 id="count1">0</h2>
                <p>Women Empowered</p>
            </div>

            <div>
                <h2 id="count2">0</h2>
                <p>Businesses Started</p>
            </div>

            <div>
                <h2 id="count3">0</h2>
                <p>Courses Completed</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= SEARCH ================= -->
<section class="content-section">
    <div class="container">
        <input type="text" id="searchStory" placeholder="Search success stories..."
               style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc;">
    </div>
</section>


<!-- ================= FILTER ================= -->
<div style="text-align:center; margin:20px;">
    <button onclick="filterStories('all')">All</button>
    <button onclick="filterStories('education')">Education</button>
    <button onclick="filterStories('business')">Business</button>
    <button onclick="filterStories('health')">Health</button>
</div>


<!-- ================= STORIES GRID ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Inspiring Stories</h2>

        <div id="storyContainer" class="course-grid"></div>

    </div>
</section>


<!-- ================= VIDEO MODAL ================= -->
<div id="videoModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8);">
    <div style="width:80%; margin:50px auto; background:white; padding:20px; border-radius:10px;">
        <iframe id="videoFrame" width="100%" height="400"></iframe>
        <br><br>
        <button onclick="closeVideo()" style="background:red; color:white; padding:8px;">Close</button>
    </div>
</div>


<!-- ================= STORY MODAL ================= -->
<div id="storyModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8);">
    <div style="width:70%; margin:80px auto; background:white; padding:20px; border-radius:10px;">
        <h2 id="modalTitle"></h2>
        <p id="modalDesc"></p>
        <button onclick="closeStory()" style="background:#6a11cb; color:white; padding:8px;">Close</button>
    </div>
</div>


<!-- ================= JAVASCRIPT ================= -->
<script>

// DATA
let allStories = [
    {
        title: "Kavita’s Journey",
        category: "business",
        desc: "Started her own tailoring business and became financially independent.",
        img: "https://images.unsplash.com/photo-1595152772835-219674b2a8a6",
    },
    {
        title: "Anita’s Education Success",
        category: "education",
        desc: "Completed digital literacy and now works in IT sector.",
        img: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f",
    },
    {
        title: "Health Awareness Impact",
        category: "health",
        desc: "Improved community health through awareness programs.",
        img: "https://images.unsplash.com/photo-1584515933487-779824d29309",
    }
];


// 📄 DISPLAY
function displayStories(data){

    let container = document.getElementById("storyContainer");
    container.innerHTML = "";

    data.forEach(story => {

        container.innerHTML += `
            <div class="course-card" style="transition:0.3s; cursor:pointer;">

                <img src="${story.img}" style="width:100%; height:160px; object-fit:cover; border-radius:8px;">

                <h3>${story.title}</h3>
                <p>${story.desc.substring(0,60)}...</p>

                <button onclick="openStory('${story.title}','${story.desc}')" 
                        style="background:#6a11cb; color:white; padding:6px;">
                    Read More
                </button>

                <button onclick="openVideo()" 
                        style="background:#8e44ad; color:white; padding:6px;">
                    Watch
                </button>

                <!-- Timeline -->
                <div style="margin-top:10px; font-size:12px;">
                    <p><b>Before:</b> Struggling</p>
                    <p><b>After:</b> Successful</p>
                </div>

            </div>
        `;
    });
}


// 🔍 SEARCH
document.getElementById("searchStory").addEventListener("keyup", function(){
    let value = this.value.toLowerCase();

    let filtered = allStories.filter(s =>
        s.title.toLowerCase().includes(value)
    );

    displayStories(filtered);
});


// 🎯 FILTER
function filterStories(type){
    let filtered = (type === "all") ? allStories :
        allStories.filter(story => story.category === type);

    displayStories(filtered);
}


// 📄 STORY MODAL
function openStory(title, desc){
    document.getElementById("storyModal").style.display = "block";
    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDesc").innerText = desc;
}

function closeStory(){
    document.getElementById("storyModal").style.display = "none";
}


// 🎥 VIDEO
function openVideo(){
    document.getElementById("videoModal").style.display = "block";
    document.getElementById("videoFrame").src = "https://www.youtube.com/embed/tgbNymZ7vqY";
}

function closeVideo(){
    document.getElementById("videoModal").style.display = "none";
    document.getElementById("videoFrame").src = "";
}


// 📊 COUNTER
function animateCounter(id, target){
    let count = 0;
    let interval = setInterval(() => {
        count += Math.ceil(target / 50);
        if(count >= target){
            count = target;
            clearInterval(interval);
        }
        document.getElementById(id).innerText = count;
    }, 40);
}


// 🚀 INIT
displayStories(allStories);

animateCounter("count1", 500);
animateCounter("count2", 120);
animateCounter("count3", 800);

</script>

@endsection