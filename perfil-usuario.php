  <!DOCTYPE html>

  <?php
  session_start();
  if ( !isset($_SESSION["id_codigo"]) ){
    header("location:login.php?erro=2");
  }
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
    <link rel="stylesheet" href="css/style2.css">
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
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="perfil-usuario.php">Perfil</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="acervo-usuario.php">Acervo</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link dropdown-toggle" href="perfil-usuario.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size: 10pt;">
                        <a class="dropdown-item" href="sair-usuario.php">Sair</a>
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

    <br>

    <!--area do leitor-->
    <section class="section section-md bg-xs-overlay" style="background:url('images/perfil1.jpg')no-repeat;background-size:cover;">
      <div class="container">
        <div class="row row-50 justify-content-center">
          <div class="col-12 text-center col-md-10 col-lg-8">
            <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Área do <span class="text-primary">leitor</span></h3>
            <p>Aqui você tem acesso aos seus dados disponíveis no sistema bibliotecário, renova o livro que está lendo, acompanha o que deseja ler e descobre se há multas a serem pagas.</p>
          </div>
        </div>
        <div class="row row-30 justify-content-center">
          <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
            <div class="pricing-box bg-gray-dark">
              <div class="pricing-box-tittle">Dados Pessoais</div>
              <hr/>

              <?php
              //código para selecionar dados do usuario
              $sql = "SELECT * FROM usuarios WHERE id_codigo='$id_codigo'";

              $resultado = mysqli_query($con,$sql);
              if($resultado){
                $usuarios = array();
                while( $linha = mysqli_fetch_assoc($resultado) ){
                  $usuarios[] = $linha;
                }
                //mostrando os livros
                foreach ($usuarios as $usuario) {
                  $_SESSION["nome"] = $usuario["nome"];
                  $nome = $usuario["nome"];
                  print "<p>Nome: ".$usuario['nome']."</p>";
                  print "<p>Código: ".$usuario['identificacao']."</p>";
                  print "<p>Nascimento: ".$usuario['nascimento']."</p>";
                  print "<p>CPF: ".$usuario['cpf']."</p>";
                  print "<p>E-mail: ".$usuario['email']."</p>";
                  print "<p>Número para contato: ".$usuario['fone_contato']."</p>";
                  print "<p>Endereço: ".$usuario['rua'].", ".$usuario['numero'].", ".$usuario['bairro']."</p>";
                  $id = $usuario["id_codigo"];
                }
              }
              ?>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
            <div class="pricing-box bg-gray-primary">
              <div class="pricing-box-tittle">Leitura em andamento</div>
              <hr/>
              <?php
              //código para selecionar dados do usuario
              $hoje = date("Y/m/d");
              $sql = "SELECT livros.id_livro, livros.titulo, livros.autor, livros.editora,
              presencial.id_presencial, presencial.id_codigo, presencial.identificacao, presencial.id_livro, presencial.limite, presencial.data_entrega, data_reserva,
              DATEDIFF('$hoje', data_entrega) AS qtd_dias
              FROM presencial
              JOIN livros
              ON presencial.id_livro = livros.id_livro
              WHERE presencial.id_codigo = $id
              ORDER BY data_entrega ASC";

              // $sql = "SELECT livros.id_livro, livros.titulo, livros.autor, livros.editora,
              // usuarios.id_codigo, usuarios.identificacao,
              // presencial.id_presencial, presencial.id_codigo, presencial.id_livro, presencial.data_entrega
              // FROM presencial, usuarios, livros
              // WHERE id_codigo = '$id_codigo'";

              $resultado = mysqli_query($con,$sql);
              if($resultado){
                $usuarios = array();
                while( $linha = mysqli_fetch_assoc($resultado) ){
                  $usuarios[] = $linha;
                }
                //mostrando os livros
                foreach ($usuarios as $usuario) {
                  $_SESSION["id_codigo"] = $usuario["id_codigo"];
                  $_SESSION["id_livro"] = $usuario["id_livro"];
                  $_SESSION["identificacao"] = $usuario["identificacao"];
                  $_SESSION["id_presencial"] = $usuario["id_presencial"];
                  $id_presencial = $usuario["id_presencial"];
                  $id_livro = $usuario["id_livro"];
                  $data = $usuario["data_entrega"];
                  $qtd_dias = $usuario["qtd_dias"];
                  $qtd_dias *= 2;
                  $limite = $usuario["limite"];

                  print "<b><p style='margin-top: 20px;'>Título: ".$usuario["titulo"]."</p></b>";
                  print "<p>Autor: ".$usuario["autor"]."</p>";
                  print "<p>Editora: ".$usuario["editora"]."</p>";
                  print "<p>Vencimento: ".inverteData($data)."</p>";
                  if($qtd_dias >= 0){
                    print "<p>Multa: R$ ".$qtd_dias.",00</p>";
                  }
                  else{

                  }


                  if($limite == 1){
                    print "<a class='button button-190 button-circle btn-rounded-outline' href='renovar_livro_usuario.php?id_codigo=$id&id_livro=$id_livro&id_presencial=$id_presencial'>Renovar</a>";
                  }
                  if($limite == 0){

                  }
                  print "<hr>";
                }
              }
              ?>
            </div>
          </div>


          <?php
          $sql2 = "SELECT count(id_fila) AS qtd_fila FROM entrar_fila WHERE entrar_fila.id_codigo = '$id_codigo'";
          $result2 = mysqli_query($con,$sql2);
          $qtd2 = mysqli_fetch_assoc($result2);
          $existe = $qtd2['qtd_fila'];

          if($existe == 0){



                  ?>
                  <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
            <div class="pricing-box bg-gray-dark">
              <div class="pricing-box-tittle">Leitura em espera</div>
              <hr/>
              <p>Título:</p>
              <p>Autor:</p>
              <p>Editora:</p>
              <p>Estado: </p> <!--Disponível ou indisponivel-->
              <!-- <p>Você tem: <?php //print "x"; ?> dias para buscar</p> -->
            </div>
          </div>
          <?php

            }
            elseif($existe>0){
          //     $sql = "SELECT entrar_fila.id_fila, entrar_fila.id_codigo, entrar_fila.id_livro, entrar_fila.data_inicio, livros.qtd, usuarios.identificacao
          // FROM entrar_fila
          // JOIN livros
          // ON entrar_fila.id_livro = livros.id_livro
          // JOIN usuarios
          // ON entrar_fila.id_codigo = $id";
          // $resultado = mysqli_query($con,$sql);
          // if($resultado){
          //   $filas = array();
          //   while( $linha = mysqli_fetch_assoc($resultado) ){
          //     $filas[] = $linha;
          //   }
          //   //mostrando os livros
          //   foreach ($filas as $fila) {
          //     $id_fila = $fila["id_fila"];
          //     $id_livro = $fila["id_livro"];
          //     $data_inicio = $fila["data_inicio"];
          //     $qtd = $fila["qtd"];
          //     $identificacao = $fila["identificacao"];
          ?>
          <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
          <div class="pricing-box bg-gray-dark">
          <div class="pricing-box-tittle">Leitura em espera</div>
          </div>
          <?php
          // SELECT * FROM `entrar_fila` WHERE data_inicio >= "2021-02-04 17:13:10" ORDER BY data_inicio
          $sql = "SELECT * FROM livros
          JOIN entrar_fila
          ON entrar_fila.id_livro = livros.id_livro AND entrar_fila.id_codigo = $id_codigo";
          $resultado = mysqli_query($con,$sql);
          if($resultado){
            $filas = array();
            while( $linha = mysqli_fetch_assoc($resultado) ){
              $filas[] = $linha;
            }
            //mostrando os livros

            foreach ($filas as $fila){
              $_SESSION["edio"]= $fila["id_livro"];
              $titulo = $fila["titulo"];
              $autor = $fila["autor"];
              $editor = $fila["editora"];
              $qtd = $fila["qtd"];
              if($qtd == 0){
                $estado   = "Indisponível";
              }
              elseif($qtd == 1){
                $estado = "Disponível";
              }



              ?>

            <div class="pricing-box bg-gray-dark .mb-0">
            <br>

              <p>Título: <?php print $titulo ?></p>
              <p>Autor: <?php print $autor ?></p>
              <p>Editora: <?php print $editor ?></p>
              <p>Estado: <?php print $estado ?></p> <!--Disponível ou indisponivel-->
              <?php


          // MEXER PARA SO APARECER SE FOR O PROX DA FILA
              $sqlprox = "SELECT entrar_fila.id_fila, entrar_fila.id_codigo, entrar_fila.id_livro, entrar_fila.data_inicio, livros.id_livro, livros.qtd
               FROM entrar_fila
               JOIN livros
               ON entrar_fila.id_livro = livros.id_livro

               ORDER BY id_fila, data_inicio ASC limit 1";
               $resultado1 = mysqli_query($con,$sqlprox);
               if($resultado1){
                 $filas = array();
                 while( $linha = mysqli_fetch_assoc($resultado1) ){
                   $filas[] = $linha;
                 }


                 foreach ($filas as $fila) {
                   $id_livro = $_SESSION["edio"];
                  // $_SESSION["id_codigo"] = $id;
                   $id_prox = $fila["id_codigo"];
                   //print $id_prox;
                  //  print $id_prox;
                   if($id_prox == $id){   // eu acho que o erro ta por aq
                    if($qtd == 1){
                      ?>
                      <form action="" method="post">
                      <input type="submit" class="button button-190 button-circle btn-rounded-outline" style="margin: 20px 0px 20px 0px;" value="Reservar">
                      <input type='hidden' value='1' name='reservar'/>
                      <input type='hidden' name='id_livro' value='<?php print "".$_SESSION['edio']."" ?>' />
                      <input type='hidden' name='id_codigo' value='<?php print "".$_SESSION['id_codigo']."" ?>' />
                      </form>
          <?php

                    }
                    elseif($qtd == 0){
                        print "Você é o próximo da fila.";
                    }
                   }
                   elseif($id_prox != $id){

                     // pegar data em que a pessoa fez a solicitacao primeiro
                     // usar a data pra achar qnts negos tem na frente dela

                     $sql = "SELECT data_inicio FROM entrar_fila WHERE id_livro = '$id_livro' AND id_codigo = '$id'";
                     $result = mysqli_query($con,$sql);
                     $q = mysqli_fetch_assoc($result);
                     if(isset($result)){
                       $data_solicitacao = $q["data_inicio"];
                       // $sql1 = "SELECT count(id_fila) AS qtd_fila FROM entrar_fila WHERE id_livro = '$id_livro' AND id_codigo != $id";
                       $sql1 = "SELECT count(data_inicio) AS qtd_fila FROM entrar_fila WHERE id_livro = '$id_livro' AND id_codigo != $id AND data_inicio < '$data_solicitacao'";
                       $result1 = mysqli_query($con,$sql1);
                       $qtd = mysqli_fetch_assoc($result1);
                       if(isset($result1)){
                         $qtd_fila = $qtd['qtd_fila'];
                               if($qtd_fila>1){
                                 ?>
                                 <p>Há <?php print $qtd_fila?> pessoas na sua frente. </p>
                                 <?php
                               }
                               if($qtd_fila == 1){?>
                                 <p>Há <?php print $qtd_fila?> pessoa na sua frente. </p>
                                 <?php
                               }
                         }
                     }

                   }
              ?>
              <!-- <p>Você tem: <?php //print "x"; ?> dias para buscar</p> -->
              </div>
              <?php
            }
          }
          }
          }
          }

          if (isset($_POST["reservar"]) ){
          if ($con){

          $id_livro2 = $_POST["id_livro"];
          $hoje = date('Y/m/d');

          $sql = "INSERT INTO reservar (id_codigo, id_livro, data)
          VALUES ('$id','$id_livro2', '$hoje')";
          $sql2 = "DELETE FROM entrar_fila WHERE id_livro = '$id_livro2' AND id_codigo = '$id'";

          $resultado2 = mysqli_query($con, $sql2);
          $resultado = mysqli_query($con, $sql);
          if ($resultado AND $resultado2){
          print "<script>
          alert('Seu livro foi enviado para reserva');
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
          } //fechando o isset do enviar

          if (isset($_POST["reservar"]) ){
          if ($con){

          $id_livro3 = $_POST["id_livro"];

          $sql = "UPDATE livros SET qtd=0 where id_livro = $id_livro3";

          $resultado = mysqli_query($con, $sql);
          if ($resultado){
          // print "<script>
          // alert('Seu livro foi enviado para reserva');
          // window.location.href=window.location.href;
          // </script>";
          // serve para recarregar a página e não deixar que o usuário se cadastre duas vezes

          } // fechando o resultado
          else {
          print "<script>
          alert('Erro de SQL');
          window.location.href=window.location.href;
          </script>";
          }
          }
          }
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
