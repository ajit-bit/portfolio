// Smooth scrolling for anchor links
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("a.nav-link");

    links.forEach((link) => {
        link.addEventListener("click", function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                const hash = this.hash;
                document.querySelector(hash).scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                });
            }
        });
    });
});

// Additional animations on scroll
window.addEventListener("scroll", function () {
    const elements = document.querySelectorAll(".card");

    elements.forEach((el) => {
        const position = el.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (position < windowHeight - 50) {
            el.classList.add("fade-in");
        }
    });
});
