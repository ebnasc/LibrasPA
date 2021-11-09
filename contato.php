
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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="ajustes.css">
    <link rel="stylesheet" href="stycontato.css">
    <link rel="stylesheet" href="bulma/css/bulma.css">   


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
            <li><a class="fonte-geral" href="index.php">Home</a></li>
            <li class="dropdown">

                <a href="#" class="fonte-geral" class="dropdown-toggle" data-toggle="dropdown">Educação <span class="caret"></span></a>

                <ul class="dropdown-menu" id="drop">
                  <li><a class="fonte-geral" href="historia.html">História</a></li>
                  <li><a class="fonte-geral" href="materiais.html">Materiais</a></li> 
                                   
                  <li><a class="fonte-geral" href="videos.php">Vídeos</a></li>
                  <li><a class="fonte-geral" href="enviar_arquivos.html">Envio de arquivos</a></li> 
                  
                </ul>
            </li>
            <li><a class="fonte-geral" href="logout.php">Sair</a></li>
          </ul>
        </div>
        

      </div><!--/Container-->
    </nav><!--/nav-->

  
    <!--Conteúdo-->
    <div>
    <section id="dados-cont" class="contvid">
      <section class="section">
      <div class="container ">
        <div class="columns is-centered">
          <div class="columns is-half ">
            <h2 class="title has-text-centered footer-wid-title">Entre em contato conosco</h2>
          </div>
        </div>

        <form action="enviar.php" method="POST">
              <div class="field ">
                <label style="font-family: raleway; font-size: 20px;">Nome</label>
                <div class="control contvidf">
                  <input name="nome" class="input" type="text"placeholder="Seu Nome">
                </div>
              </div>  

              <div class="field">
                <label style="font-family: raleway; font-size: 20px;">E-mail *</label>
                <div class="control contvidf">
                  <input name="email" class="input" type="email"placeholder="Seu E-mail">
                </div>
              </div>  

              <div class="field">
                <label style="font-family: raleway; font-size: 20px;">Assunto</label>
                <div class="control contvidf">
                  <div class="select is-fullwidth">
                    <select name="assunto">
                      <option style="font-family: raleway; font-size: 20px;">Reportar erro</option>
                      <option style="font-family: raleway; font-size: 20px;">Sugestão</option>
                      <option style="font-family: raleway; font-size: 20px;">Outro</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="field">
                <label style="font-family: raleway; font-size: 20px;">Mensagem *</label>
                <div class="control contvidf">
                  <textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem" maxlength="2000"></textarea>
                </div>
              </div> 
              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link is-medium" style="font-family: raleway; font-size: 20px;">Enviar</button>
                </div>
              </div> 
             
        </form>

      </div>
         

      
      </section>
    </section>
</div>


    <!--Rodapé-->
  
  <div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-3 col-sm-4">
            <div class="footer-about-us">
              <h2 style="font-family: candara; font-size: 35px;"  class="footer-wid-title">ParáLibras</h2><br>
              <div class="foot-nav">

                  <a href="#"><img src="imagens/facebook.png" class="item-social-effect item-social"></a>
                  <a href="#"><img src="imagens/instagram.png" class="item-social-effect item-social"></a>
                  <a href="#"><img src="imagens/twitter.png" class="item-social-effect item-social"></a>              
           
              </div>
            </div>
          </div>

        <div class="col-md-2 col-sm-4">
          <div class="footer-menu">
            <h2 class="footer-wid-title">Links</h2>
            <ul class="nav">
              <li><a class="fonte-geral" href="#">Site da UFSC</a></li>
              <li><a class="fonte-geral" href="#">Site do INES</a></li>
              <li><a class="fonte-geral" href="#">Documentação</a></li>              
            </ul>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="footer-menu">
            <h2 class="footer-wid-title">Informações</h2>
            <ul class="nav">
              <li><a class="fonte-geral" href="#">Sobre</a></li>
              <li><a class="fonte-geral" href="#">Parcerias</a></li>
              <li><a class="fonte-geral" href="#">Novidades</a></li>              
            </ul>
          </div>
        </div>
          
       
        <div class="col-md-2 col-sm-4">
           <div class="footer-menu">
            <h2 class="footer-wid-title">Comunidade</h2>
            <ul class="nav">
              <li><a class="fonte-geral" href="#">Ajuda</a></li>
              <li><a class="fonte-geral" href="#">Ligações Externas</a></li>
              <li><a class="fonte-geral" href="#">Equipe</a></li>                          
            </ul>
          </div>
        </div>

        <div class="col-md-2 col-sm-4">
           <div class="footer-menu">
            <h2 class="footer-wid-title">Contatos</h2>
            <ul class="nav">
              <li><a class="fonte-geral" href="#">Telefone 1</a></li>
              <li><a class="fonte-geral" href="#">Telefone 2</a></li>
              <li><a class="fonte-geral" href="#">Email 1</a></li>
              <li><a class="fonte-geral" href="#">Email 2</a></li>                           
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
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>