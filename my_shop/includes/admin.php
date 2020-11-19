<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">

    <title> Page Admin </title>
    
</head>
<body>

    <img src="../img/Logo.png" alt="Logo de l'entreprise" title="Logo" height="99rem">

    <nav class="navbar navbar-expand-lg navbar-light flex-column" style="background-color: #85B6A5;">
        <a class="navbar-brand" href="#">Page Administrateur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>

            <!-- MEMBRES -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Membres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"> Tous les membres </a>
                  <a class="dropdown-item" href="#"> Modification des membres </a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#"> Suppression des membres </a>
                </div>

              <!-- PRODUITS -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produits
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"> Tous les produits </a>
                <a class="dropdown-item" href="#"> Nouveau produit </a>
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="#"> Modification de produits </a>
                <a class="dropdown-item" href="#"> Suppression de produits </a>
              </div>
            </li>

            <!-- DECONNEXION -->
            <li class="nav-item">
                <a class="nav-link" href="#"> Déconnexion </a>
              </li>
          </ul>
        </div>
      </nav>
    
</body>

<!-- SCRPIT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>