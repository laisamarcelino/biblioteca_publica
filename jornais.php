  <!DOCTYPE html>

  <?php
  session_start();
  
  $id_codigo = $_SESSION["id_codigo"];
  include_once "conexao.php";
  include_once "includes/funcoes.php";
  $con = conecta_mysql();
  ?>

  <html class="wide wow-animation" lang="pt-BR">
  <head>
    <title>Biblioteca Pública Munincipal de Janaúba</title>
    <meta charset="utf-8">
    <meta name="author" content="Edio Mácio Silva Júnior, Geissi Éllen Medeiros Cangussu, Laisa Marcelino Santos Rodrigues e Lucas Gabriel Batista Gaudêncio">
    <meta name="description" content="tcc">
    <meta name="keywords" content="Biblioteca, publica, Munincipal, Janaúba">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/icone.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <header class="section page-header">
      <!--RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
          <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
            <div class="rd-navbar-aside">
              <ul class="list-inline navbar-contact-list">
                <li>
                  <div class="unit unit-spacing-xs align-items-center">
                    <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                    <div class="unit-body"><a href="tel:#">(38) 3821-4973 / (38) 3821-4009 </a></div> <!-- INSERIR TELEFONE DA Biblioteca -->
                  </div>
                </li>
                <li>
                  <div class="unit unit-spacing-xs align-items-center">
                    <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                    <div class="unit-body"><a href="mailto:prefeitura@janauba.mg.gov.br">prefeitura@janauba.mg.gov.br</a></div> <!-- INSERIR EMAIL -->
                  </div>
                </li>
                <li>
                  <div class="unit unit-spacing-xs align-items-center">
                    <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                    <div class="unit-body"><a href="https://www.google.com/maps/place/Biblioteca+P%C3%BAblica+de+Jana%C3%BAba+-+Av.+Brasil+-+Centro,+Jana%C3%BAba+-+MG,+39445-102/@-15.804361,-43.311421,16z/data=!4m5!3m4!1s0x753d06a3ffe8efd:0xc0e5f96351695d34!8m2!3d-15.8043459!4d-43.3113937?hl=pt-BR" target="_blank">Av. Brasil - Centro, Janaúba - MG, 39445-102</a></div>
                  </div>
                </li>
              </ul>
              <ul class="social-links">
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://www.facebook.com/prefeituradejanauba"></a></li> <!-- INSERIR FACEBOOK -->
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://www.instagram.com/prefeituradejanauba/"></a></li> <!-- INSERIR INSTAGRAM -->
              </ul>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!--RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!--RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!--RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="index.php"><img class="brand-logo" src="images/logo4.png" alt="" width="100px" height="50px"/></a>
                </div>
              </div>
              <!--___________________-MENU______________________-->
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Início</a>
                    </li>
                    <li class="rd-nav-item">
                        <a class="rd-nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          História
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size: 10pt;">
                          <a class="dropdown-item" href="index.php#janas">Janaúba</a>
                          <a class="dropdown-item" href="jornais.php">Jornais Antigos</a>
                          <a class="dropdown-item" href="index.php#links-ancora">Links informativos</a>
                          <a class="dropdown-item" href="index.php#doacao">Doação de livros</a>
                        </div>
                      </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="acervo-geral.php">Acervo</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="Login.php">Login</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="perfil-usuario.php">
                      <?php
                      //código para selecionar nome do usuario
                      $sql = "SELECT nome FROM usuarios WHERE id_codigo='$id_codigo'";

                      $resultado = mysqli_query($con,$sql);
                      if($resultado){
                        $usuarios = array();
                        while( $linha = mysqli_fetch_assoc($resultado) ){
                          $usuarios[] = $linha;
                        }
                        //mostrando os livros
                        foreach ($usuarios as $usuario) {
                          $_SESSION["nome"] = $usuario["nome"];
                          print $nome = $_SESSION["nome"];
                        }
                      }
                      ?>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(images/jornalcerto.png) no-repeat;background-size:cover;background-position: top center;"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 text-center">
          <h1 class="font-weight-bold wow fadeInLeft">Jornais</h1>
        </div>
      </div>
    </div>
  </section>

  <!--JORNAIS-->





  <section class="section section-md">

    <div class="container">

      <form method="post" action=" " class="text-left footer-classic-subscribe-form" data-form-output="" >
        <div class="">
          <center><input class="form-input" placeholder="Pesquise por data"	aria-label="Pesquisar" type="text" name="pesquisa-jornal" ></center>
        </div>
        <div class="form-button group-sm text-center text-lg-left">
          <button class="button button-primary button-circle" type="submit" name="enviar">Pesquisar</button>
        </div>
      </form>

      <div class="row row-50 justify-content-center">
        <div class="col-md col-12 text-center">
          <div class="section-name wow fadeInRight" data-wow-delay=".2s">Aqui você encontra cópias em PDF dos jornais antigos de Janaúba.</div>
          <p class="block-675">Clique para baixar.</p>
        </div>
      </div>

      <div class="row row-50 justify-content-center">


        <?php
        //código para selecionar dados do usuario
        if (!isset($_POST["pesquisa-jornal"])){
        $sql = "SELECT * FROM jornais";

        $resultado = mysqli_query($con,$sql);
        if($resultado){
          $jornais = array();
          while( $linha = mysqli_fetch_assoc($resultado) ){
            $jornais[] = $linha;
          }

          //mostrando os livros
          foreach ($jornais as $jornal) {
            $id_jornal = $jornal["id_jornal"];
            $pdf = $jornal["pdf"];
            $data = $jornal["data_jornal"];

            print"<div class='col-xl-4 col-sm-6 col-10 wow fadeInLeft' data-wow-delay='.3s'>";
            print"<div class='team-classic-wrap'>";
            print"<div class='team-classic-img'><a href='download.php?pdf=$pdf' target='_blank'><img src='images/jornal2.jpg' alt='' width='370' height='198'/></a>";
            print"  </div>";
            print"  <div class='block-320 text-center'>";
            print"    <h4 class='font-weight-bold'>Jornal de ".$data."</h4>";
            print"  </div>";
            print"</div>";
            print"</div>";
          }
          ?>
          <div class="col-xl-4 col-sm-6 col-10 wow fadeInLeft" data-wow-delay=".3s">
            <div class="team-classic-wrap">
              <div class="team-classic-img"><a href="#" target="_blank"><img src="images/jornal2.jpg" alt="" width="370" height="198"/></a>
              </div>
              <div class="block-320 text-center">
                <h4 class="font-weight-bold">Exemplo</h4>
              </div>
            </div>
          </div>
          <?php
        }
        }
        ?>

      </div>
      <?php
      if (isset($_POST["enviar"])){

        $pesquisa = $_POST['pesquisa-jornal'];
        $sql = "SELECT * FROM jornais WHERE data_jornal LIKE '%$pesquisa%' ";
        $resultado = mysqli_query($con,$sql);
        if($resultado){
          $jornais = array();
          while( $linha = mysqli_fetch_assoc($resultado) ){
            $jornais[] = $linha;

          }
          //mostrando os livros
          ?>
          <div class="row row-50 justify-content-center">

            <div class="col-xl-4 col-sm-6 col-10 wow fadeInLeft" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><a href="#" target="_blank"><img src="images/jornal2.jpg" alt="" width="370" height="198"/></a>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Jornal exemplo</h4>
                </div>
              </div>
            </div>
            <?php
            //código para selecionar dados do usuario
              foreach ($jornais as $jornal) {
                $id_jornal = $jornal["id_jornal"];
                $pdf = $jornal["pdf"];
                $data = $jornal["data_jornal"];

                print"<div class='col-xl-4 col-sm-6 col-10 wow fadeInLeft' data-wow-delay='.3s'>";
                print"<div class='team-classic-wrap'>";
                print"<div class='team-classic-img'><a href='download.php?pdf=$pdf' target='_blank'><img src='images/jornal2.jpg' alt='' width='370' height='198'/></a>";
                print"  </div>";
                print"  <div class='block-320 text-center'>";
                print"    <h4 class='font-weight-bold'>Jornal de ".$data."</h4>";
                print"  </div>";
                print"</div>";
                print"</div>";
              }
            }
            ?>

          </div>
          <?php

      } // fechando o isset

      ?>

    </div>

  </section>





  <!--______________________ RODAPÉ ____________________-->

  <footer class="section footer-classic section-sm">
    <div class="container">
      <div class="row row-30">
        <div class="col-lg-3 wow fadeInLeft">
          <!--Brand--><a class="brand" href="index.php"><img class="brand-logo" src="images/logo4.png" alt="" width="100" height="17"/></a>
          <p class="footer-classic-description offset-top-0 offset-right-25" style="text-align: justify;">Esse site foi desenvolvido por alunos do 3° do Instituto Federal do Norte de Minas Gerais Campus Avançado Janaúba com intuito de facilitar a administração dos serviços bibliotecários da Biblioteca.</p>
        </div>
        <div class="col-lg-3 col-sm-8 wow fadeInUp">
          <P class="footer-classic-title">Contatos</P>
          <div class="d-block offset-top-0">Av. Brasil - Centro, Janaúba - MG, 39445-102</div><a class="d-inline-block accent-link" href="mailto:prefeitura@janauba.mg.gov.br">prefeitura@janauba.mg.gov.br</a><a class="d-inline-block" href="tel:#">(38) 3821-4973 / (38) 3821-4009</a> <!-- TELEFONE E EMAIL -->
          <ul>
            <li>Horário de funcionamento:<span class="d-inline-block  text-white">Segunda à sexta das 7:30 às 18:00</span></li>
          </ul>
        </div>
        <div class="col-lg-2 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
          <P class="footer-classic-title">Links rápidos</P>
          <ul class="footer-classic-nav-list">
            <li><a href="index.php">Início</a></li>
            <li><a href="index.php#historia">História</a></li>
            <li><a href="acervo-geral.php">Acervo</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
        <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
          <P class="footer-classic-title">Instituições Públicas</P>
          <ul class="footer-classic-nav-list">
            <li><a href="https://janauba.mg.gov.br/">Prefeitura Munincipal</a></li>
            <li><a href="https://www.ifnmg.edu.br/janauba">Instituto Fedaral de Janaúba</a></li>
            <li><a href="http://www.srjanauba.com.br/">Sindicato Rural de Janaúba</a></li>
            <li><a href="https://srejanauba.educacao.mg.gov.br/">Superintendência Regional de Educação</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container wow fadeInUp" data-wow-delay=".4s">
      <div class="footer-classic-aside">
        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Todos os direitos reservados. Desenvolvido por Edio Mácio Silva Júnior, Geissi Éllen Medeiros Cangussu, Laisa Marcelino Santos Rodrigues e Lucas Gabriel Batista Gaudêncio. Design adaptado de <a href="https://www.templatemonster.com">TemplateMonster.</a></p>
        <ul class="social-links">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/prefeituradejanauba"></a></li>
          <li><a class="fa fa-instagram" href="https://www.instagram.com/prefeituradejanauba/"></a></li>
        </ul>
      </div>
    </div>
  </footer>
  </div>
  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <!--coded by Drel-->
  </body>
  </html>
