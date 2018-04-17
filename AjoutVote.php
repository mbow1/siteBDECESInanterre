<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$insertmbr = $bdd->prepare("INSERT INTO a_voter(Vote_Event,ID_User,ID_Evenement) VALUES(TRUE,3,2);");
echo("ptdr");
$insertmbr->execute();
echo("mdr");
?>
