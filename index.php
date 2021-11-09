
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ParáLibras</title>
    <!--<script language="javascript" src="JavaScript/cod.js"></script>-->
    <script src="jquerymin.js"></script>
    <link rel="icon" href="imagens/favicon.png">


    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>


    <!-- Bootstrap-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    
    <link rel="stylesheet" href="estilo.css"/>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .fonte-geral{
      font-family: candara; 
      font-size: 20px;
    }
    </style>

  </head>

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
          
          <a href="index.php" class="navbar-brand" id="logo" style="font-family: candara; font-size: 35px;">
            ParáLibras
          </a>

        </div>
        <!--janela login-->        

        <!--navbar-->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right" id="barra">
            <li><a style="font-family: candara; font-size: 20px;" href="#">Home</a></li>
            <li class="dropdown">

                <a style="font-family: candara; font-size: 20px;" href="#" class="dropdown-toggle" data-toggle="dropdown">Educação <span class="caret"></span></a>

                <ul class="dropdown-menu" id="drop">
                  <li><a style="font-family: candara; font-size: 20px;" href="historia.html">História</a></li>
                  <li><a style="font-family: candara; font-size: 20px;" href="videos.php">Materiais</a></li>           
                  <li><a style="font-family: candara; font-size: 20px;" href="videos.php">Vídeos</a></li>
                  <li><a style="font-family: candara; font-size: 20px;" href="enviar_arquivos.php">Envio de arquivos</a></li>
                  
                </ul>
                
            </li>
            <li><a style="font-family: candara; font-size: 20px;" href="contato.php">Contato</a></li>
            <li><a style="font-family: candara; font-size: 20px;" href="logout.php">Sair</a></li>
        </ul>
        </div>
        

      </div><!--/Container-->
    </nav><!--/nav-->

    <div class="capa">
      <div class="texto-capa">
        <h1 style="font-family: candara">Projeto ParáLibras</h1>
        <a style="font-family: candara; font-size: 25px;" href="" class="btn btn-custom btn-azul btn-lg">Vídeo de apresentação</a>
           
      </div>
    </div>

    <!--Conteúdo-->



    <!--Rodapé-->

    <div class="footer-top-area">
    <div></div>
    <div class="container">
      <div class="row">

          <div class="col-md-3 col-sm-6">
            <div class="footer-about-us">
              <h2 style="font-family: candara; font-size: 35px;">ParáLibras</h2><br><br>
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

    <form class="modal fade" id="janela">
        
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span >&times;</span>
              </button>
              <h4 class="modal-title">Efetuar Login</h4>
            </div>

              <div class="modal-body">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                </div>

                <div class="form-group">         
                  <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                <button type="submit" class="btn btn-primary">Login</button>

              </div>

          </div>

        </div>

      </form>   

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>