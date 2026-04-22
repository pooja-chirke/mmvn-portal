@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">
<link rel="stylesheet" href="{{ asset('css/knowledge.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Dashboard</h1>
        <p>Real-Time Analytics & Knowledge Overview</p>
    </div>
</section>


<!-- ================= LIVE TIME ================= -->
<section class="content-section">
    <div class="container" style="text-align:center;">
        <h2 class="section-title">Live Dashboard</h2>
        <p id="liveTime" style="font-size:18px; color:#6a11cb;"></p>
    </div>
</section>


<!-- ================= STATS ================= -->
<section class="courses-section">
    <div class="container">

        <div class="course-grid">

            <div class="course-card">
                <h2 id="users">0</h2>
                <p>Total Users</p>
            </div>

            <div class="course-card">
                <h2 id="courses">0</h2>
                <p>Courses</p>
            </div>

            <div class="course-card">
                <h2 id="toolkits">0</h2>
                <p>Toolkits</p>
            </div>

            <div class="course-card">
                <h2 id="stories">0</h2>
                <p>Success Stories</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= CHART ================= -->
<section class="content-section">
    <div class="container">
        <h2 class="section-title">User Growth Analytics</h2>
        <canvas id="chart"></canvas>
    </div>
</section>


<!-- ================= QUICK LINKS ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Knowledge Pages</h2>

        <div class="course-grid">

            <div class="course-card"><a href="/blogs">Blogs</a></div>
            <div class="course-card"><a href="/ebooks">E-Books</a></div>
            <div class="course-card"><a href="/publications">Publications</a></div>
            <div class="course-card"><a href="/research">Research</a></div>
            <div class="course-card"><a href="/learning">Learning</a></div>
            <div class="course-card"><a href="/success-stories">Success</a></div>
            <div class="course-card"><a href="/toolkits">Toolkits</a></div>
            <div class="course-card"><a href="/experts">Experts</a></div>

        </div>

    </div>
</section>


<!-- ================= RECENT ACTIVITY ================= -->
<section class="updates-section">
    <div class="container">

        <h2 class="section-title">Recent Activities</h2>

        <div id="activityContainer" class="update-grid"></div>

    </div>
</section>


<!-- ================= JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

// ⏰ LIVE TIME
function updateTime(){
    document.getElementById("liveTime").innerText =
        new Date().toLocaleString();
}
setInterval(updateTime, 1000);


// 📊 COUNTER ANIMATION
function animate(id, target){
    let count = 0;
    let interval = setInterval(() => {
        count += Math.ceil(target/50);
        if(count >= target){
            count = target;
            clearInterval(interval);
        }
        document.getElementById(id).innerText = count;
    }, 30);
}

animate("users", 1200);
animate("courses", 85);
animate("toolkits", 40);
animate("stories", 60);


// 📈 CHART
new Chart(document.getElementById("chart"), {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun'],
        datasets: [{
            label: 'Users Growth',
            data: [100,300,500,700,900,1200],
            borderWidth: 2
        }]
    }
});


// 📋 RECENT ACTIVITIES (AUTO UPDATE)
let activities = [
    "New user registered",
    "Course completed",
    "Toolkit downloaded",
    "New blog added",
    "Research published"
];

function loadActivities(){
    let container = document.getElementById("activityContainer");
    container.innerHTML = "";

    activities.forEach(act => {
        container.innerHTML += `
            <div class="update-card">
                <p>${act}</p>
                <small>${new Date().toLocaleTimeString()}</small>
            </div>
        `;
    });
}

loadActivities();

setInterval(loadActivities, 5000); // auto refresh


</script>

@endsection