/* ================= STATISTICS COUNTER ================= */

document.addEventListener("DOMContentLoaded", function () {

const counters = document.querySelectorAll(".stat-number");
let counterStarted = false;

/* -------- COUNTER FUNCTION -------- */

function runCounters() {

counters.forEach(counter => {

const target = +counter.getAttribute("data-target");
let count = 0;

const speed = target / 150;

function updateCounter() {

count += speed;

if (count < target) {

counter.innerText = Math.floor(count).toLocaleString();
requestAnimationFrame(updateCounter);

} else {

counter.innerText = target.toLocaleString();

}

}

updateCounter();

});

}


/* -------- START COUNTER ON SCROLL -------- */

function handleScroll() {

const statsSection = document.querySelector(".stats");

if (!statsSection) return;

const sectionTop = statsSection.getBoundingClientRect().top;
const screenHeight = window.innerHeight;

if (sectionTop < screenHeight - 100 && !counterStarted) {

runCounters();
counterStarted = true;

}

}

window.addEventListener("scroll", handleScroll);

});