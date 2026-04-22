@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Dashboard</h1>
        <p>Analytics & Insights Overview</p>
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
                <p>Courses Available</p>
            </div>

            <div class="course-card">
                <h2 id="downloads">0</h2>
                <p>Toolkit Downloads</p>
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

        <canvas id="myChart" height="100"></canvas>

    </div>
</section>


<!-- ================= RECENT ACTIVITY ================= -->
<section class="updates-section">
    <div class="container">

        <h2 class="section-title">Recent Activities</h2>

        <div class="update-grid">

            <div class="update-card">
                <h4>New User Registered</h4>
                <p>User joined learning platform</p>
            </div>

            <div class="update-card">
                <h4>Course Completed</h4>
                <p>AI course successfully completed</p>
            </div>

            <div class="update-card">
                <h4>Toolkit Downloaded</h4>
                <p>Business toolkit downloaded</p>
            </div>

        </div>

    </div>
</section>


<!-- ================= QUICK ACTIONS ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Quick Actions</h2>

        <div class="course-grid">

            <div class="course-card">
                <button onclick="alert('Add Course')" style="padding:10px;">Add Course</button>
            </div>

            <div class="course-card">
                <button onclick="alert('Upload Toolkit')" style="padding:10px;">Upload Toolkit</button>
            </div>

            <div class="course-card">
                <button onclick="alert('Add Story')" style="padding:10px;">Add Story</button>
            </div>

        </div>

    </div>
</section>


<!-- ================= CHART JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

// ⏰ LIVE TIME
function updateTime(){
    let now = new Date();
    document.getElementById("liveTime").innerText = now.toLocaleString();
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
    }, 40);
}

animate("users", 1200);
animate("courses", 85);
animate("downloads", 340);
animate("stories", 60);


// 📈 CHART
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Users Growth',
            data: [100, 300, 500, 700, 900, 1200],
            borderWidth: 2,
            fill: false
        }]
    },
    options: {
        responsive: true
    }
});

</script>

@endsection