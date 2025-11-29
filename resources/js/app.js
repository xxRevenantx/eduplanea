document.addEventListener("DOMContentLoaded", () => {
    const el = document.getElementById("hero-typewriter");
    if (!el) return;

    const phrases = JSON.parse(el.dataset.phrases || "[]");
    if (!phrases.length) return;

    let phraseIndex = 0;
    let charIndex = 0;
    let deleting = false;

    const TYPING_SPEED = 70; // ms por carácter
    const DELETING_SPEED = 40; // ms al borrar
    const PAUSE_END = 1500; // pausa cuando termina de escribir
    const PAUSE_START = 800; // pausa antes de empezar a borrar

    function type() {
        const current = phrases[phraseIndex];

        if (!deleting) {
            // Escribiendo
            el.textContent = current.slice(0, charIndex + 1);
            charIndex++;

            if (charIndex === current.length) {
                // Pausa al final del texto
                setTimeout(() => {
                    deleting = true;
                    type();
                }, PAUSE_END);
                return;
            }
        } else {
            // Borrando
            el.textContent = current.slice(0, charIndex - 1);
            charIndex--;

            if (charIndex === 0) {
                deleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;

                setTimeout(() => {
                    type();
                }, PAUSE_START);
                return;
            }
        }

        const delay = deleting ? DELETING_SPEED : TYPING_SPEED;
        setTimeout(type, delay);
    }

    type();
});

document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll("[data-banner-slide]");
    const dots = document.querySelectorAll("[data-banner-dot]");
    if (!slides.length || !dots.length) return;

    let current = 0;
    const TOTAL = slides.length;
    let intervalId = null;

    function setActiveDot(index) {
        dots.forEach((dot, i) => {
            dot.dataset.active = i === index ? "true" : "false";
        });
    }

    function goToSlide(nextIndex, manual = false) {
        if (nextIndex === current) return;

        const prevIndex = current;
        const direction =
            nextIndex > prevIndex ||
            (prevIndex === TOTAL - 1 && nextIndex === 0)
                ? 1
                : -1;

        const prevSlide = slides[prevIndex];
        const nextSlide = slides[nextIndex];

        // Reset clases para todos los slides
        slides.forEach((slide, i) => {
            slide.classList.remove(
                "opacity-100",
                "opacity-0",
                "translate-x-0",
                "translate-x-full",
                "-translate-x-full"
            );

            // Estado base: fuera de vista a la derecha
            if (i !== nextIndex && i !== prevIndex) {
                slide.classList.add("opacity-0", "translate-x-full");
            }
        });

        // Slide anterior sale
        prevSlide.classList.add("opacity-0");
        prevSlide.classList.add(
            direction === 1 ? "-translate-x-full" : "translate-x-full"
        );

        // Slide nuevo entra
        nextSlide.classList.add("opacity-100", "translate-x-0");

        current = nextIndex;
        setActiveDot(current);

        // Si fue clic manual, reinicia autoplay
        if (manual && intervalId) {
            clearInterval(intervalId);
            intervalId = setInterval(() => {
                const next = (current + 1) % TOTAL;
                goToSlide(next, false);
            }, 7000);
        }
    }

    // Eventos en los dots
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            goToSlide(index, true);
        });
    });

    // Estado inicial
    setActiveDot(0);

    // Autoplay con deslizamiento
    intervalId = setInterval(() => {
        const next = (current + 1) % TOTAL;
        goToSlide(next, false);
    }, 3000);
});


