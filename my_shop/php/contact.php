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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/footer.css">

    <title> Contact </title>

</head>
<body>

    <div class="general-container">

    
    <!-- TOP BAR -->
    <?php require 'menu.php' ?>

    <form>
        <div class="contact">
        <div class=" contact-container col-md-6 mb-3">

            <h2> NOUS CONTACTER </h2>

            <div class="form-group">
                <label for="exampleFormControlInput1"> Nom </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" Votre nom">
            </div>
      
            <div class="form-group">
                <label for="exampleFormControlInput1"> Prénom </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre prénom">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"> Adresse email </label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="exemple@email.com">
             </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1"> Votre message </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
             
            <div class="btn-envoyer">
                <button type="submit" class="btn btn-primary"> Envoyer </button>
            </div>

        </div>
        </div>
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7587849.9231934305!2d-99.44185848387833!3d21.78007348545861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35f18b54dccdd%3A0x2bdf636b4372f2f5!2sRancho%20Vivero%20Mis%20Amores!5e0!3m2!1sfr!2sfr!4v1603960956724!5m2!1sfr!2sfr" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <?php require 'footer.php' ?>

    </div>

<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>