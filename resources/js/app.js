require("./bootstrap");

///////////////////////////////////////////////////////////////////////////////////////////////////

// var swiper = new Swiper(".swiper-container", {
//     spaceBetween: 30,
//     centeredSlides: true,
//     autoplay: {
//         delay: 10000,
//         disableOnInteraction: false
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev"
//     }
// });

////////////////////////////////////////////////////////////////////////////////////////////////

const selectElement = element => document.querySelector(element);

selectElement(".menu-icons").addEventListener("click", () => {
    selectElement("nav").classList.toggle("active");
});
