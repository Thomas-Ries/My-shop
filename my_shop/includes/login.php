<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/menu.css?v01">
  <link rel="stylesheet" href="../css/login.css">

  <title> Se Connecter </title>
</head>
<body>

<div class="general-container">


<?php require '../php/menu.php'?>


  <div class="col-md-6 col-xs-12 container_signUp">

    <div class="alert alert-info" role="alert">
      <p>CONNEXION</p>
    </div>

    <form>
      <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
      </div>
      
      <div class="form-group">
        <label for="pwd">Mot de passe</label>
        <input type="password" class="form-control" id="password" aria-describedby="emailHelp">
      </div>

      <div class="footer">
        <div class="form-group form-check">
      </div>
      <button type="submit" class="btn btn-primary">Connexion</button>

        <p class="connexionParagraph"> Si vous ne possédez pas encore de compte, inscrivez-vous !</p>
        <button type="button" class="btn btn-outline-success"> <a href="signin.php">Inscription</a></button>
    </div>
    </form>

      <div class="mdp-oubli">
      <a href="mdpoubli.php"> Mot de passe oublié</a>
      </div>
<!-- COL-MD -->
  </div>
  

  <!-- GENERAL CONTAINER -->
  </div>


  <!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
