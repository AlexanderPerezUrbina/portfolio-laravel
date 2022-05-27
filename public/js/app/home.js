document.addEventListener('DOMContentLoaded', () => {
    new Swiper('section.recent-projects .swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        autoplay: {
            delay: 3000,
        },

        // If we need pagination
        pagination: {
            el: 'section.recent-projects .swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: 'section.recent-projects .swiper-button-next',
            prevEl: 'section.recent-projects .swiper-button-prev',
        },

        slidesPerView: 1,
        spaceBetween: 40,
        // Responsive breakpoints
        breakpoints: {
            630: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            }
        }
    });
});
