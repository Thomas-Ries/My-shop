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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="css/pagination.css">
    <link rel="stylesheet" href="css/footer.css">


    <title>MonteCactus</title>
    <meta name="keywords" content="jardinerie, cactus, plante">
    <meta name="description" content="MonteCactus, c'est une large selection de cactus et plantes grasses pour intérieurs et extérieurs !">

</head>
<body>
  
<div class="general-container">

<!-- TOP BAR -->
    <?php require 'php/menu.php' ?>

<!-- BARRE DE RECHERCHE-->
        <div class="search-container">
            <img id="logo-search" src="img/Search.png" alt="Loupe" title="Logo de loupe" height="40px"width="40px">
            <input type="search" id="site-search" name="barre-de-recherche" placeholder="Rechercher"   >
        

            <select class="filter_responsive" name="Best Match" id="best_match" >
                <option value=""> Meilleurs résultats </option>
                <option value="Pertinence"> Pertinence </option>
                <option value="A à Z"> A à Z </option>
                <option value="Z à A"> Z à A </option>
                <option value="Prix croissant"> Prix croissant </option>
                <option value="Prix décroissant"> Prix décroissant </option>
            </select>

            <select name="Best Match" id="best_match" >
                <option value=""> Trier par </option>
                <option value="Pertinence"> Pertinence </option>
                <option value="A à Z"> A à Z </option>
                <option value="Z à A"> Z à A </option>
                <option value="Prix croissant"> Prix croissant </option>
                <option value="Prix décroissant"> Prix décroissant </option>
            </select>
        </div>


<!-- DIV _FILTER AND CACTUS -->
<div class="container-flex-cactus">

<div class="container">
    <div class="menu">
    <h3 class="filter-par"> FILTRER PAR </h3>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          CATÉGORIES
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#">Vivace</a>
        <a href="#">Globuleux</a>
        <a href="#">Succulente</a>
        <a href="#">Carnegia</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          SAISON DE FLORAISON
        </button>
      </h5>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#">Printemps</a>
        <a href="#">Été</a>
        <a href="#">Automne</a>
        <a href="#">Hiver</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ENVIRONNEMENT D'EXPOSITION
        </button>
      </h5>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#">Intérieur</a>
        <a href="#">Extérieur Été</a>
        <a href="#">Extérieur Hiver</a>
        <a href="#">Sous Serre</a>  
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          NOS AUTRES PLANTES
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#">Plantes Grasses</a>
        <a href="#">Plantes Carnivores</a>
        <a href="#">Plantes En Pot</a>
        <a href="#">Bonzaï</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          NOS MINI ARBRES
        </button>
      </h5>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#">Citronniers</a>
        <a href="#">Mandariniers</a>
        <a href="#">Pommiers</a>
        <a href="#">Cerisiers</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          NOS SERVICES
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="#">Conseils</a>
        <a href="#">Livraison</a>
        <a href="#">Soins De Vos Plantes</a>
      </div>
    </div>
  </div>

</div>

<!-- PRICE TAG -->

<form>
        <div class="form-group">
          <label for="formControlRange"> Tarifs </label>
          <input type="range" class="form-control-range" id="formControlRange">
            <div class="euros">
                <p class="tarifs"> 0€</p>
                <p class="tarifs"> 200€</p>
            </div>
        </div>
      </form>
    </div>
</div>


<!-- CONTAINER CACTUS -->
<!-- CACTUS 1 -->
<div id="objet1" class="container">
<img class="cactus" src="img/cactus1.jpg" alt="Image d'un cactus cierge en pot" title="Cactus Cierge">
<div class="box">
    <div class="colonne1">
        <h2>Cactus Cierge</h2>
        <h3>Vivace</h3>
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
    </div>
    <div class="colonne2">
        <p>21.95€</p>
            <img src="img/Cart Button.png" alt="Image d'un chariot" title="chariot">
    </div>
</div>
</div>

<!-- CACTUS 2 -->
<div id="objet1" class="container">
<img class="cactus" src="img/cactus2.jpg" alt="Image d'un figuier de barbarie en pôt" title="Figuier de Barbarie">
<div class="box">
    <div class="colonne1">
        <h2>Figuier de Barbarie</h2>
        <h3>Vivace</h3>
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
    </div>

    <div class="colonne2">
        <p>25.80€</p>
            <img src="img/Cart Button.png" alt="Image d'un chariot" title="chariot">
    </div>
</div>
</div>

<!-- CACTUS 3 -->
<div id="objet1" class="container">
<img class="cactus" src="img/cactus3.jpg" alt="Image d'un cactus Oursin aussi appelé coussin de belle mère" title="Cactus Oursin">
<div class="box">
    <div class="colonne1">
        <h2>Cactus Oursin</h2>
        <h3>Globuleux</h3>
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
    </div>

    <div class="colonne2">
        <p>13.95€</p>
            <img src="img/Cart Button.png" alt="Image d'un chariot" title="chariot">
    </div>
</div>
</div>

<!-- CACTUS 4 -->
<div id="objet1" class="container">
<img class="cactus" src="img/cactus4.jpg" alt="Image d'un cactus Euphorbe Candélabre en pôt" title="Cactus Euphorbe Candélabre">
<div class="box">
    <div class="colonne1">
        <h2>Euphorbe Candelabre</h2>
        <h3>Succulente</h3>
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
    </div>

    <div class="colonne2">
        <p>85.95€</p>
            <img src="img/Cart Button.png" alt="Image d'un chariot" title="chariot">
    </div>
</div>
</div>

<!-- CACTUS 5 -->
<div id="objet1" class="container">
<img class="cactus" src="img/cactus5.jpg" alt="Image d'un cactus Cactée en pôt" title="Cactus Cactée">
<div class="box">
    <div class="colonne1">
        <h2>Cactus Cactée</h2>
        <h3>Vivace</h3>
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
    </div>

    <div class="colonne2">
        <p>7€</p>
            <img src="img/Cart Button.png" alt="Image d'un chariot" title="chariot">
    </div>
</div>
</div>

<!-- CACTUS 6 -->
<div id="objet1" class="container">
<img class="cactus" src="img/cactus6.png" alt="Image d'un cactus Saguaro en pôt" title="Cactus Saguaro">
<div class="box">
    <div class="colonne1">
        <h2>Cactus Saguaro</h2>
        <h3>Carnegia</h3>
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
    </div>

    <div class="colonne2">
        <p>115€</p>
            <img src="img/Cart Button.png" alt="Image d'un chariot" title="chariot">
    </div>
</div>
</div>

<!-- CACTUS 7 -->
<div id="objet1" class="container">
<img class="cactus" src="img/cactus7.jpg" alt="Image d'un cactus Euphorbe Arcrusensis en pôt" title="Cactus Euphorbe Arcrusensis" >
<div class="box">
    <div class="colonne1">
        <h2>Euphorbe Arcrusensis</h2>
        <h3>Vivace</h3>
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile pleine de notation sur 5" title="Etoile pleine">
            <img src="img/Star.png" alt="Image d'une étoile creuse de notation sur 5" title="Etoile creuse">
    </div>

    <div class="colonne2">
        <p>69.95€</p>
            <img src="img/Cart Button.png" alt="Image d'un chariot" title="chariot">
    </div>
</div>
</div>

<!-- fermeture container flex cactus -->
</div>

          
<!--PAGINATION-->
<?php require 'php/pagination.php' ?>



<?php require 'php/footer.php' ?>
</div>


<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
