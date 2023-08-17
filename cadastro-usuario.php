  <!DOCTYPE html>
  <html class="wide wow-animation" lang="pt-BR">
  <head>
    <?php
    session_start();
    include_once "conexao.php";
    include_once "includes/funcoes.php";
    $con = conecta_mysql();

    ?>
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
                    <div class="unit-body"><a href="tel:#">+55 (38) 123 45 67</a></div> <!-- INSERIR TELEFONE DA Biblioteca -->
                  </div>
                </li>
                <li>
                  <div class="unit unit-spacing-xs align-items-center">
                    <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                    <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div> <!-- INSERIR EMAIL -->
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
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li> <!-- INSERIR FACEBOOK -->
                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li> <!-- INSERIR INSTAGRAM -->
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
            <h1 class="font-weight-bold wow fadeInLeft">Cadastrar novo usuário</h1>
            <!--<p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>-->
          </div>
        </div>
      </div>
    </section>




    <!-- About page about section-->
    <section class="section section-md">
      <div class="container">
        <div class="row row-40 justify-content-left border border-primary rounded">
          <div class="col-12">
            <div class="offset-top-45 offset-lg-right-45">

              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-row justify-content-center mb-4">

                  <p class="col-12 mt-3 mb-3" id="subtitulo"><b>Dados pessoais</b></p>
                  <div class="col-12 col-md-12 mb-4">
                    <input type="text" placeholder="Nome completo" name="nome" required class="rounded form-control" autofocus>
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="Data de nascimento" name="data-nascimento" required class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="CPF" name="cpf" required class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="Código do usuário" name="codigo" required class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="password" placeholder="Senha" name="senha" required class="rounded form-control">
                  </div>

                  <p class="col-12 mb-3 mt-3" id="subtitulo"><b>Informações para contato</b></p>
                  <br/>
                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="Número para contato" name="telefone" class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="email" placeholder="E-mail" name="email" class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="Nome do responsável" name="nome-responsavel" class="rounded form-control"> <!--caso seja menor de idade-->
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="Número do responsável" name="numero-responsavel" class="rounded form-control">
                  </div>


                  <p class="col-12 mb-3 mt-3" id="subtitulo"><b>Endereço</b></p>
                  <div class="col-12 col-md-12 mb-4">
                    <input type="text" placeholder="Logradouro" name="logradouro" required class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="Bairro" name="bairro" required class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="number" placeholder="Número" name="numero" required class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="Complemento" name="complemento" class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-6 mb-4">
                    <input type="text" placeholder="CEP" name="cep" class="rounded form-control">
                  </div>

                  <div class="col-12 col-md-12 mt-3 mb-4">
                    <input type="submit" id="enviar" name="enviar" value="Cadastrar usuário" class="btn btn-primary pt-2 pb-2 mr-1 badge-pill"/>
                    <input type="reset" id="cancelar" name="cancelar" value=" Cancelar " class="btn btn-secondary pt-2 pb-2 pl-4 pr-4 ml-1 badge-pill"/>
                  </div>
                  <!-- ou rounded?? -->

                </div>
              </form>

            </div>
          </div>
          <?php
          if ( isset($_POST['nome']) ){


            $nome = $_POST['nome'];
            $nascimento = $_POST['data-nascimento'];
            $cpf = $_POST['cpf'];
            $identificacao = $_POST['codigo'];
            $email = $_POST['email'];
            $fone_contato = $_POST['telefone'];
            $nome_responsavel = $_POST['nome-responsavel'];
            $contato_responsavel = $_POST['numero-responsavel'];
            $rua = $_POST['logradouro'];
            $bairro = $_POST['bairro'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];
            $cep = $_POST['cep'];
            $senha = $_POST['senha'];
            $senha = md5($senha);



            if ($con){ //print "a conexão foi feita";
              if( verificar_identificacao($con,$identificacao) ){ // se for verdadeiro, vai enviar para o BD e o usuario será cadastrado
                if( verificar_email($con,$email) ){
                  $sql = "INSERT INTO usuarios (identificacao, nome, nascimento, cpf, email, fone_contato, nome_responsavel, contato_responsavel, rua, bairro, numero, complemento, cep, senha)
                  VALUES ('$identificacao','$nome','$nascimento','$cpf','$email','$fone_contato', '$nome_responsavel','$contato_responsavel','$rua','$bairro','$numero','$complemento', '$cep', '$senha')";

                  $resultado = mysqli_query($con, $sql);
                  if ($resultado){
                    print "<script>
                    alert('Usuário cadastrado - ID: $identificacao');
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
                } // fechando if do email
                else{
                  print "<script>alert('Email já cadastrado. Escolha outro!')</script>";
                }
              } // fechando if da identificacao
            } // fechando a conexao
          } // fechando o isset

          ?>





        </div>
      </div>

    </section>
    <!--______________________ RODAPÉ ____________________-->

    <footer class="section footer-classic section-sm">
      <div class="container">
        <div class="row row-30">
          <div class="col-lg-3 wow fadeInLeft">
            <!--Brand--><a class="brand" href="index.php"><img class="brand-logo" src="images/logo4.png" alt="" width="100" height="17"/></a>
            <p class="footer-classic-description offset-top-0 offset-right-25" style="text-align: justify;">СonsultBiz provides a full range of business consulting & advisory services to small, medium, and international companies worldwide. We use innovations and experience to drive your success.</p>
          </div>
          <div class="col-lg-3 col-sm-8 wow fadeInUp">
            <P class="footer-classic-title">Contatos</P>
            <div class="d-block offset-top-0">Av. Brasil - Centro, Janaúba - MG, 39445-102</div><a class="d-inline-block accent-link" href="mailto:#">info@demolink.org</a><a class="d-inline-block" href="tel:#">+1 800 123 45 67</a> <!-- TELEFONE E EMAIL -->
            <ul>
              <li>Horário de funcionamento:<span class="d-inline-block  text-white">Segunda à sexta das 7:30 às 18:00</span></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
            <P class="footer-classic-title">Links rápidos</P>
            <ul class="footer-classic-nav-list">
              <li><a href="index.php">Início</a></li>
              <li><a href="index.php#historia">História</a></li>
              <li><a href="acervo.php">Acervo</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </div>
          <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
            <P class="footer-classic-title">Instituições Públicas</P>
            <ul class="footer-classic-nav-list">
              <li><a href="#">Link 1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container wow fadeInUp" data-wow-delay=".4s">
        <div class="footer-classic-aside">
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. Todos os direitos reservados. Desenvolvido por Edio Mácio Silva Júnior, Geissi Éllen Medeiros Cangussu, Laisa Marcelino Santos Rodrigues e Lucas Gabriel Batista Gaudêncio. Design adaptado de <a href="https://www.templatemonster.com">TemplateMonster.</a></p>
          <ul class="social-links">
            <li><a class="fa fa-facebook" href="#"></a></li>
            <li><a class="fa fa-instagram" href="#"></a></li>
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
