$('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
});

$('.cardDepo').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
});

$('.slideGaleria').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  variableWidth: true,
  autoplay: true,
  autoplaySpeed: 1000,
});

new WOW().init();

const botaoAbrirMenu = document.querySelector('.abrir-menu');
const botaoFecharMenu = document.querySelector('.fechar-menu');
const menuMobile = document.querySelector('.menu');

if (botaoAbrirMenu && botaoFecharMenu && menuMobile) {
  botaoAbrirMenu.addEventListener('click', function () {
    document.body.classList.add('menu-aberto');
  });

  botaoFecharMenu.addEventListener('click', function () {
    document.body.classList.remove('menu-aberto');
  });

  menuMobile.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      document.body.classList.remove('menu-aberto');
    });
  });
}

// On Scroll //
let menuFixoTimeout = null;

window.onscroll = function () {
  var top = window.scrollY;
  var topoFixo = document.getElementById('topoFixo');

  if (top >= 1100) { //SE TOP FOR MAIOR QUE 1100 faça:
    console.log(top);
    if (menuFixoTimeout) {
      clearTimeout(menuFixoTimeout);
      menuFixoTimeout = null;
    }

    topoFixo.classList.remove('menu-fixo-saindo');

    topoFixo.classList.add('menu-fixo');
  } else { //SENÃO for faça:
    console.log("estou abaixo de: " + top);

    if (topoFixo.classList.contains('menu-fixo')) {
      topoFixo.classList.add('menu-fixo-saindo');
      if (menuFixoTimeout) {
        clearTimeout(menuFixoTimeout);
      }
      
      menuFixoTimeout = setTimeout(function () {
        topoFixo.classList.remove('menu-fixo');
        topoFixo.classList.remove('menu-fixo-saindo');
        menuFixoTimeout = null;
      }, 600);
    }
  }

}