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
        width: 720px;
        height: 460px;
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

    <title>Grey's Anatomy</title>

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
            
            <ul class="navbar-nav ml-5" id="Sair">
                
               <li class="nav-item">
                   <a class="nav-link"  href="deslogar.php">Logado...\<b>Sair</b></a>
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

   <div class="container" align="center">
        <div class="card border-dark text-dark bg-danger mb-3">
          <div class="card-header bg-transparent border-success"><b>Grey’s Anatomy: 13ª Temporada (2017) Dublado / Dual Áudio BluRay 720p | 1080p </b></div>
          <div class="card-body text-dark">
            <img align="left" src="http://www.spinoff.com.br/wp-content/uploads/greys-anatomy-season12.jpg" width="250px" height="290px">
            <br>
            <br>
            <p><b>Ano de Lançamento:</b> 2017</p>
            <p><b>Gênero:</b> Drama, Romance</p>
            <p><b>Idioma:</b> Dublado / Dual Áudio</p>
            <p><b>Duração:</b>  Cerca de 41 min por episódio</p>
            <p><b>Qualidade:</b> 1080p</p>
           </div>
           <div class="card-footer"><a class="btn btn-primary btn-sm" href="magnet:?xt=urn:btih:CB90AE6CC387A9A715307DFF7B69D623141152D7&dn=Grey%27s%20Anatomy%202017%20-%2013%C2%AA%20Temporada%20Completa%20%5bWEB-DL%5d%20WWW.BLUDV.COM&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2720%2fannounce&tr=udp%3a%2f%2fexplodie.org%3a6969%2fannounce&tr=http%3a%2f%2fglotorrents.pw%3a80%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=udp%3a%2f%2ftorrent.gresille.org%3a80%2fannounce&tr=udp%3a%2f%2ftracker.aletorrenty.pl%3a2710%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.piratepublic.com%3a1337%2fannounce&ws=" role="button">Download</a></div>
        </div>
  </div>


 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>
