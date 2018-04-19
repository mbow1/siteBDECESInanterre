<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>

    <table>
                <tr>
                    <th>Titre de l'idée</th>
                    <th>Description de l'idée</th>

                </tr>
    <?php
        /*--voici la partie pour se connecter à la base de donnée*/
        try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');
                    }
        /*Si il arrive a se connecter il renvoie une erreur*/
                    catch (Exception $e)
                    {
                            die('Erreur : ' . $e->getMessage());
                    }
                    /*variable qui contient la base de donnée*/
                    $selectIdee = 'SELECT Titre_Idee, Description_Idee FROM BoiteIdee';
                    $test = $bdd -> query($selectIdee);
    ?>
    <?php
        /* boucle pour dire tant que il a finie de lire toute la table il continue de lire et afficher sur la page*/
     while ($donnees = $test->fetch())
     {

            ?>
                    <tr>
                        <td><?php echo $donnees['Titre_Idee'];?></td>
                        <td><?php echo $donnees['Description_Idee'];?></td>
                    </tr>
                    <?php }?>
    </table>

    </body>
</html>
