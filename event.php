<?php
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



         <?php
            include("menu.php");

            ?>


        <title> Evénement </title>
    </head>

    <body class="container">

      <?php


        $jour = "Lundi";
        $mois = " 16 Avril";
        $annee = "2018";
        $titre = "Boom Boom !!";
        $lieu = "Miami, USA";

        echo '<div class="date-picker" id="DateEven" data-date="2014/09/02" data-keyboard="true">
                <div class="date-container pull-left">
                    <h4 class="weekday">'.$jour.'</h4>
                    <h1 class="date">'.$mois.'</h1>
                    <h4 class="year pull-right">'.$annee.'</h4>
                </div>';

        echo '<div id="Titre" class="pull-right">
                <h2 class="pull-right">'.$lieu.'</h2>
            </div>';

        echo '<h1 class="pull-right">'.$titre.'</h1><br>';


        include("carousel.php");




        echo '<p class=" pull-right">שלום, שמי גיזלן.
אני ממש אוהבת לעשות משהו.</p>'

      ?>

          <form method="post" action="event.php">
              <div class="row">
                    <div class="form-group col-sm-7" >
                         <label for="comment">Comment:</label>
                         <textarea class="form-control" rows="6" id="comment" name ="commentaire" placeholder ="Tapez ici"></textarea>
                          <input type="submit"  class="btn btn-primary" value="Poster !">
                          <?php
                            $commentaire = htmlspecialchars ($_POST['commentaire']);
                            $oldcomments = $pdo->prepare("INSERT INTO user(Nom_User, Prenom_User,AdresseMail_User,MotDePasse_User) VALUES (?, ?, ?, ?)");
                            $oldcomments->execute(array($nom,$prenom,$mail,$passe));
                            echo $_POST['commentaire'];
                            ?>

                    </div>
            <div  id="descrip" class = "col-sm-5">


                </div>
            </div>




  </form>


    </body>

    <footer>


    </footer>
</html>
