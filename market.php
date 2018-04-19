<?php
session_start();
    try{
            $pdo = new PDO('mysql:host=localhost;dbname=BDD;', 'root', '');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }

    if (isset($_GET['id']) and $_GET['id'] > 0){
        $getid = intval($_GET['id']);
        $requser = $pdo->prepare('SELECT * FROM user WHERE ID_User = ?');
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
   <!--  import -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

   <!--  import -->
         <?php include("menu.php");

            $sth = $pdo->prepare("SELECT ID_Produit, Nom_Produit, Image_Produit, Description_Produit,	Prix_Produit FROM produit");
            $sth->execute();
            $result = $sth->fetchAll();

        ?>


        <title> Market </title>
    </head>
    <body class="container">
         <div class="sidenav blackMarket scrollable-content" style="position: fixed;right: 20%;height: 80%" id="panier">
             <h2>Panier <span class="glyphicon glyphicon-shopping-cart"> :</h2>
            <ul class="list-unstyled" id="panier">

            </ul>
             <form action="" method="post">

            <button class="btn primary"> Passer la Commande</button>
                 <!--


                <form action="" method="post">
                    <input type="submit" value="Passer la commande !" class="btn primary" />
                    <input type="hidden" name="button_pressed" value="1" />
                </form>
                 -->
                 <?php
            /*
                if(isset($_POST['button_pressed']))
                {
                    $to      =  $_SESSION['mail'];
                    $subject = 'Votre commande';
                    $message = 'hello';
                    $headers = 'From: mbowdogg_2@htomail.fr' . "\r\n" .
                        'Reply-To: mbowdogg_2@htomail.fr' . "\r\n" .
                        'X-Mailer: PHP/';

                    mail($to, $subject, $message, $headers);

                }*/

                        ?>



        </div>


        <div class="row">



         <?php


           for ($i = 1 ; $i <= 11 ; $i++){
               echo ' <div class="blackMarket col-ms" >
                        <img src="'.$result[$i]['Image_Produit'].'" width="150px" height="150px" class=" img_pr rounded float-left">
                        <h3>'.$result[$i]['Nom_Produit'].'</h3>
                                    <p>'.$result[$i]['Description_Produit'].'</p>
                                    <p style="font-size: 31px;"> € '.$result[$i]['Prix_Produit'].' </p> <a class="btn btn-primary float-right" onclick="addprod('.$result[$i]['Prix_Produit'].')" id="btnAjout'.$i.'">Ajouter  <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div> ';

            }

           for ($i = 1 ; $i <= 11 ; $i++){
               echo ' <div class="blackMarket col-ms" >
                        <img src="'.$result[$i]['Image_Produit'].'" width="150px" height="150px" class=" img_pr rounded float-left">
                        <h3>'.$result[$i]['Nom_Produit'].'</h3>
                                    <p>'.$result[$i]['Description_Produit'].'</p>
                                    <p style="font-size: 31px;"> € '.$result[$i]['Prix_Produit'].' </p> <a class="btn btn-primary float-right" onclick="addprod('.$result[$i]['Prix_Produit'].')" id="btnAjout1'.$i.'">Ajouter  <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div> ';

            }
          ?>
        </div>


    </body>

    <footer>

        <?php

            include("footer.php");
            ?>

    </footer>


</html>
<?php

    } else {

        /////////////////// il n'est pas connecter ////////////
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">';


    echo '<div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link">Connectez-Vous !!</a>
                            </div>';
    }
                            ?>
