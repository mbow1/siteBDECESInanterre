<?php

try{
            $pdo = new PDO('mysql:host=localhost;dbname=BDD;', 'root', '');
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
$requser = $pdo->prepare("SELECT * FROM user WHERE AdresseMail_User = ? AND MotDePasse_User = ?");
                 $userexiste = $requser->rowCount();

?>


<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
            <a class="navbar-brand" href="#">BDE CESI Nanterre</a>
    </div>
       <div class="form-group">
            <input id="recherch" type="text" class="form-control" placeholder="Recherche">
                </div>
            <button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Submit</button>
    <ul  class="nav navbar-nav menu_page">
        <?php
        if (!isset($_SESSION['id'])){
            session_start();
        }
      echo '<li class="active float-left"><a href="#">Home</a></li>';
      echo '<li><a href="market.php?id='.$_SESSION['id'].'">Boutique</a></li>';
      echo '<li><a href="event.php?id='.$_SESSION['id'].'">Evènement</a></li>';
      echo '<li><a href="ideabox.php?id='.$_SESSION['id'].'">Boit à Idée</a></li>';
           ?>
    </ul>



    <ul class="nav navbar-nav navbar-right menu_page">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Se Deconnecter</a></li>
    </ul>
  </div>
</nav>




