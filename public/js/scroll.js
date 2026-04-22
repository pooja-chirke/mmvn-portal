/* ================= STICKY NAVBAR ================= */

window.addEventListener("scroll", function () {

const navbar = document.querySelector(".navbar");

if (!navbar) return;

if (window.scrollY > 80) {

navbar.classList.add("sticky-navbar");

} else {

navbar.classList.remove("sticky-navbar");

}

});



/* ================= SCROLL TO TOP BUTTON ================= */

const scrollBtn = document.createElement("button");

scrollBtn.innerHTML = "↑";
scrollBtn.id = "scrollTopBtn";

document.body.appendChild(scrollBtn);

scrollBtn.style.position = "fixed";
scrollBtn.style.bottom = "30px";
scrollBtn.style.right = "30px";
scrollBtn.style.padding = "10px 14px";
scrollBtn.style.fontSize = "18px";
scrollBtn.style.border = "none";
scrollBtn.style.borderRadius = "6px";
scrollBtn.style.background = "#6a3fb5";
scrollBtn.style.color = "white";
scrollBtn.style.cursor = "pointer";
scrollBtn.style.display = "none";
scrollBtn.style.zIndex = "999";


window.addEventListener("scroll", function () {

if (window.scrollY > 400) {

scrollBtn.style.display = "block";

} else {

scrollBtn.style.display = "none";

}

});


scrollBtn.addEventListener("click", function () {

window.scrollTo({
top: 0,
behavior: "smooth"
});

});



/* ================= SMOOTH PAGE SCROLL ================= */

document.querySelectorAll("a[href^='#']").forEach(anchor => {

anchor.addEventListener("click", function (e) {

const target = document.querySelector(this.getAttribute("href"));

if (!target) return;

e.preventDefault();

target.scrollIntoView({
behavior: "smooth",
block: "start"
});

});

});



/* ================= SCROLL ANIMATION FOR CARDS ================= */

const animatedItems = document.querySelectorAll(
".news-card, .testimonial-card, .video-card"
);

function revealOnScroll() {

const windowHeight = window.innerHeight;

animatedItems.forEach(item => {

const itemTop = item.getBoundingClientRect().top;

if (itemTop < windowHeight - 100) {

item.style.opacity = "1";
item.style.transform = "translateY(0px)";
item.style.transition = "all 0.6s ease";

}

});

}

animatedItems.forEach(item => {

item.style.opacity = "0";
item.style.transform = "translateY(50px)";

});

window.addEventListener("scroll", revealOnScroll);



/* ================= ACTIVE NAV LINK ON SCROLL ================= */

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-menu a");

window.addEventListener("scroll", () => {

let current = "";

sections.forEach(section => {

const sectionTop = section.offsetTop - 100;

if (pageYOffset >= sectionTop) {

current = section.getAttribute("id");

}

});

navLinks.forEach(link => {

link.classList.remove("active");

if (link.getAttribute("href") === "#" + current) {

link.classList.add("active");

}

});

});