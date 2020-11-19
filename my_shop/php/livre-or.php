<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- img -->
    <script src="https://kit.fontawesome.com/837ff4d40e.js" crossorigin="anonymous"></script>

<!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/livre-or.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="../css/pagination.css">
    <link rel="stylesheet" href="../css/footer.css">


    <title>MonteCactus</title>
    <meta name="keywords" content="jardinerie, cactus, plante">
    <meta name="description" content="MonteCactus, c'est une large selection de cactus et plantes grasses pour intérieurs et extérieurs !">

</head>
<body>
  
<div class="general-container">

<!-- TOP BAR -->
    <?php require 'menu.php' ?>

    <h1> BIENVENUE SUR NOTRE LIVRE D'OR ! </h1>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> -->
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/plaine-cactus.jpg" alt="First slide">
        <!-- COMMENTAIRE -->
        <div class="jumbotron">
            <h1 class="display-4"> MAGNIFIQUE ! </h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in sit, corrupti beatae maiores neque aliquid repellat excepturi facere asperiores,
                 placeat dolor dicta cumque, dignissimos qui fuga deleniti enim commodi.</p>
            <hr class="my-4">
            <p>Ma notation pour mon achat chez MonteCactus : </p>
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
        </div>

    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/foret-cactus.jpg" alt="Second slide">
        <!-- COMMENTAIRE -->
        <div class="jumbotron">
            <h1 class="display-4"> AU TOP ! </h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus saepe velit qui incidunt repudiandae culpa,
                suscipit iure totam assumenda aut nobis iste. Quae necessitatibus consequatur officia odio ipsa delectus quibusdam.</p>
            <hr class="my-4">
            <p>Ma notation pour mon achat chez MonteCactus : </p>
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
        </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/man.jpg" alt="Third slide">
        <!-- COMMENTAIRE -->
        <div class="jumbotron">
            <h1 class="display-4"> SUBLIME ! </h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sequi eos eius enim, numquam,
                 dolores autem libero incidunt praesentium rerum distinctio nam molestiae modi tempore illo necessitatibus quos aut quidem.</p>
            <hr class="my-4">
            <p>Ma notation pour mon achat chez MonteCactus : </p>
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
        </div>

    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/salvar.jpg" alt="Fourth slide">
        <!-- COMMENTAIRE -->
        <div class="jumbotron">
            <h1 class="display-4"> RECOMMANDÉ ! </h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod voluptatibus ipsa quasi sed, doloremque fugiat enim placeat mollitia. Aspernatur mollitia, 
                suscipit repellat excepturi molestias voluptas tempore odio libero facere pariatur.</p>
            <hr class="my-4">
            <p>Ma notation pour mon achat chez MonteCactus : </p>
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
        </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="../img/cactus-rond.jpg" alt="fifth slide">
            <!-- COMMENTAIRE -->
        <div class="jumbotron">
            <h1 class="display-4"> SURPRENANT ! </h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eveniet omnis exercitationem aliquam ad iure sapiente maiores quia, 
                deleniti dolorum debitis libero a quibusdam repellat soluta facilis est praesentium nesciunt?</p>
            <hr class="my-4">
            <p>Ma notation pour mon achat chez MonteCactus : </p>
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="../img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
        </div>
    </div>
  </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>

    <div class="btn-avis">
        <p class="connexionParagraph"> Parlez-nous de votre expérience chez MonteCactus ! </p>
        <button type="button" class="btn btn-outline-success"> <a href="../php/avis.php">Déposez votre avis</a></button>
    </div>


          
<?php require 'footer.php' ?>

<!-- FERMETURE GENERAL CONTAINER -->
</div>


<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>