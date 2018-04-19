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
        try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');
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
                        $c_msg = "<span style='color:green'>Votre Description_Idee a bien été posté</span>";

                      } else {
                         $c_msg = "Erreur: Tous les champs doivent être complétés";
                      }
   }
          $selectIdee = 'SELECT Titre_Idee, Description_Idee FROM BoiteIdee';
          $test = $bdd -> query($selectIdee);
    ?>
                <form method="POST">
                           <input type="text" name="Titre_Idee" placeholder="Votre Titre_Idee" /><br />
                           <textarea name="Description_Idee" placeholder="Votre Description_Idee..."></textarea><br />
                           <input type="submit" value="Poster " name="PosteIdee" />
                </form>

    <?php
    if(isset($c_msg)){echo "Erreur:".$c_msg;}
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
