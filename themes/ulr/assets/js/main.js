document.addEventListener("DOMContentLoaded", function () {
    function handleScrollAndResize() {
        const header = document.querySelector(".header");
        if (window.scrollY > 30) {
            header.classList.remove("header-transparent");
        } else {
            header.classList.add("header-transparent");
        }
    }
    window.addEventListener("scroll", handleScrollAndResize);
    window.addEventListener("resize", handleScrollAndResize);
    handleScrollAndResize();
    let swiper = new Swiper(".hero__slider", {
        loop: true,
        spaceBetween: 0,
        slidesPerView: 1,
        allowTouchMove: true,
        navigation: {
            nextEl: ".hero__slider-next",
            prevEl: ".hero__slider-prev",
        },
        autoplay: {
            delay: 412500,
        },
        pagination: {
            el: ".hero__slider-pagination",
            clickable: true
        }
    });
    let clauseSwiper = new Swiper(".clause__slider", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 1,
        allowTouchMove: true,
        navigation: {
            nextEl: ".clause__slider-next",
            prevEl: ".clause__slider-prev",
        },
        pagination: {
            el: ".clause__slider-pagination",
            clickable: true
        }
    });
    let teamSwiper = new Swiper(".team__slider", {
        loop: true,
        spaceBetween: 17,
        slidesPerView: "auto",
        allowTouchMove: true,
        navigation: {
            nextEl: ".team__slider-next",
            prevEl: ".team__slider-prev",
        },
        breakpoints: {
            768: {
                spaceBetween: 20,
            },
            999: {
                spaceBetween: 32,
            },
            1279: {
                spaceBetween: 62,
            },
        },
        pagination: {
            el: ".team__slider-pagination",
            clickable: true
        }
    });
    const swiperPartners = new Swiper('.partners__slider', {
        slidesPerView: "auto",
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: false,
        pagination: {
            el: ".partners__slider-pagination",
            clickable: true
        }
    });
    swiperPartners.on('slideChange', function () {
        if (window.innerWidth > 767) {
            if (swiperPartners.activeIndex >= 4) {
                swiperPartners.slideTo(3);
            }
        }
        if (window.innerWidth > 479 && window.innerWidth < 768) {
            console.log(swiperPartners.activeIndex)
            if (swiperPartners.activeIndex >= 6) {
                swiperPartners.slideTo(5);
            }
        }
        if (window.innerWidth < 480) {
            if (swiperPartners.activeIndex >= 5) {
                swiperPartners.slideTo(4);
            }
        }
    });
    document.querySelectorAll(".faq__item h3").forEach((item) => {
        item.addEventListener("click", function () {
            const faqItem = this.parentElement;
            if (faqItem.classList.contains("active")) {
                faqItem.classList.remove("active");
            } else {
                document.querySelectorAll(".faq__item").forEach((el) => el.classList.remove("active"));
                faqItem.classList.add("active");
            }
        });
    });
    const parallaxBg = document.querySelector(".goals__bg");
    const speedX = 0.1; // Скорость для горизонтального движения
    const speedY = 0.1; // Скорость для вертикального движения
    document.addEventListener("mousemove", function (e) {
        if (window.innerWidth > 767) {
            const rect = parallaxBg.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            let moveX = (x / rect.width - 0.5) * 50 * speedX;
            // let moveY = (y / rect.height - 0.5) * 500 * speedY;
            // moveY = Math.max(-50, Math.min(50, moveY));
            parallaxBg.style.backgroundPosition = `${50 + moveX}% center`;
            // parallaxBg.style.bottom = `${10 + moveY}px`;
        }
    });
    function toggleHiddenText() {
        const goalsContent = document.querySelector('.goals__content');
        if (window.innerWidth < 480) {
            goalsContent.classList.add('hidden-text');
        } else {
            goalsContent.classList.remove('hidden-text');
        }
    }
    toggleHiddenText();
    window.addEventListener('resize', toggleHiddenText);
    const goalsContent = document.querySelector('.goals__content');
    if(goalsContent && window.innerWidth < 480){
        const firstParagraph = goalsContent.querySelector('p');
        firstParagraph.addEventListener('click', () => {
            goalsContent.classList.remove('hidden-text');
        });
    }
});
