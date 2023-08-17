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

  <br>

<br><br><br><br><br>
      <div class="container">
        <div class="row justify-content-center border">
          <form style="padding: 50px;" action="" method="post">
            <center><h5>Entrar na fila</h5></center>
            <?php


            ?>
            <br>
            <div class="form-row">
              <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

              <?php
              $id_livro = $_GET["id_livro"];
              $id_codigo = $_GET["id_codigo"];
              $sql = "SELECT * FROM livros WHERE id_livro = $id_livro";
              $resultado = mysqli_query($con,$sql);
              $hoje = date('d/m/Y');
              if($resultado){
                $livros = array();
                while( $linha = mysqli_fetch_assoc($resultado) ){
                  $livros[] = $linha;

                }
                foreach ($livros as $livro) {
                  $id_codigo = $_GET["id_codigo"];
            $sql1 = "SELECT count(id_fila) AS qtd_fila FROM entrar_fila WHERE id_livro = '$id_livro'";

            $sql2 = "SELECT count(id_fila) AS qtd_fila FROM entrar_fila WHERE id_livro = '$id_livro' AND id_codigo = '$id_codigo'";

            $result1 = mysqli_query($con,$sql1);
            $result2 = mysqli_query($con,$sql2);

            $qtd = mysqli_fetch_assoc($result1);
            $qtd2 = mysqli_fetch_assoc($result2);

            $qtd2_ = $qtd2['qtd_fila'];
            if($qtd2_ == 0){
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
                else{

                    }
              }
              else{
                print "<p style='color:red'>Você já está nessa fila</p>";
                  }

                  ?>

                <br>
                <label>Título do Livro:</label>
                <input type="text" name="nome" rows="1" class="form-control" value="<?php print "".$livro["titulo"].""?>" disabled>
                <br>
                <label>Autor:</label>
                <input type="text" name="nome" rows="1" class="form-control" value="<?php print "".$livro["autor"].""?>" disabled>
                <br>
                <label>Etiqueta:</label>
                <input type="text" name="nome" rows="1" class="form-control" value="<?php print "".$livro["etiqueta"].""?>" disabled>
                <br>
                <label>Data:</label>
                <input type="text" name="nome" rows="1" class="form-control" value="<?php print "".$hoje.""?>" disabled>
              </div>
            </div>
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button> -->

            <button type='button' class='btn btn-secondary'><a href='acervo-usuario.php'>Voltar</a></button>
           <?php if($qtd2_ == 0){
              if(isset($result1)){
                ?>
                <input type="submit" class="btn btn-primary" style="margin: 20px 0px 20px 0px;" value="Confirmar">
            <input type='hidden' value='1' name='marcar_concluido'/>
            <!-- <input type='hidden' name='id_presencial' value='<?php //print "".$_SESSION['id_presencial']."" ?>' /> -->
            <input type='hidden' name='id_livro' value='<?php print "".$_SESSION['id_livro']."" ?>' />
            <input type='hidden' name='id_codigo' value='<?php print "".$_SESSION['id_codigo']."" ?>' />
                <?php
                }
                else{

                    }
              }
              else{
                ?>
                <input type="submit" class="btn btn-primary" style="margin: 20px 0px 20px 0px;" value="Confirmar" disabled>
<?php
                  }
                ?>



            <!-- <button type="submit" class="btn btn-primary">Confirmar</button> -->
          </form>
        </div>
      </div>
      <?php

} // fechando foreach
} // fechando resultado

if(isset($_POST['marcar_concluido'])){
  $id_livro = $livro['id_livro'];
  $sql = "INSERT INTO entrar_fila (id_codigo, id_livro)
  VALUES ('$id_codigo','$id_livro')";
  $resultado = mysqli_query($con,$sql);
  if($resultado){
    print "<script>
    alert('Você entrou na fila.');
    window.location.href=window.location.href;
    </script>";
  }
  else{
    print "<script>
    alert('Erro de SQL!');
    window.location.href=window.location.href;
    </script>";
  }
}
?>
      <br>








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
