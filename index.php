<?php
session_start();

require_once "app/core/core.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titlePagina">Portal Noticia</title>

  <link rel="stylesheet" href="http://192.168.2.8/Novo%20Projeto/assets/css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

  <script>
    function valSearch(){
      let search = document.getElementById('search').value;

      if(search == ''){
        return false;
      }
    }
  </script>

</head>

<body>

  <header>

    <div class="containerTop">
      <label>LOGO</label>
      <form class="d-flex" role="search" action="http://192.168.2.8/Novo%20Projeto/app/controller/search.php" method="POST" onsubmit="return valSearch()">
        <input class="form-control me-2 col-lg-2" name="search" id="search" value="<?= $search ?>" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>

    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="http://192.168.2.8/Novo%20Projeto/">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <section class="containerConteudo">

    <?php
    if ($url == 'home') {
      // echo 'aqui';
      require_once "app/view/" . 'home' . ".html";
    } else {
      // echo 'fora';
      require_once "app/view/" . $url[0] . ".html";
      // echo 'core';
    }
    ?>

  </section>

  <footer>
    <label style="font-size: 45px;">Logo</label>
    <div class="linksFooter">
      <a href="" class="nav-link px-2 text-muted">Home</a>
      <a href="" class="nav-link px-2 text-muted">Publicidade</a>
      <a href="" class="nav-link px-2 text-muted">Política</a>
      <a href="" class="nav-link px-2 text-muted">Contato</a>
    </div>
  </footer>

</body>

</html>