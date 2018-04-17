<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$insertmbr = $bdd->prepare("INSERT INTO user(Nom_User, Prenom_User, AdresseMail_User,MotDePasse_User) VALUES( 'drage', 'donerr', 'drag@cesi.fr','ddla4');");
echo("ptdr");
$insertmbr->execute();
echo("mdr");

?>
