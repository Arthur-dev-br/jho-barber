<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;
//email != ''; //
if (isset($_POST['email'])) {

  //Create an instance; passing `true` enables exceptions
  require 'vendor/phpmailer/PHPMailer.php';
  require 'vendor/phpmailer/SMTP.php';

  $mail = new PHPMailer(true);

  try {


    // Pegar info do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fone = $_POST["telefone"];
    $assunto = $_POST["assunto"];
    $mens = $_POST["mensagem"];


    // banco de dados
    require_once('admin/ControleContato.php');

    $contato = new ClassContato();

    $contato->nomeContato = $nome;
    $contato->emailContato = $email;
    $contato->foneContato = $fone;
    $contato->assuntoContato = $assunto;
    $contato->mensContato = $mens;

    $contato->Inserir();


    //Server settings
    $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER                  //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smpsistema.com.br';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'tipi06@smpsistema.com.br';                     //SMTP username
    $mail->Password = 'SMP-Tipi@@06';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tipi06@smpsistema.com.br', 'Site Jhos Barbershop'); //quem dispara o email
    $mail->addAddress('arthur.cogrodowski@senacsp.edu.br');     //Add a recipient


    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Site Jhos Barbershop';
    $mail->Body = "
      Nome: $nome <br>
      E-mail: $email <br>
      Telefone: $fone <br>
      Assunto: $assunto <br>
      Mensagem: $mens
    ";

    $mail->AltBody = "
      Nome: $nome /n
      E-mail $email /n
      Telefone: $fone /n
      Assunto: $assunto /n
      Mensagem $mens
    ";

    $mail->send();
    $ok = 1;
  } catch (Exception $e) {
    $ok = 2;
  }
}
?>



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

    <!-- inicio formulario contato -->
    <section class="contato-form">
      <div class="contato-badge  wow animate__animated animate__fadeInDown">
        <h3>JHO'S BARBERSHOP</h3>
        <p>Entre em contato conosco</p>
      </div>

      <h2>FORMULÁRIO DE CONTATO</h2>

      <?php
      if ($ok == 1) {
        echo '<h2 class="mensagem-contato mensagem-sucesso">' . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . ', sua mensagem foi enviada com sucesso</h2>';
      } elseif ($ok == 2) {
        echo '<h2 class="mensagem-contato mensagem-erro">' . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . ', não foi possível enviar sua mensagem</h2>';
      }

      ?>

      <form class="form-contato" action="#" method="post">
        <div class="campos-dupla">
          <div class="linha-dupla linha-topo wow animate__animated animate__fadeInUp">
            <input type="text" name="nome" placeholder="Nome Completo" required>
            <input type="email" name="email" placeholder="E-mail" required>
          </div>

          <div class="linha-dupla linha-baixo wow animate__animated animate__fadeInUp">
            <input type="tel" name="telefone" placeholder="Telefone" required>
            <select name="assunto" required>
              <option value="" disabled selected>Assunto</option>
              <option value="corte">Corte</option>
              <option value="servico">Serviço</option>
              <option value="barba">Barba</option>
            </select>
          </div>
        </div>

        <textarea name="mensagem" cols="30" rows="10" placeholder="Mensagem" required></textarea>

        <div class="botoes-form wow animate__animated animate__fadeInUp">
          <button type="reset">Limpar</button>
          <button type="submit">Enviar mensagem</button>
        </div>
      </form>


      <div class="contato-blocos">
        <article class="contato-bloco wow animate__animated animate__fadeInLeft">
          <h3>Nosso Telefone</h3>
          <p>11 95887-1348</p>
        </article>

        <article class="contato-bloco wow animate__animated animate__fadeInRight">
          <h3>Nosso endereço</h3>
          <p>Av. João Batista Santiago,<br> 1397, Itaim Paulista.</p>
        </article>

        <article class="contato-bloco wow animate__animated animate__fadeInLeft">
          <h3>Nosso e-mail</h3>
          <p>Jhosbarbershop@gmail.com</p>
        </article>

        <article class="contato-bloco wow animate__animated animate__fadeInRight">
          <h3>Siga-nos</h3>
          <ul class="rede-social">
            <li><a href="https://wa.me/5511958871348" target="_blank"><img src="assets/whatsapp-24.png"
                  alt="Logo do whatsapp 60x60"></a></li>
            <li><a href="https://www.facebook.com/jhosbarbershop/" target="_blank"><img src="assets/facebook-24.png"
                  alt="Logo do facebook 60x60"></a></li>
            <li><a href="https://www.instagram.com/jhos_barbershop/" target="_blank"><img src="assets/instagram-24.png"
                  alt="Logo do instagram 60x60"></a></li>
          </ul>
        </article>
      </div>
    </section>
    <!-- fim formulario contato -->

    <!-- inicio agendamentos -->

    <?php require_once('conteudo/agendamentos.php'); ?>

    <!-- fim agendamentos -->





  </main>




  <!-- inicio localização -->

  <?php require_once('conteudo/localizacao.php') ?>

  <!-- fim localização -->

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