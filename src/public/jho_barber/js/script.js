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

const modalServico = document.querySelector("[data-modal-servico]");
const corpo = document.body;

if (modalServico) {

    const botoesDetalhes = document.querySelectorAll("[data-abrir-detalhes]");

    const imagemModal = modalServico.querySelector("[data-modal-servico-imagem]");
    const imagemSemFoto = modalServico.querySelector("[data-modal-servico-sem-imagem]");
    const tituloModal = modalServico.querySelector("[data-modal-servico-titulo]");
    const descricaoModal = modalServico.querySelector("[data-modal-servico-descricao]");
    const precoModal = modalServico.querySelector("[data-modal-servico-preco]");

    let elementoAnterior = null;

    function abrirModalServico(botao) {

        elementoAnterior = document.activeElement;

        const nome = botao.dataset.nome;
        const descricao = botao.dataset.descricao;
        const preco = botao.dataset.preco;
        const imagem = botao.dataset.imagem;

        tituloModal.textContent = nome;
        descricaoModal.textContent = descricao;
        precoModal.textContent = preco;

        if (imagem) {

            imagemModal.src = imagem;
            imagemModal.alt = nome;

            imagemModal.hidden = false;
            imagemSemFoto.hidden = true;

        } else {

            imagemModal.hidden = true;
            imagemSemFoto.hidden = false;

        }

        modalServico.hidden = false;

        corpo.classList.add("modal-servico-aberto");

        const janela = modalServico.querySelector(".modal-servico__janela");

        janela.classList.remove(
            "animate__animated",
            "animate__zoomIn"
        );

        void janela.offsetWidth;

        janela.classList.add(
            "animate__animated",
            "animate__zoomIn"
        );

        modalServico
            .querySelector(".modal-servico__fechar")
            .focus();
    }


    function fecharModalServico() {

        modalServico.hidden = true;

        corpo.classList.remove("modal-servico-aberto");

        if (elementoAnterior) {
            elementoAnterior.focus();
        }
    }


    botoesDetalhes.forEach((botao) => {

        botao.addEventListener("click", () => {
            abrirModalServico(botao);
        });

    });


    modalServico
        .querySelectorAll("[data-fechar-modal-servico]")
        .forEach((elemento) => {

            elemento.addEventListener(
                "click",
                fecharModalServico
            );

        });


    document.addEventListener("keydown", (evento) => {

        if (evento.key === "Escape" && !modalServico.hidden) {
            fecharModalServico();
        }

    });

}