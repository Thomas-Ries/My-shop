<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- Icones -->
    <script src="https://kit.fontawesome.com/837ff4d40e.js" crossorigin="anonymous"></script>



<!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/jardinerie.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 768px)" >
    <link rel="stylesheet" href="../css/footer.css">
    

    <title>Notre Jardinerie</title>
    <meta name="keywords" content="jardinerie, cactus, plante">
    <meta name="description" content="MonteCactus, c'est une large selection de cactus et plantes grasses pour intérieurs et extérieurs !">
</head>
<body>

<div class="general-container">


<?php require 'menu.php' ?>


<!-- CAROUSEL -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/salvar.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/cactus-rond.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/foret-cactus.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>
      </div>


<!-- TEXTE PRESENTATION -->

<div class="card-presentation">
    <div class="text-center card-body">
        <h1> MONTE CACTUS</h1>

        <p> Depuis 1967, MonteCactus est devenue une référence incontournable en France et à l’Étranger grâce à ces 1000 hectares de production, une jardinerie de 5 000 m² et un site vente en ligne.
        Spécialisée dans les plantes grasses et les cactus, nous vous offrons à chaque saison un large choix de végétaux et des conseils de qualité pour réussir votre petit coin de paradis.
        Nous organisons régulièrement des ateliers et formations pour les personnes désirant apprendre ou réapprendre les techniques de jardinage (taille, rempotage, plantation, semis, bouturage, greffage). 
        MonteCactus s'engage au quotidien pour une économie verte. </p>

    </div>
</div>


<!-- NOS EQUIPES -->

<div class="card-deck">
    <div class="card">
      <img src="../img/man.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="text-center card-title">NOS EQUIPES </h2>
        <p class="text-center card-text"> Plus de 25 personnes s’occupent de la production de nos cactus et plantes grasses au sein de notre centre de production, 
          MonteCactus vous propose des plantes de qualité, pour tous les budgets. Venez rencontrer notre équipe dans notre jardinerie ou contactez-nous sur notre site internet
           afin d’obtenir tous les conseils nécessaires pour prendre soin de vos plantes. </p>
      </div>
    </div>

    <!-- CACTUS -->

    <div class="card">
      <img src="../img/plaine-cactus.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="text-center card-title"> POURQUOI LES CACTUS ? </h2>
        <p class="text-center card-text"> Si vous recherchez une plante d’intérieur peu exigeante et originale, les cactus et plantes succulentes ont tout pour vous séduire ! Originaires des milieux arides, les plantes grasses ou succulentes comme les cactées possèdent la capacité de stocker l’eau et ne nécessitent que de rares arrosages. Aloe vera, crassula, agave ou euphorbe... Choisissez parmi les variétés les plus tendances du moment ! </p>
      </div>
    </div>

</div>


<?php require 'footer.php' ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script> $('.carousel').carousel() </script>

</body>
</html>