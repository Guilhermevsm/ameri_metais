function focar_contato(){
  fale_conosco.scrollIntoView({behavior:"smooth"});
};

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  
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
      slidesPerView: 3,
      spaceBetween: 17,
      centeredSlides: true,
      loop: false,   
      autoplay: false,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 27,
      loop: false, 
      autoplay: false,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 0,
      loop: true,  
      autoplay: false, 
    },
  },
});


var myCarousel = document.getElementById('myCarousel');
var carousel = bootstrap.Carousel.getInstance(myCarousel)
myCarousel.addEventListener('slide.bs.carousel', function (event) {
    
    var slide = event.to;
    if(slide == "1"){
      document.getElementById("p1").innerHTML = "Projetos que permitem a integração e compatibilização<br>de maneira fácil entre todas as disciplinas.";
      document.getElementById("h1").innerHTML = "Projetos de engenharia elaborados na plataforma BIM.";
      document.getElementById("btn-2").style.background = "#002E9F";
      document.getElementById("btn-1").style.background = "#D9D9D9";
      document.getElementById("btn-3").style.background = "#D9D9D9";
      document.getElementById("p1").style.marginBottom = "16px";
    }else if(slide == "2"){
      document.getElementById("p1").innerHTML = "Projetos que sempre buscam soluções<br>com o melhor custo-benefício.";
      document.getElementById("h1").innerHTML = "Para quem<br>exige projetos<br>eficientes.";
      document.getElementById("btn-3").style.background = "#002E9F";
      document.getElementById("btn-1").style.background = "#D9D9D9";
      document.getElementById("btn-2").style.background = "#D9D9D9";
      document.getElementById("p1").style.marginBottom = "76px";
    }else{
      document.getElementById("p1").innerHTML = "Para quem procura uma empresa focada na necessidade<br>do cliente do início ao fim do processo de projeto.";
      document.getElementById("h1").innerHTML = "Engenharia<br>com qualidade<br>e compromisso.";
      document.getElementById("btn-1").style.background = "#002E9F";
      document.getElementById("btn-2").style.background = "#D9D9D9";
      document.getElementById("btn-3").style.background = "#D9D9D9";
      document.getElementById("p1").style.marginBottom = "76px";
    }
});

            