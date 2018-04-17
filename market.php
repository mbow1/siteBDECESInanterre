<?php
    session_start();
    try{
            $pdo = new PDO('mysql:host=localhost;dbname=BDD;', 'root', '');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }


?>

<!DOCTYPE html>
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

         <?php include("menu.php");          ?>


        <title> Market </title>
    </head>
    <body class="container">

         <?php

        $sth = $pdo->prepare("SELECT ID_Produit, Nom_Produit, Image_Produit, Description_Produit,	Prix_Produit FROM produit");
        $sth->execute();
        $result = $sth->fetchAll();
        //echo $result[0]['ID_Produit'];


           for ($i = 1 ; $i <= 11 ; $i++){

               echo ' <div class="blackMarket col-xs-6 col-md-4" >
                        <img src="'.$result[$i]['Image_Produit'].'" width="150px" height="150px" class=" img_pr rounded float-left">
                        <h3>'.$result[$i]['Nom_Produit'].'</h3>
                                    <p>'.$result[$i]['Description_Produit'].'</p>
                                    <p>'.$result[$i]['Prix_Produit'].' </p> <a class="btn btn-primary float-right" id="btnAjout">Ajouter  <span class="glyphicon glyphicon-shopping-cart"></span></a>
                            </div>
                    </div> ';
            }
          ?>



    </body>

    <footer>

        <?php include("footer.php");          ?>


    </footer>


</html>
