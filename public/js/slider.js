/* ================= HERO SLIDER ================= */

document.addEventListener("DOMContentLoaded", function () {

const slides = document.querySelectorAll(".banner-slide");
const nextBtn = document.querySelector(".slider-next");
const prevBtn = document.querySelector(".slider-prev");

let currentSlide = 0;
let autoSlide;

/* -------- SHOW SLIDE -------- */

function showSlide(index){

slides.forEach((slide)=>{
slide.style.display="none";
});

slides[index].style.display="block";

}

/* -------- NEXT SLIDE -------- */

function nextSlide(){

currentSlide++;

if(currentSlide >= slides.length){
currentSlide = 0;
}

showSlide(currentSlide);

}

/* -------- PREVIOUS SLIDE -------- */

function prevSlide(){

currentSlide--;

if(currentSlide < 0){
currentSlide = slides.length-1;
}

showSlide(currentSlide);

}

/* -------- AUTO SLIDER -------- */

function startAutoSlide(){

autoSlide = setInterval(()=>{
nextSlide();
},4000);

}

function stopAutoSlide(){
clearInterval(autoSlide);
}

/* -------- BUTTON EVENTS -------- */

if(nextBtn){
nextBtn.addEventListener("click",()=>{
nextSlide();
});
}

if(prevBtn){
prevBtn.addEventListener("click",()=>{
prevSlide();
});
}

/* -------- TOUCH SWIPE MOBILE -------- */

let touchStartX = 0;
let touchEndX = 0;

const slider = document.querySelector(".banner");

if(slider){

slider.addEventListener("touchstart", e=>{
touchStartX = e.changedTouches[0].screenX;
});

slider.addEventListener("touchend", e=>{
touchEndX = e.changedTouches[0].screenX;
handleSwipe();
});

}

function handleSwipe(){

if(touchEndX < touchStartX - 50){
nextSlide();
}

if(touchEndX > touchStartX + 50){
prevSlide();
}

}

/* -------- PAUSE ON HOVER (DESKTOP) -------- */

const banner = document.querySelector(".banner");

if(banner){

banner.addEventListener("mouseenter", stopAutoSlide);

banner.addEventListener("mouseleave", startAutoSlide);

}

/* -------- INITIALIZE -------- */

if(slides.length > 0){
showSlide(currentSlide);
startAutoSlide();
}

});