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
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.php';
                </script>";

        }
        $logado = $_SESSION['email'];
    ?>

    <title>Lançamentos</title>

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
                <form class="form-inline my-2 my-lg-1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control mr-2" type="search" placeholder="Buscar..." aria-label="Search">
                        </div>
                    </div>
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Pesquisar</button>
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


  <div class="container" align="center">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://pic.pimg.tw/ming2262/1566832249-3020780647.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Titans</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img3.acsta.net/pictures/19/05/07/20/54/2901026.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">O Rei Leão</h5>
            <a class="btn btn-primary btn-sm" href="Download_OReiLeao.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/21308-cartaz.jpg" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Homem Aranha: Longe de casa</h5>
            <a class="btn btn-primary btn-sm" href="Download_HALongeDeCasa.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://lojasaraiva.vteximg.com.br/arquivos/ids/404543/1007264143.jpg?v=636966132310900000" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Homem Aranha: No Aranhaverso</h5>
            <a class="btn btn-primary btn-sm" href="Download_HANoAranhaVerso.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGIEEmrer7p1qP-ZReS-mZwEgzW09q6CjQwkob8oDr7q97ABaK&s" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Pikachu</h5>
            <a class="btn btn-primary btn-sm" href="Download_Pikachu.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://is3-ssl.mzstatic.com/image/thumb/Video113/v4/cb/2b/96/cb2b96dd-7cd0-ba41-e742-e90045218c3e/DIS_AV_ENDGAME_BRP_FINAL_BR_ARTWORK_PT-BR_2000x3000_1OWPBJ00000FMO.lsr/268x0w.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vingadores: Ultimato</h5>
            <a class="btn btn-primary btn-sm" href="Download_VingadoresUltimato.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/22610-cartaz.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Annabelle 3</h5>
            <a class="btn btn-primary btn-sm" href="Download_Anabelle3.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img3.acsta.net/c_215_290/pictures/19/01/31/11/55/2714336.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Alita Anjo de Combate</h5>
            <a class="btn btn-primary btn-sm" href="Download_AlitaAnjodeCombate.php" role="button">Download</a>
          </div>
        </div> 

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/22541-cartaz.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Rocketman</h5>
            <a class="btn btn-primary btn-sm" href="Download_Rocketman.php" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvd-x-men-fnix-negra-2019-hd-ex-qualidade-dvd-ou-download-D_NQ_NP_650945-MLB31009252667_062019-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">X-men: Fênix Negra</h5>
            <a class="btn btn-primary btn-sm" href="Download_XMenFênixNegra.php" role="button">Download</a>
          </div>
        </div> 
  </div>
<br>

 <div class="container bg-danger" id="rodapé">
    <div class="row">
      <div class="col-12 text-center">
        <p class="ml-0" align="center">
            <a class="text-white" href="pagina_inicial.php"> 1 </a>
            <a class="text-white" href="lancamentos_2.php"> 2 </a>
            <a class="text-white" href="lancamentos_3.php"> 3 </a>
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