<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$insertmbr = $bdd->prepare("INSERT INTO evenement(Titre_Event,Description_Event,DateEvent) VALUES('Laser-Game','Ceux sera un match à mort par équipe 4vs4.La dernière équipe debout se fera payer sa tourner par tous les perdants','2018-05-28 15:30:00');");
echo("ptdr");
$insertmbr->execute();
echo("mdr");

?>
