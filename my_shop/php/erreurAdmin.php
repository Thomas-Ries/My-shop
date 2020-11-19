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
    <link rel="stylesheet" href="../css/erreurAdmin.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/mobile.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="../css/pagination.css">
    <link rel="stylesheet" href="../css/footer.css">


    <title>Redirection</title>
    <meta name="keywords" content="jardinerie, cactus, plante">
    <meta name="description" content="MonteCactus, c'est une large selection de cactus et plantes grasses pour intérieurs et extérieurs !">


    <meta http-equiv="refresh" content="5; URL=../index.php">
</head>
<body>
  
<div class="general-container">

<!-- TOP BAR -->
    <?php require 'menu.php' ?>


    <div class="jumbotron">
        <h1 class="display-4"> REDIRECTION </h1>
            <p class="lead"> Vous ne disposez pas des autorisations nécessaires pour afficher cette page. Vous allez être redirigé vers la page d'accueil de MonteCactus afin de poursuivre votre visite.</p>
            <hr class="my-4">
            <p class="p-redirection"> Si la redirection en se fait pas, veuillez cliquer sur ce lien :</p>
            <a class="btn btn-primary btn-lg" href="../index.php" role="button"> Accueil </a>
    </div>




    <?php require 'footer.php' ?>
</div>


<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>