// MODAL DE REISTRO
document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("open-register-modal");
    const modal = document.getElementById("register-modal");

    if (!openBtn || !modal) return;

    const panel = modal.querySelector("[data-modal-panel]");
    const closeBtn = document.getElementById("close-register-modal");
    const backdrop = modal.querySelector("div.absolute.inset-0");

    function openModal() {
        modal.setAttribute("aria-hidden", "false");
        modal.classList.remove("opacity-0", "pointer-events-none");
        modal.classList.add("opacity-100", "pointer-events-auto");

        // Panel animación
        if (panel) {
            panel.classList.remove("opacity-0", "-translate-y-4", "scale-95");
            panel.classList.add("opacity-100", "translate-y-0", "scale-100");
        }

        document.addEventListener("keydown", handleEsc);
    }

    function closeModal() {
        modal.setAttribute("aria-hidden", "true");
        modal.classList.remove("opacity-100", "pointer-events-auto");
        modal.classList.add("opacity-0", "pointer-events-none");

        if (panel) {
            panel.classList.remove("opacity-100", "translate-y-0", "scale-100");
            panel.classList.add("opacity-0", "-translate-y-4", "scale-95");
        }

        document.removeEventListener("keydown", handleEsc);
    }

    function handleEsc(e) {
        if (e.key === "Escape") {
            closeModal();
        }
    }

    openBtn.addEventListener("click", (e) => {
        e.preventDefault();
        openModal();
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", () => closeModal());
    }

    if (backdrop) {
        backdrop.addEventListener("click", () => closeModal());
    }
});

// MODAL DE INICIAR SESIÓN
document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("open-login-modal");
    const modal = document.getElementById("login-modal");

    if (!openBtn || !modal) return;

    const panel = modal.querySelector("[data-modal-panel]");
    const closeBtn = document.getElementById("close-login-modal");
    const backdrop = modal.querySelector("div.absolute.inset-0");

    function openModal() {
        modal.setAttribute("aria-hidden", "false");
        modal.classList.remove("opacity-0", "pointer-events-none");
        modal.classList.add("opacity-100", "pointer-events-auto");

        // Panel animación
        if (panel) {
            panel.classList.remove("opacity-0", "-translate-y-4", "scale-95");
            panel.classList.add("opacity-100", "translate-y-0", "scale-100");
        }

        document.addEventListener("keydown", handleEsc);
    }

    function closeModal() {
        modal.setAttribute("aria-hidden", "true");
        modal.classList.remove("opacity-100", "pointer-events-auto");
        modal.classList.add("opacity-0", "pointer-events-none");

        if (panel) {
            panel.classList.remove("opacity-100", "translate-y-0", "scale-100");
            panel.classList.add("opacity-0", "-translate-y-4", "scale-95");
        }

        document.removeEventListener("keydown", handleEsc);
    }

    function handleEsc(e) {
        if (e.key === "Escape") {
            closeModal();
        }
    }

    openBtn.addEventListener("click", (e) => {
        e.preventDefault();
        openModal();
    });

    if (closeBtn) {
        closeBtn.addEventListener("click", () => closeModal());
    }

    if (backdrop) {
        backdrop.addEventListener("click", () => closeModal());
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll("[data-testimonial-slide]");
    const dots = document.querySelectorAll("[data-testimonial-dot]");

    if (!slides.length || !dots.length) return;

    let current = 0;
    const TOTAL = slides.length;
    let intervalId = null;

    function setActiveDot(index) {
        dots.forEach((dot, i) => {
            dot.dataset.active = i === index ? "true" : "false";
        });
    }

    function goToSlide(nextIndex, manual = false) {
        if (nextIndex === current) return;

        const prevIndex = current;
        const direction =
            nextIndex > prevIndex ||
            (prevIndex === TOTAL - 1 && nextIndex === 0)
                ? 1
                : -1;

        const prevSlide = slides[prevIndex];
        const nextSlide = slides[nextIndex];

        // Reset base de todos los slides
        slides.forEach((slide, i) => {
            slide.classList.remove(
                "opacity-100",
                "opacity-0",
                "translate-x-0",
                "translate-x-full",
                "-translate-x-full"
            );

            // Los que no son actual/anterior se van a la derecha y ocultos
            if (i !== nextIndex && i !== prevIndex) {
                slide.classList.add("opacity-0", "translate-x-full");
            }
        });

        // Slide anterior sale
        prevSlide.classList.add("opacity-0");
        prevSlide.classList.add(
            direction === 1 ? "-translate-x-full" : "translate-x-full"
        );

        // Slide nuevo entra
        nextSlide.classList.add("opacity-100", "translate-x-0");

        current = nextIndex;
        setActiveDot(current);

        // Si el cambio fue manual, reiniciar autoplay
        if (manual && intervalId) {
            clearInterval(intervalId);
            intervalId = setInterval(() => {
                const next = (current + 1) % TOTAL;
                goToSlide(next, false);
            }, 6000);
        }
    }

    // Eventos en los dots
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            goToSlide(index, true);
        });
    });

    // Estado inicial
    setActiveDot(0);

    // Autoplay
    intervalId = setInterval(() => {
        const next = (current + 1) % TOTAL;
        goToSlide(next, false);
    }, 5000);
});

