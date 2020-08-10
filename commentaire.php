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
<a href="./index.php">
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
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Recherche ... " title="Type in a name">
</nav>
</a>
<?php
    if (!isset($_COOKIE["pseudo"])) {
        echo "Veuillez vous connecter";
        ?>
        <meta http-equiv="refresh" content="0; URL=http://traqbloc.smr-industries.fr/tut/authentification.php">
        <?php
    }
?>
<table class="tg">
	<form action="./index.php" method="post">
		<button style="margin-top: 5px;"> Retour </button>
	</form>
	<h1 style="color: black;"> Espace commentaire </h1>
	<?php
		$requete = $bd->prepare("SELECT `TUT_COMMENTAIRE_ID`, `TUT_COMMENTAIRE_DATE`, `TUT_COMMENTAIRE_PSEUDO` , `TUT_COMMENTAIRE_MSG` FROM `TUT_COMMENTAIRE_TABLE` ORDER BY `TUT_COMMENTAIRE_DATE` ASC");
	    $requete -> execute();
	    echo "<p> </p>";
		while ($message = $requete->fetch()) {
		 	$TUT_COMMENTAIRE_ID = $message['TUT_COMMENTAIRE_ID'];
		    $TUT_COMMENTAIRE_DATE = $message['TUT_COMMENTAIRE_DATE'];
		    $TUT_COMMENTAIRE_PSEUDO = $message['TUT_COMMENTAIRE_PSEUDO'];
		    $TUT_COMMENTAIRE_MSG = $message['TUT_COMMENTAIRE_MSG'];

		    echo "<tr> <td>";
		    echo $TUT_COMMENTAIRE_PSEUDO." le ".$TUT_COMMENTAIRE_DATE." : ".$TUT_COMMENTAIRE_MSG;
		    echo "</td> </tr>";
	    }
	   $requete->closeCursor();
	?>
	<form action="./commentaire_post.php" method="post">
	    <tr>
	        <td class="tg-1" colspan="3">
	            <textarea type="text" name="TUT_COMMENTAIRE_MSG" id="TUT_COMMENTAIRE_MSG" cols="300" rows="5"></textarea>
	            <input type="submit" value="ajouter" />
	        </td>
	    </tr>
	</form>
</table>
</body>
</html>