const hamburger = document.querySelector(".hamburger")
const mobileMenu = document.querySelector(".mobile-menu");
const deskMenu = document.getElementById("fascia-menu")

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    mobileMenu.classList.toggle("wide");
})
