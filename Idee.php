<!DOCTYPE html>
<html>
    <head>

         <!****************************** import ***************************************!>
           <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="Style.CSS"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

         <!****************************** import ***************************************!>

         <?php include("menu.php");          ?>


        <title> Market </title>
    </head>

    <body>

       <div class="container-fluid">
 <!--- on construit un block afin que les éléments se mette les un endessous des autres-->
           <div class="row">
               <div class="col-md-3">

        <!-- Zone de texte -->
        <div class="form-group">
        <label for="Titre" class="idee">Titre de ton idée</label>
<!-- permet de créer la zone de texte-->
        <textarea class="form-control" id="Title"></textarea>

    </div>
               </div>
           </div>


    <!--- on construit un block afin que les éléments se mette les un endessous des autres-->
    <div id ="block2" style="border:1px  WHITE;">
        <!-- Zone de texte -->
        <div class="form-group">
        <label for="description" class="idee">Description de l'idée</label>
        <textarea class="form-control" id="description"></textarea>
        </div>
    </div>

    <!--- on construit un block afin que les éléments se mette les un endessous des autres-->
    <div id ="block3">
     <!-- voici le bouton de vote -->
      <!--<button type="button" class="btn btn-danger btn-xs-10">Voter</button>-->

     <button type="button" class="btn btn-danger btn-xs-10">Poste</button>

    </div>


        </div>


<form method="post" >
                        <label>You Text Here</label>
                        <input type="text" name="sxt" id ="Text"/>
                        <textarea name="description" placeholder="description"></textarea>
                        <input type="submit" value="Poster" />

        </form>
 <?php
if (isset($_POST['sxt'])) {
echo ' '.$_POST['sxt'];

    }
?>

    </body>

</html>


<meta charset="utf-8" />
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');

if(isset($_GET['ID_BoiteIdee']) AND !empty($_GET['ID_BoiteIdee'])){
    $getid = htmlspecialchars($_GET['ID_BoiteIdee']);
    $boite = $bdd->prepare('SELECT * FROM BoiteIdee WHERE ID_BoiteIdee = ? ');
    $boite->execute(array($getid));
    $boite = $boite->fetch();

    if(isset($_POST['posteIdee'])) {
        if(isset($_POST['Titre_Idee']) AND isset($_POST['Description_Idee']) AND !empty($_POST['Titre_Idee']) AND !empty($_POST['Description_Idee'])) {
         $titreid = htmlspecialchars($_POST['Titre_Idee']);
         $descriptionid = htmlspecialchars($_POST['Description_Idee']);

    } else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }
   }
}

?>
<h2>BoiteIdee</h2>
<p><?= $boite['contenu']?></p>
<br />
<h2>Description</h2>
<form method="POST">
   <input type="text" name="Titre_Idee" placeholder="Titre de l'idée" /><br />
   <textarea name="Description_Idee" placeholder="Desciption de l'idée "></textarea>
        <br/>
   <input type="submit" value="Poste ton idée " name="submit_commentaire" />
</form>
<?php if(isset($c_erreur)){ echo "Erreur:".$c_erreur;}?>


