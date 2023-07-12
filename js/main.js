function focar_contato(){
const element = document.getElementById("#aviso");
  element.scrollIntoView({behavior:"smooth"});
};

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  
  centerSlide: true,
  fade: 'true',
  loop: true,                         //loop
  autoplay: {
    delay: 5000,
  },
  
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: -10,
      centeredSlides: true,
      loop: false,   
      autoplay: {
    delay: 5000,
  },
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 27,
      loop: false, 
      autoplay: {
    delay: 5000,
  },
    },
    991: {
      slidesPerView: 4,
      spaceBetween: 0,
      loop: true,  
      autoplay: {
    delay: 5000,
  }, 
    },
    1400: {
      slidesPerView: 6,
      spaceBetween: 0,
      loop: true,  
      autoplay: {
    delay: 5000,
  }, 
    },
  },
});


var pad = $(".foto-tamanho").height() 
var padbot = -1*pad/2

document.getElementById("tamanho").style.bottom = pad.toString();

