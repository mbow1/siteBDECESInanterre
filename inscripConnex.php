<?php
session_start();
    try{
            $pdo = new PDO('mysql:host=localhost;dbname=BDD;', 'root', '');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
        //// Traitemennt Inscription  ////
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
                                        $inseruser = $pdo->prepare("INSERT INTO user(Nom_User, Prenom_User,AdresseMail_User,MotDePasse_User, statut) VALUES (?, ?, ?, ?, ?)");
                                        $inseruser->execute(array($nom,$prenom,$mail,$passe,1));
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

        //// Traitemennt inscription ////


        ///// traitement Connexion /////


        if (isset($_POST['validerconect'])){
            $mailConnect = htmlspecialchars($_POST['mailconect']);
         $passConnect = sha1($_POST['passeconect']);

             if(!empty($_POST['mailconect']) and !empty($_POST['mailconect'])){
                 ////////requete /////
                 $requser = $pdo->prepare("SELECT * FROM user WHERE AdresseMail_User = ? AND MotDePasse_User = ?");
                 $requser->execute(array($mailConnect,$passConnect));
                 $userexiste = $requser->rowCount();

                  ////////requete /////
                 if ($userexiste == 1){
                     $userinfo = $requser->fetch();
                     session_start();
                     $_SESSION['id'] = $userinfo['ID_User'];
                     $_SESSION['mail'] = $userinfo['AdresseMail_User'];
                     $_SESSION['nom'] = $userinfo['Nom_User'];
                     $_SESSION['prenom'] = $userinfo['Prenom_User'];
                     header("Location: event.php?id=".$_SESSION['id']);

                 }else{
                      $messageConnextion = "Mauvais mail ou Mot de passe !";
                 }
            } else {
                $messageConnextion = "Merci de remplir tous les champs !";
            }
        }

        /////fin traitement connexion /////
?>
<!DOCTYPE html>
<html>
    <head>
   <!--  import -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Style.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
   <!--  import -->

        <title> Connextion, Inscription</title>
      <img src="img/banner.png" id="banner">
    </head>
    <body class="container">

        <button id="inscription" type="button" class="btn btn-success">
            <span class="glyphicon glyphicon-user"></span> Inscription
        </button>


        <div class="form-group " id="conect">
            <form method="POST" class="form-horizontal" action="" >
                <img class="logocesi" src="img/cesi-entreprise.png">
                <input type="email" name="mailconect" class="form-control" placeholder="Entrer votre mail CESI"/><br/>
                <input type="password" name="passeconect" class="form-control" placeholder="Mots de Passe" /><br/>
                <div class="checkbox"><label><input type="checkbox"> Se souvenir de moi !</label></div>
                <br/>
                <input type="submit" name="validerconect" value="Se Connecter" class=" btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><br/>
                <br/>
                <br/>
                 <?php
                     if(isset($messageConnextion)){
                        echo '<div class="alert alert-danger" role="alert">
                            <a href="#" class="alert-link">'.$messageConnextion.'</a>
                            </div>';
                     }
            ?>
            </form>
        </div>



        <div id="FormulDinscription" class="form-group ">
            <form method="POST" class="form-horizontal" action="">

                <input type="text" name="nom" class="form-control" placeholder="Votre Nom"/><br/>
                <input type="text" name="prenom" class="form-control" placeholder="Votre Prenom" /><br/>
                <input type="password" name="passe" class="form-control" placeholder="Votre Mot de passe"/><br/>
                <input type="password" name="passe2" class="form-control" placeholder="Confirmation du mot de passe"/><br/>
                <input type="email" name="email" class="form-control" placeholder="Adresse e-mail CESI"/><br/>
                <input type="submit" name="ValiderInscription" class="btn btn-primary"  value="M'inscrire" ><span class="glyphicon glyphicon-ok"></span>
                <br/>
                <br/>

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

         <?php
            include("footer.php");
            ?>

    </footer>





</html>
