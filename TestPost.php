<meta charset="utf-8" />
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=Web;charset=utf8', 'root', 'dylan');

if(isset($_GET['ID_BoiteIdee']) AND !empty($_GET['ID_BoiteIdee'])){
    $getid = htmlspecialchars($_GET['ID_BoiteIdee']);
    $boite = $bdd->prepare('SELECT * FROM boiteidee WHERE ID_BoiteIdee = ?');
    $boite->execute(array($getid));
    $boite = $boite->fetch();

?>
<h2>BoiteIdee</h2>
<p><?= $boite['Description_Idee'] ?></p>
<?php
    }
?>
