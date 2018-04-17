<?php

<!--bonjours-->s
session_start();
    try{
            $pdo = new PDO('mysql:host=localhost;dbname=BDD;', 'root', '');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }

        if (isset($_POST['ValiderInscription'])){

                $nom = htmlspecialchars($_POST['nom']);
                $mail = htmlspecialchars($_POST['email']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $passe = sha1($_POST['passe']);
                $passe2 = sha1($_POST['passe2']);

            if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['passe']) and !empty($_POST['passe2']) and !empty($_POST['email'])){


                $nomlength = strlen($nom);
                if ($nomlength <= 25){
                    $prenomlength = strlen($prenom);
                        if ( $prenomlength <= 25){
                            /// condition pour adresse mail du CESI
                            if( filter_var($mail, FILTER_VALIDATE_EMAIL)){
                                $reqmail = $pdo->prepare("SELECT * FROM user WHERE AdresseMail_User = ?");
                                $reqmail->execute(array($mail));
                                $mailexist = $reqmail->rowCount();
                                 if ($mailexist == 0){
                                        if ( $passe == $passe2){

                                         ////////requete /////
                                        $inseruser = $pdo->prepare("INSERT INTO user(Nom_User, Prenom_User,AdresseMail_User,MotDePasse_User) VALUES (?, ?, ?, ?)");
                                        $inseruser->execute(array($nom,$prenom,$mail,$passe));
                                        /////////requete ///////////
                                        $messageBon = "Nickel, compte créé ";
                                } else {
                                   $message = "Vos mots de passe ne correspondent pas !!";
                                }
                                 } else {
                                     $message = "Adresse mail déjà utiliser";
                                 }
                            } else {
                                $message = "veuillez renseigner un email valide !";
                            }
                        }else{
                            $message = "Votre prénom est trop long !";
                        }
                } else{
                    $message = "Votre nom est trop long !";
                }

            } else {
                $message = "Tous les champs doivent être complétés !";
            }
        }
?>
<!DOCTYPE html>
<html>
    <head>
  <!--****************************** import ***************************************!-->




        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="Style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script type="text/javascript" src="js/main.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

  <!--****************************** import ***************************************!-->


        <title> Connextion, Inscription</title>
      <img src="img/banner.png" id="banner">
    </head>
    <body class="container">

        <button id="inscription" type="button" class="btn btn-success">
            <span class="glyphicon glyphicon-user"></span> Inscription
        </button>



        <div class="form-group " id="conect" >
            <form method="POST" class="form-horizontal" action="" >
                <img class="logocesi" src="img/cesi-entreprise.png">
                <input type="email" name="mail" class="form-control" placeholder="Entrer votre mail CESI"/><br/>
                <input type="password" name="motDePasse" class="form-control" placeholder="Mots de Passe" /><br/>
                <div class="checkbox">
                    <label><input type="checkbox"> Se souvenir de moi !</label>
                </div>
                <br/>
                <input type="submit" name="valider" value="Se Connecter" class=" btn btn-primary" href="http://localhost/ProjetWeb/market.php"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></input><br/>

            </form>
        </div>
        <div id="FormulDinscription" class="form-group ">
            <form method="POST" class="form-horizontal" action="">

                <input type="text" name="nom" class="form-control" placeholder="Votre Nom"/><br/>
                <input type="text" name="prenom" class="form-control" placeholder="Votre Prenom" /><br/>
                <input type="password" name="passe" class="form-control" placeholder="Votre Mot de passe"/><br/>
                <input type="password" name="passe2" class="form-control" placeholder="Confirmation du mot de passe"/><br/>
                <input type="email" name="email" class="form-control" placeholder="Adresse e-mail CESI"/><br/>

                <input type="submit" name="ValiderInscription" class="btn btn-primary"  value="M'inscrire" >
                <span class="glyphicon glyphicon-ok"></span>
                </input>
                <br/><br/>

                <?php

                    if(isset($message)){
                        echo '<div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link">'.$message.'</a>
                            </div>';
                    }
                    if(isset($messageBon)){
                        echo '<div class="alert alert-success" role="alert">
                            <a href="#" class="alert-link">'.$messageBon.'</a>
                            </div>';
                    }


                ?>

            </form>

        </div>
    </body>


    <footer>


    </footer>





</html>
