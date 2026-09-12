import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';

function initTestimonialSwiper() {
    document.querySelectorAll('.testimonial-swiper').forEach((element) => {
        // Cegah Swiper di-init dua kali
        if (element.swiper) return;

        const section = element.closest('.testimonial-section');
        const pagination = section.querySelector('.testimonial-pagination');

        new Swiper(element, {
            modules: [Autoplay, Pagination],

            // infinite loop
            loop: true,

            // ukuran slide mengikuti CSS
            slidesPerView: 3,

            // slide aktif berada di tengah
            centeredSlides: true,

            // jarak antar testimonial
            spaceBetween: 40,

            // kecepatan gerakan
            speed: 8000,

            // autoplay seperti marquee
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },

            // masih bisa digeser manual
            allowTouchMove: true,
            grabCursor: true,

            // pagination
            pagination: {
                el: pagination,
                clickable: true,
            },

            breakpoints: {
                0: {
                    spaceBetween: 32,
                },

                768: {
                    spaceBetween: 64,
                },
            },
        });
    });
}

document.addEventListener('DOMContentLoaded', initTestimonialSwiper);
