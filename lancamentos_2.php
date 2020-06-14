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
          
          <ul class="navbar-nav ml-auto">

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Redes Sociais</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Facebook</a>
                <a class="dropdown-item" href="#">Instagram</a>
              </div>
            </li>
            
            <ul class="navbar-nav ml-5" id="sair">
                
               <li class="nav-item">
                   <a class="nav-link font-weight-bold"  href="deslogar.php"><b>Sair</b></a>
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
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/21308-cartaz.jpg" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Homem Aranha: Longe de casa</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://lojasaraiva.vteximg.com.br/arquivos/ids/404543/1007264143.jpg?v=636966132310900000" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Homem Aranha: No Aranhaverso</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGIEEmrer7p1qP-ZReS-mZwEgzW09q6CjQwkob8oDr7q97ABaK&s" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Pikachu</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://is3-ssl.mzstatic.com/image/thumb/Video113/v4/cb/2b/96/cb2b96dd-7cd0-ba41-e742-e90045218c3e/DIS_AV_ENDGAME_BRP_FINAL_BR_ARTWORK_PT-BR_2000x3000_1OWPBJ00000FMO.lsr/268x0w.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vingadores: Ultimato</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/22610-cartaz.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Annabelle 3</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img3.acsta.net/c_215_290/pictures/19/01/31/11/55/2714336.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Alita Anjo de Combate</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div> 

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/22541-cartaz.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Rocketman</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvd-x-men-fnix-negra-2019-hd-ex-qualidade-dvd-ou-download-D_NQ_NP_650945-MLB31009252667_062019-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">X-men: Fênix Negra</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>