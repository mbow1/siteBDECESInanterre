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


        <title> Market </title>
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
        echo '<h1>.'$titre'.</h1>';
        echo '<h2>'.$lieu.'</h2>';


        include("carousel.php");


        ?>
        <h1>.'$titre'.</h1>
        <h2>'.$lieu.'</h2>
    </body>

    <footer>


    </footer>
