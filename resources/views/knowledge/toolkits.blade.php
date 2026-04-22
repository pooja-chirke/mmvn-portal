@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/courses.css') }}">

<!-- ================= BANNER ================= -->
<section class="page-banner">
    <img src="{{ asset('images/banner/evidence-knowledge.jpg') }}" class="banner-img">
    <div class="banner-text">
        <h1>Toolkits</h1>
        <p>Download practical guides, templates & resources</p>
    </div>
</section>


<!-- ================= SEARCH ================= -->
<section class="content-section">
    <div class="container">
        <input type="text" id="searchToolkit" placeholder="Search toolkits..."
               style="width:100%; padding:12px; border-radius:8px; border:1px solid #ccc;">
    </div>
</section>


<!-- ================= FILTER ================= -->
<div style="text-align:center; margin:20px;">
    <button onclick="filterToolkit('all')">All</button>
    <button onclick="filterToolkit('business')">Business</button>
    <button onclick="filterToolkit('health')">Health</button>
    <button onclick="filterToolkit('digital')">Digital</button>
    <button onclick="filterToolkit('education')">Education</button>
</div>


<!-- ================= TOOLKIT GRID ================= -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Available Toolkits</h2>

        <div id="toolkitContainer" class="course-grid"></div>

    </div>
</section>


<!-- ================= PREVIEW MODAL ================= -->
<div id="previewModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8);">
    <div style="width:80%; margin:50px auto; background:white; padding:20px; border-radius:10px;">
        <iframe id="previewFrame" width="100%" height="400"></iframe>
        <br><br>
        <button onclick="closePreview()" style="background:red; color:white; padding:8px;">Close</button>
    </div>
</div>


<!-- ================= JAVASCRIPT ================= -->
<script>

// DATA (TOOLKITS)
let allToolkits = [
    {
        title: "Business Startup Guide",
        category: "business",
        desc: "Complete guide to starting a small business.",
        file: "https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf"
    },
    {
        title: "Digital Marketing Toolkit",
        category: "digital",
        desc: "Learn SEO, social media & online marketing.",
        file: "https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf"
    },
    {
        title: "Health Awareness Kit",
        category: "health",
        desc: "Guide for maintaining physical & mental health.",
        file: "https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf"
    },
    {
        title: "Education Resource Pack",
        category: "education",
        desc: "Learning materials for students & trainers.",
        file: "https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf"
    }
];


// 📄 DISPLAY TOOLKITS
function displayToolkits(data){

    let container = document.getElementById("toolkitContainer");
    container.innerHTML = "";

    data.forEach(toolkit => {

        container.innerHTML += `
            <div class="course-card">

                <h3>${toolkit.title}</h3>
                <p>${toolkit.desc}</p>

                <button onclick="previewFile('${toolkit.file}')" 
                        style="background:#6a11cb; color:white; padding:6px;">
                    Preview
                </button>

                <a href="${toolkit.file}" download 
                   style="background:#27ae60; color:white; padding:6px; margin-left:10px;">
                   Download
                </a>

            </div>
        `;
    });
}


// 🔍 SEARCH
document.getElementById("searchToolkit").addEventListener("keyup", function(){
    let value = this.value.toLowerCase();

    let filtered = allToolkits.filter(t =>
        t.title.toLowerCase().includes(value)
    );

    displayToolkits(filtered);
});


// 🎯 FILTER
function filterToolkit(type){

    let filtered = (type === "all") ? allToolkits :
        allToolkits.filter(t => t.category === type);

    displayToolkits(filtered);
}


// 📄 PREVIEW
function previewFile(link){
    document.getElementById("previewModal").style.display = "block";
    document.getElementById("previewFrame").src = link;
}

function closePreview(){
    document.getElementById("previewModal").style.display = "none";
    document.getElementById("previewFrame").src = "";
}


// 🚀 INIT
displayToolkits(allToolkits);

</script>

@endsection