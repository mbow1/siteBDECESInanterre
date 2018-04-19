<?php
session_start();
    try{
            $pdo = new PDO('mysql:host=localhost;dbname=bdd;', 'root', 'exia');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
$nom = !empty($_POST['nom']) ? $_POST['nom'] : NULL;
$description = !empty($_POST['description']) ? $_POST['description'] : NULL;
$prix = !empty($_POST['prix']) ? $_POST['prix'] : NULL;
$nom = htmlspecialchars($_POST['nom']);
$description = htmlspecialchars($_POST['description']);
$prix = htmlspecialchars($_POST['prix']);

$inserproduit = $pdo->prepare("INSERT INTO produit(Nom_Produit, Description_Produit, Prix_Produit) VALUES (?, ?, ?)");
$inserproduit->execute(array($nom,$description,$prix));
?>
<!DOCTYPE HTML>
<html>
<head>

         <!****************************** import ***************************************!>
           <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="Style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">


         <!****************************** import ***************************************!>



         <?php
            include("menu.php");

            ?>


        <title> Ajout de produit </title>
</head>
 <div class="form-group " id="addproduit">
            <form method="POST" class="form-horizontal" action="" >
                <img class="logocesi" src="img/cesi-entreprise.png">
                <input type="text" name="nom" class="form-control" placeholder="Entrez le nom de votre produit"/><br/>
                <textarea class="form-control" rows="6" id="description" name="description" placeholder="Description du produit"></textarea><br/>
                <input type="text" name="prix" class="form-control" placeholder="Entrez le prix de votre produit"/><br/>
                <br/>
                <input type="submit" name="ajouterproduit" value="Ajouter le produit" class=" btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><br/>
                <br/>
                <br/>
                 <?php
                     if(isset($messageConnextion)){
                        echo '<div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link">'.$messageConnextion.'</a>
                            </div>';
                     }
            ?>
            </form>
    </div>
<footer>
  <?php

            include("footer.php");
            ?>
</footer>
</html>
