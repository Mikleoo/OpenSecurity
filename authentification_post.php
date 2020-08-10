<?php
    // ajout du blason "open-security"
    // connexion à la bdd
    include './sec.php';

	$cookie_name = "pseudo";
	$cookie_value = $_POST['PSEUDO'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
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