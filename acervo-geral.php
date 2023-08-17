<!DOCTYPE html>
<?php
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
                      <div class="unit-body"><a href="tel:#">(38) 3821-4973 / (38) 3821-4009</a></div> <!-- INSERIR TELEFONE DA Biblioteca -->
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
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href=" https://www.instagram.com/prefeituradejanauba/"></a></li> <!-- INSERIR INSTAGRAM -->
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
                      <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Login</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        </header>

<br>

      <section class="section section-intro context-dark">
        <div class="intro-bg" style="background: url(images/alterar-usuario3.png) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
              <h1 class="font-weight-bold wow fadeInLeft">Acervo Geral</h1>
              <!--<p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>-->
            </div>
          </div>
        </div>
      </section>


      <div class="container mt-5">
        <div class="row justify-content-center mb-5">
          <div class="col-12 border border-secondary rounded pl-4 pr-4">
            <h5 class="mt-3 pb-2">Pesquise no acervo: </h5>
            <form method="post" action="" class="collapse1" id="demo1">
              <div class="form-row justify-content-center">

                <div class="col-12 col-md-12 mb-3">
                  <!-- quero um label inline com "palavras chave" e à direita o "busca avançada" -->
                  <input type="text" placeholder="Palavras-chave" name="palavra-chave" required class="rounded form-control">
                </div>

                <!-- ou só no avançado  <div class="col-12">
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Todos</option>
                    <option value="1">Disponíveis</option>
                    <option value="2">Indisponíveis</option>
                  </select>
                </div> -->

                <div class="col-12 col-md-12 mt-3 mb-4">
                  <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary rounded"/> <!-- ou colocar a lupinha -->
                  <!-- <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo">
                      Busca avançada
                  </button> -->
                </div>

            </div> <!-- div form-row -->
          </form>

      <!-- pesquisa avançada -->

        <div class="collapse" id="demo">
          <form method="post" action="">
            <div class="form-row justify-content-center">

              <div class="col-12 col-md-12 mb-3">
                <!-- quero um label inline com "palavras chave" e à direita o "busca avançada" -->
                <input type="text" placeholder="Código no acervo" name="codigo-livro" class="rounded form-control">
              </div>


              <div class="col-12 col-md-12 mb-3">
                <!-- quero um label inline com "palavras chave" e à direita o "busca avançada" -->
                <input type="text" placeholder="Título" name="titulo" class="rounded form-control">
              </div>

              <div class="col-12 col-md-12 mb-3">
                <!-- quero um label inline com "palavras chave" e à direita o "busca avançada" -->
                <input type="text" placeholder="Autor(es)" name="autor" class="rounded form-control">
              </div>

              <div class="col-12 col-md-12 mb-3">
                <!-- quero um label inline com "palavras chave" e à direita o "busca avançada" -->
                <input type="text" placeholder="Tradutor(es)" name="tradutor" class="rounded form-control">
              </div>

              <div class="col-12 col-md-6 mb-3">
                <input type="text" placeholder="Editora" name="editora" class="rounded form-control">
              </div>

              <div class="col-12 col-md-6 mb-3">
                <input type="text" placeholder="Edição" name="edicao" class="rounded form-control">
              </div>

              <div class="col-12 col-md-12 mb-3">
                <input type="text" placeholder="Local de publicação" name="local" class="rounded form-control">
              </div>

              <div class="col-12 col-md-12 mb-3">
                <input type="text" placeholder="Ano de publicação" name="ano" class="rounded form-control">
              </div>

              <div class="col-12 col-md-12 mb-3">

                <input type="text" placeholder="Área do conhecimento" name="area" class="rounded form-control">
              </div>

              <div class="col-12 col-md-6 mb-3">
                <input type="text" placeholder="Código ISBN" name="isbn" class="rounded form-control">
              </div>

              <div class="col-12 col-md-6">
                <select class="custom-select" name="disponibilidade" id="inputGroupSelect01">
                  <option selected>Todos</option>
                  <option value="1-0">Disponíveis</option>
                  <option value="0">Indisponíveis</option>
                </select>
              </div>

              <div class="col-12 col-md-12 mt-3 mb-4">
                <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary rounded"/>
                <input type="reset" id="cancelar" name="cancelar" value="Limpar" class="btn btn-secondary rounded"/>
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo" id="a">

                </button>
              </div>

          </div> <!-- div form-row -->
        </form>
      </div> <!-- div "collapse" -->
      </div> <!-- div geral -->
      </div> <!-- div row -->
      </div> <!-- div container -->

      <?php
      // ---------- busca simples ------------------
      if ( isset($_POST['palavra-chave']) ){
        $pesquisa = $_POST['palavra-chave'];

        $sql = "SELECT * FROM livros WHERE titulo LIKE '%$pesquisa%' OR autor LIKE '%$pesquisa%' OR editora LIKE '%$pesquisa%' OR edicao LIKE '%$pesquisa%' OR isbn LIKE '%$pesquisa%'";

        acervo_geral($con,$sql);
      } // fechando o isset

      ?>

      <?php
      // ---------------- busca avançada -------------------
      if ( isset($_POST['titulo']) ){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $edicao = $_POST['edicao'];
        $isbn = $_POST['isbn'];

        $sql = "SELECT * FROM livros WHERE titulo LIKE '%$titulo%' and autor LIKE '%$autor%' and editora LIKE '%$editora%' and edicao LIKE '%$edicao%' and isbn LIKE '%$isbn%'";

        if ($_POST['disponibilidade'] != "") {
          switch ($_POST['disponibilidade']) {
            case '1-0':
            $sql .= " AND qtd < 0";
            break;
            case '0':
            $sql .= " AND qtd = 0";
            break;
          }
        }
        acervo_geral($con,$sql);

      } // fechando o isset
      ?>

      <?php
        // ---------- Só deixar os livros selecionados  ------------------

        $sql = "SELECT * FROM livros ORDER BY titulo ASC";
        acervo_geral($con,$sql);
      ?>


      <!-- About page about section-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-40 justify-content-left rounded">
            <div class="col-lg-6 col-12">
              <div class="offset-top-45 offset-lg-right-45">

                <!-- <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Título do Livro</h3><div class="section-name wow fadeInRight" data-wow-delay=".3s">código</div>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Autor(es): </span>lorem ipsum</p>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Tradutor(es): </span>lorem ipsum</p>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Editora: </span>lorem ipsum</p>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Edição: </span>lorem ipsum</p>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Local de publicação: </span>lorem ipsum</p>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Ano de publicação: </span>lorem ipsum</p>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Área de conhecimento: </span>lorem ipsum</p>
                <p class="wow fadeInUp" data-wow-delay=".4s"><span class="font-weight-bold text-gray-dark">Código ISBN: </span>lorem ipsum</p> -->


              </div>
            </div>
          </div>
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
