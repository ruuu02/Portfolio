document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll("nav ul li a");
    const sections = document.querySelectorAll("section");

    function updateActiveLink() {
        let current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;

            if (window.scrollY >= sectionTop - 60 && window.scrollY < sectionTop + sectionHeight) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");

            if (link.getAttribute("href").substring(1) === current) {
                link.classList.add("active");
            }
        });
    }

    function updateScrollFade() {
        document.querySelectorAll(".scroll-fade").forEach((element) => {
            const rect = element.getBoundingClientRect();

            if (rect.top <= window.innerHeight - 100 && rect.bottom >= 0) {
                element.classList.add("visible");
            } else {
                element.classList.remove("visible");
            }
        });
    }

    window.addEventListener("scroll", updateActiveLink);
    window.addEventListener("scroll", updateScrollFade);

    updateActiveLink();
    updateScrollFade();
});
