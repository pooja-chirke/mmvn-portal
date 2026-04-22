@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Our Experts</h1>
        <p>Meet our mentors, trainers & industry professionals</p>
    </div>
</section>

<!-- ================= SEARCH ================= -->
<section class="content-section">
    <div class="container">
        <input type="text" id="searchExpert" placeholder="Search experts..."
               style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc;">
    </div>
</section>

<!-- ================= FILTER ================= -->
<div style="text-align:center; margin:20px;">
    <button onclick="filterExperts('all')">All</button>
    <button onclick="filterExperts('technology')">Technology</button>
    <button onclick="filterExperts('business')">Business</button>
    <button onclick="filterExperts('health')">Health</button>
</div>

<!-- ================= EXPERT GRID ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Meet Our Experts</h2>

        <div id="expertContainer" class="course-grid"></div>

    </div>
</section>

<!-- ================= PROFILE MODAL ================= -->
<div id="profileModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8);">
    <div style="width:60%; margin:80px auto; background:white; padding:20px; border-radius:10px;">
        <h2 id="expertName"></h2>
        <p id="expertRole"></p>
        <p id="expertDesc"></p>
        <button onclick="closeProfile()" style="background:#6a11cb; color:white; padding:8px;">Close</button>
    </div>
</div>

<!-- ================= JAVASCRIPT ================= -->
<script>

// ✅ UPDATED DATA (10 EXPERTS)
let allExperts = [

    {
        name: "Dr. Priya Sharma",
        category: "technology",
        role: "AI & Data Science Expert",
        desc: "10+ years experience in Machine Learning and AI research.",
        img: "https://randomuser.me/api/portraits/women/44.jpg"
    },
    {
        name: "Rahul Mehta",
        category: "business",
        role: "Startup Mentor",
        desc: "Guided 50+ startups to success.",
        img: "https://randomuser.me/api/portraits/men/32.jpg"
    },
    {
        name: "Dr. Anjali Verma",
        category: "health",
        role: "Healthcare Specialist",
        desc: "Expert in public health and wellness programs.",
        img: "https://randomuser.me/api/portraits/women/65.jpg"
    },

    // 🔥 NEW EXPERTS

    {
        name: "Amit Kulkarni",
        category: "technology",
        role: "Software Engineer",
        desc: "Specialist in full-stack web development.",
        img: "https://randomuser.me/api/portraits/men/45.jpg"
    },
    {
        name: "Neha Kapoor",
        category: "business",
        role: "Marketing Strategist",
        desc: "Expert in digital marketing and branding.",
        img: "https://randomuser.me/api/portraits/women/22.jpg"
    },
    {
        name: "Dr. Ritu Singh",
        category: "health",
        role: "Nutritionist",
        desc: "Focused on women's health and nutrition.",
        img: "https://randomuser.me/api/portraits/women/33.jpg"
    },
    {
        name: "Karan Shah",
        category: "business",
        role: "Financial Advisor",
        desc: "Helping startups manage finances and investments.",
        img: "https://randomuser.me/api/portraits/men/28.jpg"
    },
    {
        name: "Sneha Patil",
        category: "technology",
        role: "Cyber Security Expert",
        desc: "Expert in data protection and ethical hacking.",
        img: "https://randomuser.me/api/portraits/women/50.jpg"
    },
    {
        name: "Dr. Meena Joshi",
        category: "health",
        role: "Mental Health Counselor",
        desc: "Helping individuals manage stress and mental wellness.",
        img: "https://randomuser.me/api/portraits/women/70.jpg"
    },
    {
        name: "Arjun Desai",
        category: "technology",
        role: "Cloud Engineer",
        desc: "Specialist in AWS and cloud infrastructure.",
        img: "https://randomuser.me/api/portraits/men/60.jpg"
    }

];


// 📄 DISPLAY EXPERTS
function displayExperts(data){

    let container = document.getElementById("expertContainer");
    container.innerHTML = "";

    data.forEach(exp => {

        container.innerHTML += `
            <div class="course-card" style="text-align:center;">

                <img src="${exp.img}" style="width:100px; height:100px; border-radius:50%; object-fit:cover;">

                <h3>${exp.name}</h3>
                <p>${exp.role}</p>

                <button onclick="openProfile('${exp.name}','${exp.role}','${exp.desc}')" 
                        style="background:#6a11cb; color:white; padding:6px;">
                    View Profile
                </button>

                <div style="margin-top:10px;">
                    <span style="font-size:14px;">🌐 LinkedIn | 📧 Email</span>
                </div>

            </div>
        `;
    });
}


// 🔍 SEARCH
document.getElementById("searchExpert").addEventListener("keyup", function(){
    let value = this.value.toLowerCase();

    let filtered = allExperts.filter(e =>
        e.name.toLowerCase().includes(value)
    );

    displayExperts(filtered);
});


// 🎯 FILTER
function filterExperts(type){
    let filtered = (type === "all") ? allExperts :
        allExperts.filter(e => e.category === type);

    displayExperts(filtered);
}


// 👤 PROFILE MODAL
function openProfile(name, role, desc){
    document.getElementById("profileModal").style.display = "block";
    document.getElementById("expertName").innerText = name;
    document.getElementById("expertRole").innerText = role;
    document.getElementById("expertDesc").innerText = desc;
}

function closeProfile(){
    document.getElementById("profileModal").style.display = "none";
}


// 🚀 INIT
displayExperts(allExperts);

</script>

@endsection