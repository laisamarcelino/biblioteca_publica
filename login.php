  <?php
  if( isset($_POST['identificacao'])){
    $identificacao = $_POST['identificacao'];
    $senha = $_POST['senha'];
    $senha = md5($senha);

    include_once "conexao.php";
    $con = conecta_mysql();
    $sql = "SELECT * FROM usuarios WHERE identificacao='$identificacao' AND senha='$senha'";

    $result = mysqli_query($con,$sql);
    if ($result) {
      $dados_usuario = mysqli_fetch_assoc($result);
      if (isset($dados_usuario["identificacao"])) {
        session_start();
        $_SESSION["id_codigo"] = $dados_usuario["id_codigo"];
        $_SESSION["identificacao"] = $dados_usuario["identificacao"];
        $_SESSION["senha"] = $dados_usuario["senha"];
        header("location:perfil-usuario.php");
      }
    }
    else {
      print "<script>
      alert('Erro de SQL');
      window.location.href=window.location.href;
      </script>";
    }
  }

  ?>

  <!DOCTYPE html>
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
    <link rel="stylesheet" href="css/style2.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
    #link-ou{
      text-decoration: none;
      background: linear-gradient(currentColor, currentColor) bottom / 0 .1em no-repeat;
      transition: 0.3s background-size;
    }

    #link-ou:hover{
      background-size: 100% .1em;

    }


  </style>
  </head>
  <body>
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
                  <li class="rd-nav-item"><a class="rd-nav-link" href="acervo.php">Acervo</a>
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
    <!-- </header> -->
    <!--Main section-->
    <section class="section main-section parallax-scene-js" style="background:url('images/2.jpg') no-repeat center center; background-size:cover;">
      <div class="container"><br>
        <div class="row justify-content-center">
          <div class="container-fluid w-100" id="login">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 col-md-6 col-lg-5 justify-content-center border border-secondary rounded align-middle pl-5 pr-5 wow slideInRight" data-wow-delay=".3s" id="login-formulario" style="background-color:rgba(255,255,255,0.9);animation-delay:0.3s; animation-name: slideInRight;">
                <h3 class="text-center mt-3 mb-3"> Entrar como leitor </h3>
                <form method="post" action="">

                  <label for="identificacao" style="color:black">Código de identificação: </label>
                  <input name="identificacao" type="text" id="identificacao" required class="form-control rounded" style="height: 45px; text-indent:10px;" autofocus>
                  <br/>
                  <label for="senha" style="color: black;">Senha: </label>
                  <input name="senha" type="password" id="senha" required class=" form-control rounded" style="height: 45px; text-indent:10px;">

                  <!--<div class="form-check mt-2">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
                </div>-->

                <center><button type="submit" class="btn btn-primary mt-3 pl-4 pr-4 badge-pill col-12 pt-2 pb-2">Entrar</button></center>

                <div class="d-flex mt-4 mb-1">
                  <hr class="my-auto flex-grow-1">
                  <div class="px-3 text-muted" style="font-size:12pt;">ou</div>
                  <hr class="my-auto flex-grow-1">
                </div>
                <p class="text-center mb-3"><a href="login-adm.php" style="color:#505cfd; font-size:12pt;" id="link-ou">Entrar como bibliotecária(o).</a></p>

              </form>
            </div>
          </div>
        </div>
        <div class="col-12 text-center offset-top-75" data-wow-delay=".2s"><!-- <a class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center" href="#" data-custom-scroll-to="about"><span class="fa-chevron-down"></span></a> --></div>
      </div>
    </div>
    <div class="decorate-layer">
      <div class="layer-1">
        <div class="layer" data-depth=".20"><img src="images/parallax-item-1-563x532.png" alt="" width="563" height="266"/>
        </div>
      </div>
      <div class="layer-2">
        <div class="layer" data-depth=".30"><img src="images/parallax-item-2-276x343.png" alt="" width="276" height="171"/>
        </div>
      </div>
      <div class="layer-3">
        <div class="layer" data-depth=".40"><img src="images/parallax-item-3-153x144.png" alt="" width="153" height="72"/>
        </div>
      </div>
      <div class="layer-4">
        <div class="layer" data-depth=".20"><img src="images/parallax-item-4-69x74.png" alt="" width="69" height="37"/>
        </div>
      </div>
      <div class="layer-5">
        <div class="layer" data-depth=".40"><img src="images/parallax-item-5-72x75.png" alt="" width="72" height="37"/>
        </div>
      </div>
      <div class="layer-6">
        <div class="layer" data-depth=".30"><img src="images/parallax-item-6-45x54.png" alt="" width="45" height="27"/>
        </div>
      </div>
    </div>
  </section>
  
  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <!--coded by Drel-->
  </body>
  </html>
