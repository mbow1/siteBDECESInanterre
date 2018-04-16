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




            $description = "Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu amet.";


            echo '
              <div class="row">
                    <div class="form-group col-sm-7">
                         <label for="comment">Comment:</label>
                         <textarea class="form-control" rows="6" id="comment"></textarea>
                          <a type="submit" class="btn btn-primary" href="#">
                <span class="glyphicon glyphicon-ok"></span> Poster !! </a>
                    </div>
            <div  id="descrip" class = "col-sm-5">
                <p>'.$description.'</p>

                </div>
            </div>

            '
                ;



        ?>


    </body>

    <footer>


    </footer>
