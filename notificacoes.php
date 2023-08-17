  <!DOCTYPE html>
  <?php
  session_start();
  if ( !isset($_SESSION["adm"]) ){
    header("location:login-adm.php?erro=2");
  }
  include_once "conexao.php";
  include_once "includes/funcoes.php";
  $con = conecta_mysql();
  $id_adm = $_SESSION["adm"];
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
                    <li class="rd-nav-item"><a class="rd-nav-link" href="notificacoes.php">Notificações</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acervo
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size: 10pt;">
                        <a class="dropdown-item" href="consulta-acervo.php">Consultar livros</a>
                        <a class="dropdown-item" href="adicionar-livro.php">Adicionar livros</a>
                        <a class="dropdown-item" href="jornais-adm.php">Adicionar jornais</a>
                      </div>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuários
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size: 10pt;">
                        <a class="dropdown-item" href="pesquisa-usuario.php">Consultar usuários</a>
                        <a class="dropdown-item" href="usuario-posse-livro.php">Usuários em posse de livro</a>
                        <a class="dropdown-item" href="cadastro-usuario.php">Adicionar usuários</a>
                      </div>
                    </li>

                    <li class="rd-nav-item">
                      <a class="rd-nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bibliotecária(o)
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size: 10pt;">
                        <a class="dropdown-item" href="sair-adm.php">Sair</a>
                      </div>
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
      <div class="intro-bg" style="background: url(images/alterar-usuario3.png) no-repeat;background-size:cover;background-position: top center;"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 text-center">
            <h1 class="font-weight-bold wow fadeInLeft">Notificações</h1>
            <!--<p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>-->
          </div>
        </div>
      </div>
    </section>




    <?php
    // ---------- Mostrar as reservas que os usuários solicitaram  ------------------

    $sql = "SELECT livros.etiqueta, livros.id_livro, livros.titulo, livros.area_conhecimento, livros.autor,
    livros.editora, livros.edicao, livros.isbn, livros.isbn, livros.tradutor, livros.data_publicacao,
    livros.local_publicacao, reservar.id_reserva, reservar.data, usuarios.nome, usuarios.id_codigo, usuarios.identificacao
    FROM reservar
    JOIN usuarios
    ON reservar.id_codigo = usuarios.id_codigo
    JOIN livros
    ON reservar.id_livro = livros.id_livro
    ORDER BY data DESC";


    //<!-- About page about section-->
    print"<section class='section section-md'>";
    print"  <div class='container mt-5'>";

    $resultado = mysqli_query($con,$sql);
    if($resultado){
      $livros = array();
      while( $linha = mysqli_fetch_assoc($resultado) ){
        $livros[] = $linha;

      }
      //mostrando os livros

      foreach ($livros as $livro) {
        //$_SESSION["id_reserva"] = $livro["id_reserva"];
        $_SESSION["id_codigo"] = $livro["id_codigo"];
        $_SESSION["id_livro"] = $livro["id_livro"];
        $_SESSION["identificacao"] = $livro["identificacao"];
        $_SESSION["nome"] = $livro["nome"];
        //$livro["id_reserva"];
        $id_codigo = $livro["id_codigo"];
        $id_livro = $livro["id_livro"];
        $data = $livro["data"];


        print"    <div class='row justify-content-center mb-5'>";
        print"      <div class='col-12 border border-secondary rounded pl-4 pr-4'>";

        print"        <div class='container'>";
        print"          <div class='row row-35 justify-content-left  rounded'>";
        print"            <div class='col-lg-6 col-12'>";
        print"              <div class='offset-top-20 offset-lg-right-20'>";

        print "<h4 class='wow fadeInLeft text-capitalize' data-wow-delay='.3s'>Notificação de reserva</h4>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Nome do usuário: </span>".$livro["nome"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Nome do livro: </span>".$livro["titulo"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Etiqueta do livro: </span>".$livro["etiqueta"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Data da reserva: </span>".inverteData($data)."</p>";
        print "<br>";

        print "         <form action='' method='post'>";

        print "         <input type='submit' id='enviar' value='Confirmar a reserva' class='btn btn-primary rounded ml-1 mt-1' />";
        print "         <input type='hidden' value='1' name='reserva'/>";

        print "         <button type='button' id='excluir'  class='btn btn-danger rounded ml-1 mt-1 mr-1'>";
        print "         <a href='excluir-notificacao.php?id_codigo=$id_codigo&id_livro=$id_livro' class=''>Excluir</a>";
        print "         </button>";



        //print "       <input type='hidden' name='id_reserva' value='".$_SESSION['id_reserva']."' />";
        print "         <input type='hidden' name='id_codigo' value='".$_SESSION['id_codigo']."' />";
        print "         <input type='hidden' name='id_livro' value='".$_SESSION['id_livro']."' />";
        print "         <input type='hidden' name='nome' value='".$_SESSION['nome']."' />";
        print "         <input type='hidden' name='identificacao' value='".$_SESSION['identificacao']."' />";

        print "         </form>";
        print"                  <br><br>";
        print"                </div>";
        print"              </div>";
        print"            </div>";
        print"          </div>";

        print"        </div>";
        print"      </div>";



      } // fechando o foreach
      print"    </div>";
      print"  </section>";




    } // fechando o resultado



    if (isset($_POST["reserva"]) ){

      //$id_reserva = $_POST["id_reserva"];
      $id_codigo = $_POST["id_codigo"];
      $id_livro = $_POST["id_livro"];
      $nome = $_POST["nome"];
      $identificacao = $_POST["identificacao"];

      print $id_codigo;
      print"<br>";
      print $id_livro;
      print"<br>";
      print $identificacao;
      print"<br>";

      $hoje = date('Y/m/d');
      $data_final = date('Y/m/d', strtotime('+7 days', strtotime($hoje)));

      if ($con){
        $sql = "INSERT INTO presencial (id_adm, id_codigo, identificacao, id_livro, nome, data_reserva, data_entrega)
        VALUES ('$id_adm', '$id_codigo', '$identificacao', '$id_livro', '$nome', '$hoje','$data_final');";
        $sql2 = "DELETE FROM reservar WHERE id_codigo = '$id_codigo' AND id_livro = '$id_livro';";
        print $sql;

        $resultado = mysqli_query($con, $sql);
        $resultado2 = mysqli_query($con,$sql2);
        if ($resultado and $resultado2){
          //inserir_renovar($id_codigo, $id_livro);
          print "<script>
          alert('O livro foi reservado');
          window.location.href=window.location.href;
          </script>";
          // serve para recarregar a página e não deixar que o usuário se cadastre duas vezes

        } // fechando o resultado

        else {
          print "<script>
          alert('Erro de SQL');
          window.location.href=window.location.href;
          </script>";
        }
      }
      else {
        print "<script>
        alert('Erro de conexao');
        window.location.href=window.location.href;
        </script>";
      } // fechando o if da conexão
    } //fechando o isset do enviar


    ?>


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
