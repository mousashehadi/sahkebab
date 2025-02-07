// 📌 Mobile Menu Toggle
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector("nav ul");

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", function () {
            navMenu.classList.toggle("show");
        });

        document.querySelectorAll("nav ul li a").forEach(link => {
            link.addEventListener("click", function () {
                navMenu.classList.remove("show");
            });
        });
    }
});
