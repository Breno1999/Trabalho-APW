<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    
    <script>

    jQuery(document).ready(function() {

    var offset = 300;

    var duration = 500;

    jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop() > offset) {

    jQuery('.backtotop').fadeIn(duration);

    } else {

    jQuery('.backtotop').fadeOut(duration);

    }

    });



    jQuery('.backtotop').click(function(event) {

    event.preventDefault();

    jQuery('html, body').animate({scrollTop: 0}, duration);
    
    return false;

    })

    });

    </script>
    
    <style>
        
      body{
        background-color: black;
        color: white;
      }
      
      #carouselSite{
          margin-top: 60px !important;
      }

      .card{
        width: 600px;
        height: 440px;
      }

      #rodapé{
        width: 290px;
        height: 30px;
      }
      
      .backtotop {

       position: fixed;

       bottom: 10px; /* increase value to move position up */

       right: 35px; /* increase value to move position left */

       color: #000000; /* color of text */

       font-size: 12px; /* changes size of text */

       padding: 10px; /* add space around the text */

       text-transform: uppercase; /* change text to all caps */

       letter-spacing: 1.0px; /* space between letters */

       }



       .backtotop:hover {

       color: #ffffff; /* color of text on hover over */

       text-decoration: none; /* no underline */

       bottom: 10px; /* increase value to move position up */

       right: 35px; /* increase value to move position left */

       padding: 10px; /* add space around the text */

       }
      
    </style>
    
    <?php 
        session_start();//Inicia uma nova sessão ou resume uma sessão existente



        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();//remove todas as variáveis de sessão
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado!');
                window.location.href = 'index.php';
                </script>";

        }
        $logado = $_SESSION['email'];
    ?>

    
    <title>SuperflixTorrents.com</title>

  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
      <div class="container">
      
          <a class="navbar-brand navbar-dark h5 mb-0" href="pagina_inicial.php">Inicio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <spam class="navbar-toggler-icon"></spam>
        </button>
      

        <div class="collapse navbar-collapse" id="navbarSite">
        
          <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                <a class="nav-link" href="filmes.php">Filmes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="series.php">Séries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
              </li>

          </ul> 
            
            <div>
                <form class="form-inline my-2 my-lg-1" method="POST" action="pesquisar.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control mr-2" name="pesquisar" type="search" placeholder="Buscar..." aria-label="Search">
                        </div>
                    </div>
                    <button class="btn btn-dark my-2 my-sm-0" type="submit" name="buscar">Pesquisar</button>
                </form>
            </div>
          
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Redes Sociais</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Facebook</a>
                <a class="dropdown-item" href="#">Instagram</a>
              </div>
            </li>
            
            <ul class="navbar-nav ml-5" id="Sair">
                
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop"><b>Conta</b></a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="alterar_tela.php">Alterar senha</a>
                  <a class="dropdown-item" href="deletar_tela.php">Excluir conta</a>
                  <a class="dropdown-item" href="deslogar.php">Sair</a>
              </div>
              </li>

            </ul>

          </ul>
         
         
        </div>
      </div>
   </nav>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
 
   
   <div class="container" id="TituloCarousel">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="ml-0" align="left">Novidades da Semana:</h1>
        
      </div>
    </div>
  </div>    

   <div id="carouselSite" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
      <li data-target="#carouselSite" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner" align="center"  width="500px" height="10px">

       <div class="carousel-item active">
           <a href="Download_SexEd.php">
            <img src="https://qph.fs.quoracdn.net/main-qimg-13e13269013e778c4ec9b976535cbe86" class="img-fluid d-block" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>  

       <div class="carousel-item">
         <a href="Download_MrRobot.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuIIKawOQX6jP3cAkSue2ZqeRsyv0rxOH_3Kox3dWlb-TcoktHCA&s" class="img-fluid d-block" 
            width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
           <a href="Download_LaCasa.php">
            <img src="https://dvqlxo2m2q99q.cloudfront.net/000_clients/1026022/page/1026022L7oPIvak.png" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
         <a href="Download_VisaVis.php">
            <img src="https://i.ytimg.com/vi/O34MP1nTtoo/maxresdefault.jpg" class="img-fluid d-block"  
            width="650px" height="10px"></a>
       </div>

    </div>

    <div>
        <br>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
      
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
      
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Avançar</span>
        </a>
    </div>
   </div> 
    <br>
    <br>
    <br>
    <br>
    
    

  <div class="container" id="Titulo">
    <div class="row">
      <div class="col-12">
        <h1 class="ml-0">Séries</h1>
        <br>
        <br>
        <br>
      </div>  
    </div>
  </div>

  <div class="container" align="center">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://pbs.twimg.com/media/ED9gXxnWwAYzrep.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vis a Vis</h5>
            <a class="btn btn-primary btn-sm" href="Download_VisaVis.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://img.elo7.com.br/product/original/26B5DAC/big-poster-serie-the-flash-lo10-tamanho-90x60-cm-the-flash.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Flash</h5>
            <a class="btn btn-primary btn-sm" href="Download_Flash.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img3.acsta.net/pictures/16/06/14/19/46/337804.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Mr Robot</h5>
            <a class="btn btn-primary btn-sm" href="Download_MrRobot.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://1.bp.blogspot.com/-zD84PZg3Zsg/XaaKQlq58mI/AAAAAAAAZa4/6bxd6wKTnS8e3evjaiqtyBzFRsPXsemkgCNcBGAsYHQ/s1600/The%2BPurge%2Bs02.jpg" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Uma Noite de Crime 2ª Temporada</h5>
            <a class="btn btn-primary btn-sm" href="Download_ThePurgue.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://i2.wp.com/i.imgur.com/0anGQvs.jpg?resize=220%2C280&ssl=1" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Empire 5ª Temporada</h5>
            <a class="btn btn-primary btn-sm" href="Download_Empire.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://fr.web.img4.acsta.net/r_1280_720/pictures/19/07/22/09/56/1827026.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">La Casa de Papel</h5>
            <a class="btn btn-primary btn-sm" href="Download_LaCasa.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://upload.wikimedia.org/wikipedia/pt/f/f6/Dark_%28s%C3%A9rie%29.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Dark</h5>
            <a class="btn btn-primary btn-sm" href="Download_Dark.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://media.fstatic.com/Eg4MlEbpO1kniehFqaStrNW4-TI=/fit-in/290x478/smart/media/movies/covers/2018/05/Suits-7%C2%AA-Temporada.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Suits</h5>
            <a class="btn btn-primary btn-sm" href="Download_Suits.php" role="button">Download</a>
          </div>
        </div> 

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://images-na.ssl-images-amazon.com/images/I/91lPMgf0ZdL._SX425_.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Arrow</h5>
            <a class="btn btn-primary btn-sm" href="Download_Arrow.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://media.fstatic.com/hTl0y8rvBacmKQ0YgW5lpvn1Zy4=/fit-in/290x478/smart/media/movies/covers/2016/01/the-100-3a-temporada_t113345.png" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">The 100</h5>
            <a class="btn btn-primary btn-sm" href="Download_The100.php" role="button">Download</a>
          </div>
        </div> 
  </div>
  <br>

  <div class="container bg-danger" id="rodapé">
    <div class="row">
      <div class="col-12 text-center">
        <p class="ml-0" align="center">
            <a class="text-white" href="series.php"> 1 </a>
            <a class="text-white" href="series_2.php"> 2 </a>
          <a class="text-white" href="#"> 3 </a>
          <a class="text-white" href="#"> 4 </a>
        </p>
      </div>
    </div>
</div>

<a href="#" class="backtotop"><img src="https://imgur.com/zuTLdei.png" width="50px" height="50px" alt="back to top" /></a>
  
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>
