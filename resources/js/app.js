require("./bootstrap");

const slides = document.querySelectorAll(".slide");
const next = document.querySelector("#next");
const prev = document.querySelector("#prev");
const auto = true;
const intervalTime = 10000;
let slideInterval;

const nextSlide = () => {
    const current = document.querySelector(".current");
    current.classList.remove("current");

    if (current.nextElementSibling) {
        current.nextElementSibling.classList.add("current");
    } else {
        slides[0].classList.add("current");
    }

    setTimeout(() => current.classList.remove("current"));
};

const prevSlide = () => {
    const current = document.querySelector(".current");
    current.classList.remove("current");

    if (current.previousElementSibling) {
        current.previousElementSibling.classList.add("current");
    } else {
        slides[slides.length - 1].classList.add("current");
    }

    setTimeout(() => current.classList.remove("current"));
};

next.addEventListener("click", e => {
    nextSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

prev.addEventListener("click", e => {
    prevSlide();
    if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
    }
});

// Auto Slide
if (auto) {
    slideInterval = setInterval(nextSlide, intervalTime);
}

///////////////////////////////////////////////////////////////////////////////////////////////////

var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 10000,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

const selectElement = element => document.querySelector(element);

selectElement(".menu-icons").addEventListener("click", () => {
    selectElement("nav").classList.toggle("active");
});
