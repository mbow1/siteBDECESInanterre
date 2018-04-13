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
           for ($i = 0 ; $i <= 20 ; $i++){


               echo ' <div class="blackMarket col-xs-6 col-md-4" >
                        <img src="img/img_market/1.jpg" width="150px" height="150px" class=" img_pr rounded float-left">
                        <h3> nom du produit</h3>
                                    <p>Description du produit ...</p>
                                    <p > 30.2€ </p> <a class="btn btn-primary float-right">Ajouter  <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                            </div>
                    </div> ';

            }
          ?>



    </body>

    <footer>

        <?php include("footer.php");          ?>


    </footer>


</html>
