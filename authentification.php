<?php
	// ajout du blason "open-security"
    // connexion à la bdd
    include './sec.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Open-security </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="./style/page.css">
	<meta charset="UTF-8">
</head>

<body>
<a style="text-decoration: none; color: white;" href="./index.php">
<div class="logo">
	<div class="cadenas">
		<img src="./img/bascadenas.png">
	</div>
	<div class="ouverture">
		<img src="./img/hautcadenas.png">
	</div>
	<div class="bouclier">
		<img src="./img/bouclierfinal.png">
	</div>
</div>

<nav>
	OPEN SECURITY
</nav>
</a>
<table class="tg">
	<form action="./authentification_post.php" method="post" >
			<h1 style="color: white; margin-left: -2px;"> Veuillez choisir un pseudo ne portant pas de caractère raciste, antisémite, sexiste, pornographique et insultant : </h1>
	       	<input autofocus required type="text" name="PSEUDO" style="margin-top: 5px;" size="13" maxlength="30" value="" id="PSEUDO"/>
	    	<input style="margin-top: 5px;" type="submit" value="Entrer" />
    </form>
</table>
</body>
</html>