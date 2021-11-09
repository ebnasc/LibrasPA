<?php
  include("conectar.php");

  $msg = false;

  if(isset($_FILES['arquivo'])){

    $arquivo = $_FILES['arquivo'];
    $extensao = strtolower(strrchr($_FILES['arquivo']['name'], '.'));
    //$arquivo_nome = md5(time()) . $extensao;
    $arquivo_nome = md5(uniqid($arquivo['name'])) . $extensao;
    /*$diretorio = "upload/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$arquivo_nome);*/

    $sql_code = "INSERT INTO arquivos (codigo, arquivo, data) VALUES(null, '$arquivo_nome', NOW())";

    
    if(!mysqli_query($conectar,$sql_code))
      $msg = "Falha ao enviar o arquivo"; 
      
    else
      $msg = "Arquivo enviado com sucesso!";
  }


?>  

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LIBRAS-PA</title>
    <link rel="icon" href="imagens/favicon.png">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="ajustes.css" />
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="teste.css">
    <link rel="stylesheet" href="video.css">

  </head>

  <style>
      .fonte-geral{
      font-family: candara; 
      font-size: 20px;
    }
    </style>

  <body>
  

    <!--Barra de Navegação Principal -->
    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">

        <!--Header-->
        <div class="navbar-header">
          <!--botao toggle-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegacao</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a style="font-family: candara; font-size: 35px;" href="index.php" class="navbar-brand" id="logo">
            ParáLibras
          </a>

        </div>
        <!--janela login-->

        

        <!--navbar-->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right" id="barra">
            <li><a style="font-family: candara; font-size: 20px;" href="index.php">Home</a></li>
            <li class="dropdown">

                <a style="font-family: candara; font-size: 20px;" href="#" class="dropdown-toggle" data-toggle="dropdown">Educação <span class="caret"></span></a>

                <ul class="dropdown-menu" id="drop">
                  <li><a style="font-family: candara; font-size: 20px;" href="historia.html">História</a></li>
                  <li><a style="font-family: candara; font-size: 20px;" href="materiais.html">Materiais</a></li>
                  <li><a style="font-family: candara; font-size: 20px;" href="videos.php">Vídeos</a></li>
                </ul>
            </li>
            <li><a style="font-family: candara; font-size: 20px;" href="contato.php">Contato</a></li>
            <li><a style="font-family: candara; font-size: 20px;" href="logout.php">Sair</a></li>
          </ul>
        </div>
        

      </div><!--/Container-->
    </nav><!--/nav-->

  
    <!--Conteúdo-->

<section id="dados-vid" class="bordenvio">
  <div class="container">
      <h3 id="hist-title" style="font-family: raleway">Envio de arquivos</h3>
        <p style="font-family: raleway; font-size: 16px">Faça sua contribuição conosco, enviando vídeos, artigos ou imagens.</p>

        <form method="POST" action="enviar_arquivos.php" enctype="multipart/form-data">
         <div class="area-upload">
            <label for="upload-file" class="label-upload">
            <i class="fas fa-cloud-upload-alt fa-2x"></i>
             <div class="texto" style="font-family: raleway">Clique aqui ou arraste o arquivo</div>
           </label>
            <input required name="arquivo" type="file" accept="audio/*,video/*,image/*" id="upload-file" multiple/>         
      
          <div class="lista-uploads"></div>

        </div> 

        <script src="dragdrop.js"></script><br>
        <input style="font-family: raleway" class="button is-medium is-link" type="submit" value="Enviar" name="upar" />
    </form>
   </div>
</section>   

    <!--Rodapé-->

<div class="footer-top-area" id="rodup">
  <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-3 col-sm-6">
            <div class="footer-about-us">
              <h2 style="font-family: candara; font-size: 35px;">ParáLibras</h2><br>
              <div class="foot-nav">

                  <a href="#"><img src="imagens/facebook.png" class="item-social-effect item-social"></a>
                  <a href="#"><img src="imagens/instagram.png" class="item-social-effect item-social"></a>
                  <a href="#"><img src="imagens/twitter.png" class="item-social-effect item-social"></a>              
           
              </div>
            </div>
          </div>

        <div class="col-md-3 col-sm-6">
          <div class="footer-menu">
            <h2 class="footer-wid-title">Links</h2>
            <ul class="nav">
              <li><a class="fonte-geral" href="#">Site da UFSC</a></li>
              <li><a class="fonte-geral" href="#">Site do INES</a></li>
              <li><a class="fonte-geral" href="#">Documentação</a></li>              
            </ul>
          </div>
        </div>


        <div class="col-md-3 col-sm-6">
          <div class="footer-menu">
            <h2 class="footer-wid-title">Informações</h2>
            <ul class="nav">
              <li><a class="fonte-geral" href="#">Sobre</a></li>
              <li><a class="fonte-geral" href="#">Parcerias</a></li>
              <li><a class="fonte-geral" href="#">Novidades</a></li>              
            </ul>
          </div>
        </div>
          
       
        <div class="col-md-3 col-sm-6">
           <div class="footer-menu">
            <h2 class="footer-wid-title">Comunidade</h2>
            <ul class="nav">
              <li><a class="fonte-geral" href="#">Ajuda</a></li>
              <li><a class="fonte-geral" href="#">Ligações Externas</a></li>
              <li><a class="fonte-geral" href="#">Equipe</a></li>                          
            </ul>
          </div>
        </div>

      </div>
  </div>
</div> 

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="/res/site/js/owl.carousel.min.js"></script>
    <script src="/res/site/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="/res/site/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="/res/site/js/main.js"></script>
  </body>
</html>



