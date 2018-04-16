<!DOCTYPE html>
<html>
    <head>
      <!- <?php

            include 'import.php';

        ?> -!>
  <!****************************** import ***************************************!>
        0<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="Style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

  <!****************************** import ***************************************!>


        <title> Connextion, Inscriptionl</title>
      <img src="img/banner.png" id="banner">
    </head>
    <body class="container">

        <button id="inscription" type="button" class="btn btn-success">
            <span class="glyphicon glyphicon-user"></span> Inscription
        </button>


        <div class="form-group " id="conect">
            <form method="post" class="form-horizontal" >
                <img class="logocesi" src="img/cesi-entreprise.png">
                <input type="email" name="mail" class="form-control" placeholder="Entrer votre mail CESI"/><br/>
                <input type="password" name="motDePasse" class="form-control" placeholder="Mots de Passe" /><br/>
                <div class="checkbox">
                    <label><input type="checkbox"> Se souvenir de moi !</label>
                </div>
                <br/>
                <a type="submit" name="valider" value="Valider" class=" btn btn-primary" href="http://localhost/ProjetWeb/market.php"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Valider</a><br/>

            </form>
        </div>
        <div id="FormulDinscription" class="form-group ">
            <form method="post" class="form-horizontal">

                <input type="text" name="nom" class="form-control" placeholder="Votre Nom"/><br/>
                <input type="text" name="prenom" class="form-control" placeholder="Votre Prenom"/><br/>
                <input type="password" name="passe" class="form-control" placeholder="Votre Mot de passe"/><br/>
                <input type="password" name="passe2" class="form-control" placeholder="Confirmation du mot de passe"/><br/>
                <input type="text" name="email" class="form-control" placeholder="Adresse e-mail CESI"/><br/>
                <a type="submit" class="btn btn-primary" href="http://localhost/ProjetWeb/market.php">
                <span class="glyphicon glyphicon-ok"></span> Valider
                </a>
                <br/><br/>

                <?php
                $message = "Votre Mot de passe n'est pas bon !";
                echo '<div class="alert alert-danger" role="alert">
                  <a href="#" class="alert-link">'.$message.'</a>
                </div>';


                ?>
            </form>

        </div>
    </body>


    <footer>


    </footer>





</html>
