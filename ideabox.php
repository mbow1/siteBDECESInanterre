<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="Style.CSS"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

         <?php include("menu.php");?>
        </head>
        <body class="container">

            <table>
                    <tr>
                        <th>Titre de l'idée</th>
                        <th>Description de l'idée</th>
                    </tr>
    <?php
        try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=BDD;charset=utf8', 'root', '');
                    }
                    catch (Exception $e)
                    {
                            die('Erreur : ' . $e->getMessage());
                    }

                if(isset($_POST['PosteIdee'])) {
                    if(isset($_POST['Titre_Idee'],$_POST['Description_Idee']) AND !empty($_POST['Titre_Idee']) AND !empty($_POST['Description_Idee'])) {
                        $Titre_Idee = htmlspecialchars($_POST['Titre_Idee']);
                        $Description_Idee = htmlspecialchars($_POST['Description_Idee']);
                        $ins = $bdd->prepare('INSERT INTO BoiteIdee (Titre_Idee, Description_Idee) VALUES (?,?)');
                        $ins->execute(array($Titre_Idee,$Description_Idee));

                        $c_msg = '<div class="alert alert-success" role="alert">
                            <a href="#" class="alert-link">Votre Description Idee a bien été posté</a>
                            </div>';

                      } else {
                         $c_msg = '<div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link">Erreur: Tous les champs doivent être complétés</a>
                            </div>';
                      }
   }
          $selectIdee = 'SELECT Titre_Idee, Description_Idee FROM BoiteIdee';
          $test = $bdd -> query($selectIdee);
          unset($GLOBALS['$_POST']);
    ?>
        <form method="POST">
                <!--
<form action="">
              <p>Date :</p>
              <input type="date" name="date">
              <input type="submit">
            </form>

                    -->

            <input type="text" name="Titre_Idee" placeholder="Votre Titre d'Idee" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" style="margin-bottom : 58px;" id="titreIdee"/><br/>
           
            
            <textarea class="form-control" aria-label="With textarea" name="Description_Idee" placeholder="Votre Description Idee..." style="height: 174px;"></textarea><br />
                   <input type="submit" value="Poster " name="PosteIdee" class="btn btn-primary"/>


        </form>

    <?php
    if(isset($c_msg)){echo "".$c_msg;}
     while ($donnees = $test->fetch())
     {

    ?>
                    <tr class = "table-bordered table-condensed">
                        <td style=" width: 200px;"><p><?php echo $donnees['Titre_Idee'];?></p></td>
                        <td><p><?php echo $donnees['Description_Idee'];?></p></td>
                         <td style=" width: 90px; height: 50px;" ><a href="#"><span class="glyphicon glyphicon-thumbs-up btn btn-primary"></span></a><a href="#"><span class="glyphicon glyphicon-thumbs-down btn btn-danger"></td>
                    </tr>

                    <?php }?>

    </table>

    </body>
    <footer>

        <?php

            include("footer.php");
            ?>

    </footer>
</html>
