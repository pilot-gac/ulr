let clauseSwiper = new Swiper(".interested__slider", {
    loop: false,
    spaceBetween: 20,
    slidesPerView: 1,
    allowTouchMove: true,
    breakpoints: {
        479: {
            slidesPerView: 1,
        },
        767: {
            slidesPerView: 2,
        },
        1279: {
            slidesPerView: 3,
        },
    },
    pagination: {
        el: '.interested__slider-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return `<span class="${className}">${index + 1}</span>`;
        },
    },
});