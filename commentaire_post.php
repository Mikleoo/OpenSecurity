<?php
    // ajout du blason "open-security"
    // connexion à la bdd
    include './sec.php';
?>

<?php
    // On recupere les valeur necessaire à l'ajout de nouvelles valeurs dans la BDD
    $TUT_COMMENTAIRE_PSEUDO = $_COOKIE["pseudo"];
    $TUT_COMMENTAIRE_MSG = $_POST['TUT_COMMENTAIRE_MSG'];
	$TUT_COMMENTAIRE_DATE = date("Y-m-d-H-i");

    // On insere les valeurs
    $sql = "INSERT INTO `TUT_COMMENTAIRE_TABLE` (`TUT_COMMENTAIRE_DATE`, `TUT_COMMENTAIRE_PSEUDO`, `TUT_COMMENTAIRE_MSG`) VALUES ('$TUT_COMMENTAIRE_DATE', '$TUT_COMMENTAIRE_PSEUDO', '$TUT_COMMENTAIRE_MSG');";
    $req = $bd->prepare($sql);
    $req->execute();
    $lesEnreg=$req->fetchall();
    $req->closeCursor();

    echo "Informations en cours d'enregistrement...";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Open-security </title>
	<meta http-equiv="refresh" content="0; URL=http://traqbloc.smr-industries.fr/tut/commentaire.php">
</head>

<body>
</body>
</html>