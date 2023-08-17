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
            <h1 class="font-weight-bold wow fadeInLeft">Multa</h1>
            <!--<p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>-->
          </div>
        </div>
      </div>
    </section>


    <div class="container mt-5">
      <div class="row justify-content-center mb-5">
        <div class="col-12 border border-secondary rounded pl-4 pr-4">
          <h5 class="mt-3 pb-2">Pesquisar usuário: </h5>
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

          </div>

        </div> <!-- div form-row -->
      </form>

      <!-- pesquisa avançada -->

      <div class="collapse" id="demo">
        <form method="post" action="">
          <div class="form-row justify-content-center">

            <div class="col-12 col-md-12 mb-3">
              <input type="text" placeholder="Código de identificação" name="identificacao" class="rounded form-control">
            </div>

            <div class="col-12 col-md-12 mb-3">
              <input type="text" placeholder="Nome" name="nome" class="rounded form-control">
            </div>

            <div class="col-12 col-md-12 mb-3">
              <input type="text" placeholder="Data de nascimento" name="nascimento" class="rounded form-control">
            </div>

            <div class="col-12 col-md-12 mb-3">
              <input type="text" placeholder="CPF" name="cpf" class="rounded form-control">
            </div>

            <div class="col-12 col-md-12 mb-3">
              <input type="text" placeholder="Nome do responsável" name="nome_responsavel" class="rounded form-control"> <!--caso seja menor de idade-->
            </div>

            <div class="col-12 col-md-6 mb-3">
              <input type="email" placeholder="E-mail" name="email" class="rounded form-control">
            </div>


            <div class="col-12 col-md-6">
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Todos</option>
                <option value="2">Em posse de livro(s)</option> <!-- ver um modo melhor de expressar isso -->
                <option value="3">Deve/Tem multa</option> <!-- ver um modo melhor de expressar isso -->
              </select>
            </div>

            <div class="col-12 col-md-12 mt-3 mb-4">
              <input type="submit" id="enviar" name="enviar2" value="Buscar" class="btn btn-primary rounded"/>
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
    $hoje = date("Y/m/d");
    $pesquisa = $_POST['palavra-chave'];

    $sql = "SELECT usuarios.id_codigo, usuarios.identificacao, usuarios.nome, usuarios.nascimento, usuarios.cpf,
    usuarios.senha, usuarios.fone_contato, usuarios.email, usuarios.nome_responsavel, usuarios.contato_responsavel,
    usuarios.rua, usuarios.bairro, usuarios.numero, usuarios.complemento, usuarios.cep,
    livros.id_livro, livros.titulo, livros.etiqueta, livros.autor, presencial.id_presencial, presencial.data_entrega,
    data_reserva, DATEDIFF ('$hoje',data_entrega) AS quantidade_dias

    FROM presencial
    JOIN usuarios
    ON presencial.id_codigo = usuarios.id_codigo
    JOIN livros
    ON presencial.id_livro = livros.id_livro
    WHERE usuarios.identificacao LIKE '%$pesquisa%' OR usuarios.nome LIKE '%$pesquisa%' OR usuarios.nascimento LIKE '%$pesquisa%' OR
    usuarios.cpf LIKE '%$pesquisa%' OR usuarios.fone_contato LIKE '%$pesquisa%' OR usuarios.email LIKE '%$pesquisa%' OR
    usuarios.nome_responsavel LIKE '%$pesquisa%' OR usuarios.contato_responsavel LIKE '%$pesquisa%' OR usuarios.contato_responsavel LIKE '%$pesquisa%' OR
    usuarios.rua LIKE '%$pesquisa%' OR usuarios.bairro LIKE '%$pesquisa%' OR usuarios.numero LIKE '%$pesquisa%' OR
    usuarios.complemento LIKE '%$pesquisa%' OR usuarios.cep LIKE '%$pesquisa%' OR
    livros.titulo LIKE '%$pesquisa%' OR livros.etiqueta LIKE '%$pesquisa%' OR livros.autor LIKE '%$pesquisa%' OR
    presencial.data_entrega LIKE '%$pesquisa%'
    ORDER BY quantidade_dias DESC";

    print "<section class='section section-md'>";
    print "<div class='container justify-content-center mb-5'>";


    //$id_codigo = $_SESSION["id_codigo"];

    $resultado = mysqli_query($con,$sql);
    if($resultado){
      $livros = array();
      while( $linha = mysqli_fetch_assoc($resultado) ){
        $livros[] = $linha;

      }
      //mostrando os livros

      foreach ($livros as $livro) {
        $_SESSION["id_presencial"] = $livro["id_presencial"];
        $_SESSION["id_codigo"] = $livro["id_codigo"];
        $_SESSION["id_livro"] = $livro["id_livro"];

        $quantidade_dias = $livro["quantidade_dias"];
        $id_presencial = $livro["id_presencial"];
        $id_codigo = $livro["id_codigo"];
        $id_livro = $livro["id_livro"];


        print "<div class='row justify-content-left border border-secondary rounded pr-3 pl-3 pb-5'>";
        print "<div class='col d-none d-md-block d-lg-block d-lg-block col-md-4  text-left'>";
        // print "</div>";
        // print "  <div class='offset-top-45 offset-lg-right-45 col-12 col-md-7'>";
        if($quantidade_dias >=0){


        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Nome completo: </span> ".$livro["nome"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Data de nascimento: </span> ".$livro["nascimento"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>CPF: </span> ".$livro["cpf"]."</p>";
        //print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Senha: </span> ".$livro["senha"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Número para contato: </span> ".$livro["fone_contato"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>E-mail: </span> ".$livro["email"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Nome do responsável: </span> ".$livro["nome_responsavel"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Número do responsável: </span> ".$livro["contato_responsavel"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Endereço: </span> ".$livro["rua"].", nº ".$livro["numero"].", bairro ".$livro["bairro"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'><b>O usuário está devendo: R$";
        print $quantidade_dias = $quantidade_dias*0.5;
        print ",00</span> </b></p>";




        }
        print "</div>";
        print "</div>";
      } // fechando o foreach

      print"</div>";// fechando a div do conteiner
      print"</section>";
    }

  } // fechando o isset

  ?>


  <?php
  // ---------- Só deixar os livros selecionados  ------------------
  if ( !isset($_POST['palavra-chave']) ){

    $hoje = date("Y/m/d");
    $sql = "SELECT usuarios.id_codigo, usuarios.identificacao, usuarios.nome, usuarios.nascimento, usuarios.cpf,
    usuarios.senha, usuarios.fone_contato, usuarios.email, usuarios.nome_responsavel, usuarios.contato_responsavel,
    usuarios.rua, usuarios.bairro, usuarios.numero, usuarios.complemento, usuarios.cep,
    livros.id_livro, livros.titulo, livros.etiqueta, livros.autor, presencial.id_presencial, presencial.data_entrega,
    data_reserva, DATEDIFF ('$hoje',data_entrega) AS quantidade_dias

    FROM presencial
    JOIN usuarios
    ON presencial.id_codigo = usuarios.id_codigo
    JOIN livros
    ON presencial.id_livro = livros.id_livro
    ORDER BY quantidade_dias DESC";

print "<center><h4>Verificar valor da multa</h4></center>";
    print "<section class='section section-md'>";
    print "<div class='container justify-content-center mb-5'>";



    print "  <br>";

    //$id_codigo = $_SESSION["id_codigo"];

    $resultado = mysqli_query($con,$sql);
    if($resultado){
      $livros = array();
      while( $linha = mysqli_fetch_assoc($resultado) ){
        $livros[] = $linha;

      }
      //mostrando os livros

      foreach ($livros as $livro) {
        $_SESSION["id_presencial"] = $livro["id_presencial"];
        $_SESSION["id_codigo"] = $livro["id_codigo"];
        $_SESSION["id_livro"] = $livro["id_livro"];

        $quantidade_dias = $livro["quantidade_dias"];
        // $quantidade_dias = '2';
        $id_presencial = $livro["id_presencial"];
        $id_codigo = $livro["id_codigo"];
        $id_livro = $livro["id_livro"];


        print "<div class='row justify-content-left border border-secondary rounded pr-3 pl-3 pb-5'>";
        print "<div class='col d-none d-md-block d-lg-block d-lg-block col-md-4  text-left'>";

        // print "</div>";
        // print "  <div class='offset-top-45 offset-lg-right-45 col-12 col-md-7'>";
        if($quantidade_dias >=0){
          print "  <br>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Nome completo: </span> ".$livro["nome"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Data de nascimento: </span> ".$livro["nascimento"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>CPF: </span> ".$livro["cpf"]."</p>";
        //print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Senha: </span> ".$livro["senha"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Número para contato: </span> ".$livro["fone_contato"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>E-mail: </span> ".$livro["email"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Nome do responsável: </span> ".$livro["nome_responsavel"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Número do responsável: </span> ".$livro["contato_responsavel"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span class='font-weight-bold text-gray-dark'>Endereço: </span> ".$livro["rua"].", nº ".$livro["numero"].", bairro ".$livro["bairro"]."</p>";
        print "<p class='wow fadeInUp' data-wow-delay='.4s'><span style='color:darkred;' class='font-weight-bold text-gray-dark'><b>O usuário está devendo: R$";
        print $quantidade_dias = $quantidade_dias*0.5;
        print ",00</span> </b></p>";
        }
        else{}
        print "</div>";
        print "</div>";
      } // fechando o foreach


      

    }
    print"</div>";// fechando a div do conteiner
      print"</section>";
  }
  
  ?>


  <!-- About page about section-->
  <!--<section class="section section-md">-->
  <!--  <div class="container justify-content-center mb-5">-->
  <!--    <div class="row justify-content-left rounded pr-3 pl-3 pb-5">-->
  <!--      <div class="col d-none d-md-block d-lg-block d-lg-block col-md-4  text-center"></div>-->
  
  
  <!--      <div class="offset-top-45 offset-lg-right-45 col-12 col-md-7">-->
  
          
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!--</section>-->
  
  
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
  <script type="text/javascript">
  $('#myModal').on('show.bs.modal', function (event) {                                                       <<<<<<<<<<<#myModal = nome do modal
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipientId    = button.data('id')                                                                 <<<<<<<<<<< button.data('id') é o data-id que você passou em cima
    var recipientNome = button.data('nome') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#id').val(recipientId) << pega o valor armazenado no recipient e substitui no modal onde o #id = o id do campo no modal para substituir
    modal.find('#nome').val(recipientNome)
  })
  </script>
  <!--coded by Drel-->
  </body>
  </html>
