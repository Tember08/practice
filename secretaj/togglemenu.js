document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const headerMenu = document.querySelector(".header-menu");

    if (hamburger) {
        hamburger.addEventListener("click", () => {
            headerMenu.classList.toggle("active");
        });
    }
});
