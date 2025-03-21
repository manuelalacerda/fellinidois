$(document).ready(function () {
  $('.banner').slick({

    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,


  });
});

$(document).ready(function () {
  $('.rotativoum').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: true,
    infinite: true,
    speed: 500
  });
});

$(document).ready(function () {
  $('.rotativodois').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: true,
    infinite: true,
    speed: 500
  });
});

$(document).ready(function () {
  $('.rotativotres').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: true,
    infinite: true,
    speed: 500
  });
});


$(document).ready(function () {
  $('.depoimentodois').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500
  });
});


/* MENU FIXO */

window.onscroll = function () {
  let top = window.scrollY;

  if (top > 1200) {
    document.getElementById("menufixo").classList.add("menufixo");
  } else {
    document.getElementById("menufixo").classList.remove("menufixo");
  }

}


/* MENU MOBILE */
document.querySelector(".abrir-menu").onclick = function () {
  document.documentElement.classList.add("menu-mobile");
}
document.querySelector(".fechar-menu").onclick = function () {
  document.documentElement.classList.remove("menu-mobile");
}

/* PROJETO RESIDENCIAL */

var images = document.querySelectorAll('.gallery-link');
var lightbox = document.querySelector('.lightbox');
var lightboxImg = document.getElementById('lightbox-img');
var currentIndex = 0;
var intervalID;

images.forEach(function (image, index) {
  image.addEventListener('click', function (event) {
    event.preventDefault();
    currentIndex = index;
    showImage(image.getAttribute('href'));
  });
});

function showImage(src) {
  lightboxImg.src = src;
  lightbox.style.display = 'flex';
  setTimeout(function () {
    lightboxImg.style.opacity = '1';
  }, 100);
  // Inicia o intervalo para passagem automática das imagens
  startInterval();
}

function hideLightbox() {
  lightboxImg.style.opacity = '0';
  setTimeout(function () {
    lightbox.style.display = 'none';
  }, 500);
  // Limpa o intervalo quando o lightbox é fechado
  clearInterval(intervalID);
}

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  showImage(images[currentIndex].getAttribute('href'));
}

function prevImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage(images[currentIndex].getAttribute('href'));
}

function startInterval() {
  clearInterval(intervalID); // Limpa o intervalo existente
  var intervalo = 3000; // Intervalo em milissegundos (3 segundos)
  intervalID = setInterval(nextImage, intervalo);
}
