<!DOCTYPE html>
<html>
    <?php
            include("menu.php");
            try{
            $pdo = new PDO('mysql:host=localhost;dbname=bdd;', 'root', 'exia');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    ?>
    <head>

         <!****************************** import ***************************************>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="Style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">


         <!****************************** import ***************************************>


        <title> Evénement </title>
    </head>

    <body class="container">
        <table>
            <tr>
                <th>Titre de l évènemenent</th>
                <th>Description de l évènement</th>
                <th>Dâte de l évènement</th>
            </tr>
        <?php
            $selectevent = 'SELECT Titre_Event, Description_Event, Date_Event FROM evenement';
            $pdo -> query($selectevent);
        ?>
        <?php
        while ($donnees = fetch($selectevent))
            {
        ?>
                <tr>
                    <td><?php echo $donnees['Titre_Event'];?></td>
                    <td><?php echo $donnees['Description_Event'];?></td>
                    <td><?php echo $donnees['Date_Event'];?></td>
                </tr>
            }
            </table>
    </body>

    <footer>


    </footer>
</html>