document.addEventListener("DOMContentLoaded", () => {
    const backToTop = document.getElementById("back-to-top");
    if (!backToTop) return;

    function toggleBackToTop() {
        const scrollPosition = window.scrollY + window.innerHeight;
        const pageHeight = document.documentElement.scrollHeight;

        // Umbral para considerar "casi el final" (por ejemplo, últimos 200px)
        const nearBottom = scrollPosition >= pageHeight - 200;

        if (nearBottom) {
            backToTop.classList.remove(
                "opacity-0",
                "pointer-events-none",
                "translate-y-2"
            );
        } else {
            backToTop.classList.add(
                "opacity-0",
                "pointer-events-none",
                "translate-y-2"
            );
        }
    }

    // Estado inicial
    backToTop.classList.add("translate-y-2");
    toggleBackToTop();

    window.addEventListener("scroll", toggleBackToTop);

    backToTop.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const headerOffset = 80; // altura aprox del header fijo
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach((link) => {
        link.addEventListener("click", (e) => {
            const href = link.getAttribute("href");
            const id = href && href.startsWith("#") ? href.substring(1) : null;
            if (!id) return;

            const target = document.getElementById(id);
            if (!target) return;

            e.preventDefault();

            // Posición corregida por el header fijo
            const y =
                target.getBoundingClientRect().top +
                window.pageYOffset -
                headerOffset;

            window.scrollTo({
                top: y,
                behavior: "smooth",
            });

            // Esperar un poco a que termine (o casi) el scroll y aplicar highlight
            setTimeout(() => {
                target.classList.add("anchor-highlight");

                // Quitar el highlight después de la animación
                setTimeout(() => {
                    target.classList.remove("anchor-highlight");
                }, 2000); // un poco más que la duración total de la animación
            }, 400);
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll("[data-hero-image-slide]");
    const dots = document.querySelectorAll("[data-hero-image-dot]");

    if (!slides.length || !dots.length) return;

    let current = 0;
    const TOTAL = slides.length;
    let intervalId = null;

    function setActiveDot(index) {
        dots.forEach((dot, i) => {
            dot.dataset.active = i === index ? "true" : "false";
        });
    }

    function goToSlide(nextIndex, manual = false) {
        if (nextIndex === current) return;

        const prevIndex = current;
        const direction =
            nextIndex > prevIndex ||
            (prevIndex === TOTAL - 1 && nextIndex === 0)
                ? 1
                : -1;

        const prevSlide = slides[prevIndex];
        const nextSlide = slides[nextIndex];

        // Reset base
        slides.forEach((slide, i) => {
            slide.classList.remove(
                "opacity-100",
                "opacity-0",
                "translate-x-0",
                "translate-x-full",
                "-translate-x-full"
            );

            if (i !== nextIndex && i !== prevIndex) {
                slide.classList.add("opacity-0", "translate-x-full");
            }
        });

        // Slide anterior sale
        prevSlide.classList.add("opacity-0");
        prevSlide.classList.add(
            direction === 1 ? "-translate-x-full" : "translate-x-full"
        );

        // Slide nuevo entra
        nextSlide.classList.add("opacity-100", "translate-x-0");

        current = nextIndex;
        setActiveDot(current);

        // Reiniciar autoplay si el cambio fue manual
        if (manual && intervalId) {
            clearInterval(intervalId);
            intervalId = setInterval(() => {
                const next = (current + 1) % TOTAL;
                goToSlide(next, false);
            }, 4500);
        }
    }

    // Estado inicial
    slides.forEach((slide, i) => {
        if (i === 0) {
            slide.classList.add("opacity-100", "translate-x-0");
        } else {
            slide.classList.add("opacity-0", "translate-x-full");
        }
    });
    setActiveDot(0);

    // Click en dots
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            goToSlide(index, true);
        });
    });

    // Autoplay
    intervalId = setInterval(() => {
        const next = (current + 1) % TOTAL;
        goToSlide(next, false);
    }, 4500);
});
