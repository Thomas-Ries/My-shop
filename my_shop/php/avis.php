<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/menu.css?v01">
  <link rel="stylesheet" href="../css/avis.css">

  <title> Avis </title>
</head>
<body>

<div class="general-container">


<?php require '../php/menu.php'?>


  <div class="col-md-6 col-xs-12 container_signUp">

    <div class="alert alert-info" role="alert">
      <p> VOTRE AVIS NOUS INTÉRESSE </p>
    </div>

    <form>
        <div class="form-group">
            <label class="name" for="username"> Votre nom</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
        </div>

            <label for="title" class="question-achat"> Qu'avez-vous acheté chez MonteCactus ? </label>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="cactus"> Cactus </label></br>

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="plantesGrasses"> Plantes Grasses </label></br>

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="plantesCarnivores"> Plantes Carnivores </label></br>

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="plantesPots"> Plantes En Pot </label></br>

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="bonzai"> Bonzaï </label></br>

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="miniArbres"> Mini Arbre </label></br>

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="autreService"> Un Autre Service </label></br>
        </div>
            <div class="form-group">
                <label class ="message" for="message"> Votre message </label>
                <textarea class="form-control" id="zoneMessage" rows="3"> </textarea>
             </div>

             <label class ="experience" for="message"> Votre Expérience : </label>

            <div class="etoiles">
                <a href="#1" title="Donner 1 étoiles"> ☆ </a>
                <a href="#2" title="Donner 2 étoiles"> ☆ </a>
                <a href="#3" title="Donner 3 étoiles"> ☆ </a>
                <a href="#4" title="Donner 4 étoiles"> ☆ </a>
                <a href="#5" title="Donner 5 étoile"> ☆ </a>
            </div>

      <div class="footer">
        <div class="form-group form-check">
      </div>
        <p class="connexionParagraph"> Toute l'équipe de MonteCactus vous remercie pour votre avis !</p>
        <button type="button" class="btn btn-outline-success" rows="5" cols="33"> <a href="../index.php"> Envoyer mon avis </a></button>
        <p class="redirection"> Vous serez ensuite redirigé vers la page d'accueil du site.</p>

    </div>
    </form>


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
