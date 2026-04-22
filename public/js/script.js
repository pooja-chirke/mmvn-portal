/* ================= MOBILE NAVBAR ================= */

const menuBtn = document.querySelector(".menu-toggle");
const navMenu = document.querySelector(".nav-menu");

if(menuBtn){
menuBtn.addEventListener("click", () => {

navMenu.classList.toggle("active");

});
}



/* ================= HERO BANNER SLIDER ================= */

let slideIndex = 0;
const slides = document.querySelectorAll(".banner-slide");

function showSlides(){

slides.forEach(slide=>{
slide.style.display="none";
});

slideIndex++;

if(slideIndex > slides.length){
slideIndex = 1;
}

if(slides.length > 0){
slides[slideIndex-1].style.display="block";
}

setTimeout(showSlides,4000);

}

showSlides();



/* ================= STATISTICS COUNTER ================= */

const counters = document.querySelectorAll(".stat-number");

const speed = 200;

counters.forEach(counter => {

const updateCount = () => {

const target = +counter.getAttribute("data-target");
const count = +counter.innerText;

const increment = target / speed;

if(count < target){

counter.innerText = Math.ceil(count + increment);

setTimeout(updateCount,20);

}
else{

counter.innerText = target;

}

};

updateCount();

});



/* ================= NEWS CARD HOVER ================= */

const newsCards = document.querySelectorAll(".news-card");

newsCards.forEach(card => {

card.addEventListener("mouseenter", () => {

card.style.transform="scale(1.05)";
card.style.transition="0.3s";

});

card.addEventListener("mouseleave", () => {

card.style.transform="scale(1)";

});

});



/* ================= SMOOTH SCROLL ================= */

document.querySelectorAll("a[href^='#']").forEach(anchor => {

anchor.addEventListener("click", function(e){

e.preventDefault();

document.querySelector(this.getAttribute("href")).scrollIntoView({

behavior:"smooth"

});

});

});



/* ================= SIDEBAR BUTTON ACTIVE ================= */

const sidebarButtons = document.querySelectorAll(".sidebar button");

sidebarButtons.forEach(btn => {

btn.addEventListener("click", () => {

sidebarButtons.forEach(b=>b.classList.remove("active"));

btn.classList.add("active");

});

});



/* ================= VIDEO PLAY CONTROL ================= */

const videos = document.querySelectorAll("video");

videos.forEach(video => {

video.addEventListener("click", ()=>{

if(video.paused){
video.play();
}
else{
video.pause();
}

});

});



/* ================= SCROLL HEADER EFFECT ================= */

window.addEventListener("scroll", ()=>{

const header = document.querySelector(".navbar");

if(window.scrollY > 50){

header.classList.add("sticky");

}
else{

header.classList.remove("sticky");

}

});