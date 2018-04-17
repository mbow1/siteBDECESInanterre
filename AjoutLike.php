<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$insertmbr = $bdd->prepare("INSERT INTO aimer(Like_Image,ID_User,ID_ImageEvent) VALUES(TRUE,3,1);");
echo("ptdr");
$insertmbr->execute();
echo("mdr");

?>
