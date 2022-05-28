// import Swiper JS
import Swiper, { Navigation, Pagination, Autoplay } from "swiper";
// import Swiper and modules styles
import "swiper/css";
import "swiper/swiperstyle";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/autoplay";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, Autoplay]);

// init Swiper:
const swiper = new Swiper(".swiper", {
  // Optional parameters
  // direction: 'vertical',
  autoplay: {
    delay: 5000,
  },
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    type: "bullet",
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});
