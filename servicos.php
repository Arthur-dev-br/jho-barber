<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Descrição do site -->
  <meta name="description" content="wawawawawawawawwaaw">
  <!-- palavras chave -->
  <meta name="keywords" content="corte, cabelo, barba, progressiva, penteados">
  <!-- autor do site -->

  <meta name="autor" content="Arthur Costa">

  <!-- Open Graph -->
  <meta property="og:title" content="Jho's Barbershop">
  <meta property="og:description" content="wawawawawawawawwaaw">
  <meta property="og:image" content="https://">
  <meta property="og:type" content="website">
  <!-- Links dos ICONS FAVICOM -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/icon//apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/icon//apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/icon//apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/icon//apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/icon//apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/icon//apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/icon//apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/icon//apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon//apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/icon//android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icon//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/icon//favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icon//favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#e0a215">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#e0a215">


  <title>Jho's Barbershop</title>
  <!-- Reset limpa os estilos -->
  <link rel="stylesheet" href="css/reset.css">

  <!-- slick -->
  <link rel="stylesheet" href="css/slick.css">

  <link rel="stylesheet" href="css/slick-theme.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Estilo -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">


</head>

<body>
  <!-- cabeçalho -->

  <header class="topo topo2" id="topoFixo">

    <div class="site">

      <h1>Jho's Barbershop</h1>
      <button class="abrir-menu"></button>
      <nav class="menu">
        <button class="fechar-menu"></button>

        <?php $pgAtual = basename($_SERVER['PHP_SELF']); ?>

        <!-- nav>ul>li*6>a+tab -->
        <ul>
          <li><a class="<?php if ($pgAtual == 'index.php')
                          echo 'menu-ativo'; ?>" href="index.php">Home</a></li>

          <li><a class="<?php if ($pgAtual == 'sobre.php')
                          echo 'menu-ativo'; ?>" href="sobre.php">Sobre</a></li>

          <li><a class="<?php if ($pgAtual == 'servicos.php')
                          echo 'menu-ativo'; ?>" href="servicos.php">Serviços</a></li>

          <li><a class="<?php if ($pgAtual == 'produtos.php')
                          echo 'menu-ativo'; ?>" href="produtos.php">Produtos</a></li>

          <li><a class="<?php if ($pgAtual == 'galeria.php')
                          echo 'menu-ativo'; ?>" href="galeria.php">Galeria</a></li>

          <li><a class="<?php if ($pgAtual == 'contato.php')
                          echo 'menu-ativo'; ?>" href="contato.php">Contato</a></li>
        </ul>


      </nav>
      <ul class="rede-social topozao">
        <li><a href="https://www.instagram.com/jhos_barbershop/" target="_blank"><img src="assets/instagram-24.png"
              alt="Logo do instagram 60x60"></a></li>
        <li><a href="https://wa.me/5511958871348" target="_blank"><img src="assets/whatsapp-24.png"
              alt="Logo do whatsapp 60x60"></a></li>
        <li><a href="https://www.facebook.com/jhosbarbershop/" target="_blank"><img src="assets/facebook-24.png"
              alt="Logo do facebook 60x60"></a></li>
      </ul>

    </div>

  </header>

  <!-- Corpo -->
  <main>



    <!-- inicio serviços -->

    <section class="servicos">
      <header class="parallax-padrao">
        <h2>
          Nossos Serviços
        </h2>
        <h3>
          confira a variedade de trabalhos oferecidos em nosso local
        </h3>

      </header>

      <div class="site card-produtos">

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv">
              <h4>CORTE SOCIAL 1-2-3-4 SEM TESOURA </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte Social 1-2-3-4 Sem Tesoura
              </h4>
              <h4>
                R$ 35,00
              </h4>
              <h5>
                Corte social é um corte de cabelo masculino clássico, caracterizado por ser curto nas laterais e mais longo no topo.
              </h5>

            </div>

          </article>
        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv2">
              <h4>CORTE DEGRADÊ / DE 0 / 1 OU NAVALHADO / TESOURA</h4>
            </div>
            <div class="flip2">
              <h4>
                Corte Degradê / De 0 / 1 ou Navalhado / Tesoura
              </h4>
              <h4>
                R$ 40,00
              </h4>
              <h5>
                Corte Degradê / De 0 / 1 ou Navalhado / Tesoura é um corte de cabelo masculino que consiste em uma transição suave entre diferentes comprimentos, criando um visual moderno e estilizado.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv3">
              <h4>CORTE 1 DE ALTURA + PEZINHO </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte 1 de Altura + Pezinho
              </h4>
              <h4>
                R$ 25,00
              </h4>
              <h5>
                Corte 1 de Altura + Pezinho é um serviço que consiste em cortar o cabelo em uma única altura e finalizar com um pezinho estilizado.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv4">
              <h4>CORTE + PENTEADO </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Penteado
              </h4>
              <h4>
                R$ 55,00
              </h4>
              <h5>
                Corte + Penteado é um serviço completo que consiste em modelar e definir o cabelo com um processo de penteado, criando um visual mais delineado e estilizado.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv5">
              <h4>CORTE + BARBA + SOBRANCELHA </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Barba + Sobrancelha
              </h4>
              <h4>
                R$ 80,00
              </h4>
              <h5>
                Corte + Barba + Sobrancelha é um serviço completo que consiste em modelar e definir o cabelo com um processo de barba e sobrancelha, criando um visual mais delineado e estilizado.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv6">
              <h4>CORTE + BARBA </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Barba
              </h4>
              <h4>
                R$ 70,00
              </h4>
              <h5>
                Corte + Barba é um serviço completo que consiste em modelar e definir o cabelo com um processo de barba, criando um visual mais delineado e estilizado.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv7">
              <h4>CORTE + SOBRANCELHA </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Sobrancelha
              </h4>
              <h4>
                R$ 50,00
              </h4>
              <h5>
                Corte + Sobrancelha é um serviço completo que consiste em modelar e definir o cabelo com um processo de sobrancelha, criando um visual mais delineado e estilizado.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv8">
              <h4>CORTE + ALISAMENTO </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Alisamento, A Partir
              </h4>
              <h4>
                R$ 70,00
              </h4>
              <h5>
                Corte + Alisamento é um serviço completo que consiste em modelar e definir o cabelo com um processo de alisamento, criando um visual mais suave e moderno.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv9">
              <h4>CORTE + BARBOTERAPIA </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Barboterapia
              </h4>
              <h4>
                R$ 70,00
              </h4>
              <h5>
                Corte + Barboterapia é um serviço completo que consiste em modelar e definir o cabelo com um processo de barboterapia, criando um visual mais hidratado e saudável.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv10">
              <h4>CORTE INFANTIL </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte Infantil
              </h4>
              <h4>
                R$ 40,00
              </h4>
              <h5>
                Corte infantil é um corte de cabelo para crianças, caracterizado por ser simples e adequado para o estilo de vida ativo.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv11">
              <h4>CORTE + ALISA + PENTEADO, A PARTIR</h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Alisa + Penteado, A Partir
              </h4>
              <h4>
                R$ 90,00
              </h4>
              <h5>
                O corte + alisa + penteado é um serviço completo que consiste em modelar e definir o cabelo com um processo de alisamento, criando um visual mais suave e moderno.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv12">
              <h4>CORTE + PROGRESSIVA </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Progressiva, A Partir
              </h4>
              <h4>
                R$ 110,00
              </h4>
              <h5>
                O corte + progressiva é um serviço completo que consiste em modelar e definir o cabelo com um processo de clareamento, criando um visual mais iluminado e moderno.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv13">
              <h4>CORTE + BARBA + SOBRANCELHA + PENTEADO </h4>
            </div>
            <div class="flip2">
              <h4>
                Corte + Barba + Sobrancelha + Penteado, A Partir
              </h4>
              <h4>
                R$ 100,00
              </h4>
              <h5>
                O corte + barba + sobrancelha + penteado é um serviço completo que consiste em modelar e definir o cabelo, a barba e as sobrancelhas, criando um visual harmonioso e atraente.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv14">
              <h4>DESIGN PEZINHO </h4>
            </div>
            <div class="flip2">
              <h4>
                Design Pezinho
              </h4>
              <h4>
                R$ 15,00
              </h4>
              <h5>
                O design de pezinho é um serviço que consiste em modelar e definir o cabelo na região da testa, criando um visual harmonioso e atraente.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv15">
              <h4>PROGRESSIVA </h4>
            </div>
            <div class="flip2">
              <h4>
                Progressiva, A Partir
              </h4>
              <h4>
                R$ 80.00
              </h4>
              <h5>
                A progressiva é um processo de clareamento do cabelo que resulta em um visual mais iluminado e moderno.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv16">
              <h4>REFLEXO / LUZES </h4>
            </div>
            <div class="flip2">
              <h4>
                Reflexo / Luzes, A Partir
              </h4>
              <h4>
                R$ 70,00
              </h4>
              <h5>
                O reflexo / luzes é um serviço que consiste em adicionar tons claros ao cabelo, criando um visual mais iluminado e moderno.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv17">
              <h4>DESIGN BARBA </h4>
            </div>
            <div class="flip2">
              <h4>
                Design de Barba
              </h4>
              <h4>
                R$ 30,00
              </h4>
              <h5>
                O design de barba é um serviço que consiste em modelar e definir a barba, criando um visual harmonioso e atraente.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv18">
              <h4>DESIGN DE SOBRANCELHA </h4>
            </div>
            <div class="flip2">
              <h4>
                Design de Sobrancelha
              </h4>
              <h4>
                R$ 15,00
              </h4>
              <h5>
                O design de sobrancelha é um serviço que consiste em modelar e definir as sobrancelhas, criando um visual harmonioso e atraente.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv19">
              <h4>PLATINADO GLOBAL + CORTE </h4>
            </div>
            <div class="flip2">
              <h4>
                PLATINADO GLOBAL + CORTE, A PARTIR
              </h4>
              <h4>
                R$ 150,00
              </h4>
              <h5>
                O platino global + corte é um serviço que combina o processo de clareamento completo do cabelo com um corte personalizado, resultando em um visual moderno e elegante.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv20">
              <h4>PENTEADO</h4>
            </div>
            <div class="flip2">
              <h4>
                PENTEADO
              </h4>
              <h4>
                R$ 25.00
              </h4>
              <h5>
                O penteado é um serviço que consiste em pentear o cabelo de forma elegante e organizada, criando diferentes estilos e aparências.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv21">
              <h4>ALISAMENTO + HIDRATAÇÃO </h4>
            </div>
            <div class="flip2">
              <h4>
                ALISAMENTO + HIDRATAÇÃO
              </h4>
              <h4>
                R$ 45.00
              </h4>
              <h5>
                O alisamento + hidratação é um serviço que suaviza os fios e restaura a saúde e o brilho do cabelo.
              </h5>

            </div>

          </article>
        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1 flip1serv22">
              <h4>CORTE + ALISAMENTO + HIDRATAÇÃO </h4>
            </div>
            <div class="flip2">
              <h4>
                CORTE + ALISAMENTO + HIDRATAÇÃO
              </h4>
              <h4>
                R$ 80.00
              </h4>
              <h5>
                O corte + alisamento + hidratação é um serviço completo que combina um corte de cabelo personalizado, seguido por um processo de alisamento para suavizar os fios e uma hidratação profunda para restaurar a saúde e o brilho do cabelo.
              </h5>

            </div>

          </article>
        </div>


      </div>





    </section>

    <!-- fim serviços -->


  </main>




  <!-- Inicio rodapé -->
  <?php require_once('conteudo/rodape.php') ?>

  <!-- Fim Rodapé -->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="js/slick.min.js"></script>

  <script src="js/wow.min.js"></script>

  <script src="js/script.js"></script>





</body>


</html>