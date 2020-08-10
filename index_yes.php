<?php
    // ajout du blason "open-security"
    // connexion à la bdd
    include './sec.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title> Open-security </title>   	
    <meta http-equiv="refresh" content="0; URL=http://traqbloc.smr-industries.fr/tut/index.php">
</head>
<body>

<?php
    $TUT_STATS_OBJET = $_POST['TUT_STATS_OBJET'];

	if (!isset($_COOKIE["TUT_STATS_OBJET_CAMERA"]) AND $TUT_STATS_OBJET == 'CAMERA') {
		// cookie jamais crée -> possibilité de voter
		echo "ajout de la nouvelle valeur";

    	$requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'CAMERA'");
     	$requete -> execute();
	    while ($message = $requete->fetch()) {
	    	$TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
	        $TUT_STATS_YES = $message['TUT_STATS_YES'];
	        $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
	    }
	    $requete->closeCursor();
	    $TUT_STATS_YES = $TUT_STATS_YES+1;
	    $TUT_STATS_TOTAL = $TUT_STATS_TOTAL+1;

        // Methode pour eviter doublons
            $sql = "DELETE FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'CAMERA'";
            $req = $bd->prepare($sql);
            $req->execute();

        // Ajout nouvelle valeur dans la base de donnée
            $sql = "INSERT INTO `TUT_STATS_TABLE` (`TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL`) VALUES ('CAMERA', $TUT_STATS_YES, $TUT_STATS_TOTAL);";
            $req = $bd->prepare($sql);
            $req->execute();
            $lesEnreg=$req->fetchall();
            $req->closeCursor();
 			setcookie("TUT_STATS_OBJET_CAMERA", "1", time()+36000);
	}

    if (!isset($_COOKIE["TUT_STATS_OBJET_ENCEINTE"]) AND $TUT_STATS_OBJET == 'ENCEINTE') {
        // cookie jamais crée -> possibilité de voter
        echo "ajout de la nouvelle valeur";

        $requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'ENCEINTE'");
        $requete -> execute();
        while ($message = $requete->fetch()) {
            $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
            $TUT_STATS_YES = $message['TUT_STATS_YES'];
            $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
        }
        $requete->closeCursor();
        $TUT_STATS_YES = $TUT_STATS_YES+1;
        $TUT_STATS_TOTAL = $TUT_STATS_TOTAL+1;

        // Methode pour eviter doublons
            $sql = "DELETE FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'ENCEINTE'";
            $req = $bd->prepare($sql);
            $req->execute();

        // Ajout nouvelle valeur dans la base de donnée
            $sql = "INSERT INTO `TUT_STATS_TABLE` (`TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL`) VALUES ('ENCEINTE', $TUT_STATS_YES, $TUT_STATS_TOTAL);";
            $req = $bd->prepare($sql);
            $req->execute();
            $lesEnreg=$req->fetchall();
            $req->closeCursor();
            setcookie("TUT_STATS_OBJET_ENCEINTE", "1", time()+36000);
    }

    if (!isset($_COOKIE["TUT_STATS_OBJET_LUMIERE"]) AND $TUT_STATS_OBJET == 'LUMIERE') {
        // cookie jamais crée -> possibilité de voter
        echo "ajout de la nouvelle valeur";

        $requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'LUMIERE'");
        $requete -> execute();
        while ($message = $requete->fetch()) {
            $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
            $TUT_STATS_YES = $message['TUT_STATS_YES'];
            $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
        }
        $requete->closeCursor();
        $TUT_STATS_YES = $TUT_STATS_YES+1;
        $TUT_STATS_TOTAL = $TUT_STATS_TOTAL+1;

        // Methode pour eviter doublons
            $sql = "DELETE FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'LUMIERE'";
            $req = $bd->prepare($sql);
            $req->execute();

        // Ajout nouvelle valeur dans la base de donnée
            $sql = "INSERT INTO `TUT_STATS_TABLE` (`TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL`) VALUES ('LUMIERE', $TUT_STATS_YES, $TUT_STATS_TOTAL);";
            $req = $bd->prepare($sql);
            $req->execute();
            $lesEnreg=$req->fetchall();
            $req->closeCursor();
            setcookie("TUT_STATS_OBJET_LUMIERE", "1", time()+36000);
    }

    if (!isset($_COOKIE["TUT_STATS_OBJET_MONTRE"]) AND $TUT_STATS_OBJET == 'MONTRE') {
        // cookie jamais crée -> possibilité de voter
        echo "ajout de la nouvelle valeur";

        $requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'MONTRE'");
        $requete -> execute();
        while ($message = $requete->fetch()) {
            $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
            $TUT_STATS_YES = $message['TUT_STATS_YES'];
            $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
        }
        $requete->closeCursor();
        $TUT_STATS_YES = $TUT_STATS_YES+1;
        $TUT_STATS_TOTAL = $TUT_STATS_TOTAL+1;

        // Methode pour eviter doublons
            $sql = "DELETE FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'MONTRE'";
            $req = $bd->prepare($sql);
            $req->execute();

        // Ajout nouvelle valeur dans la base de donnée
            $sql = "INSERT INTO `TUT_STATS_TABLE` (`TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL`) VALUES ('MONTRE', $TUT_STATS_YES, $TUT_STATS_TOTAL);";
            $req = $bd->prepare($sql);
            $req->execute();
            $lesEnreg=$req->fetchall();
            $req->closeCursor();
            setcookie("TUT_STATS_OBJET_MONTRE", "1", time()+36000);
    }

    if (!isset($_COOKIE["TUT_STATS_OBJET_SERRURE"]) AND $TUT_STATS_OBJET == 'SERRURE') {
        // cookie jamais crée -> possibilité de voter
        echo "ajout de la nouvelle valeur";

        $requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'SERRURE'");
        $requete -> execute();
        while ($message = $requete->fetch()) {
            $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
            $TUT_STATS_YES = $message['TUT_STATS_YES'];
            $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
        }
        $requete->closeCursor();
        $TUT_STATS_YES = $TUT_STATS_YES+1;
        $TUT_STATS_TOTAL = $TUT_STATS_TOTAL+1;

        // Methode pour eviter doublons
            $sql = "DELETE FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'SERRURE'";
            $req = $bd->prepare($sql);
            $req->execute();

        // Ajout nouvelle valeur dans la base de donnée
            $sql = "INSERT INTO `TUT_STATS_TABLE` (`TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL`) VALUES ('SERRURE', $TUT_STATS_YES, $TUT_STATS_TOTAL);";
            $req = $bd->prepare($sql);
            $req->execute();
            $lesEnreg=$req->fetchall();
            $req->closeCursor();
            setcookie("TUT_STATS_OBJET_SERRURE", "1", time()+36000);
    }

    if (!isset($_COOKIE["TUT_STATS_OBJET_NEW"]) AND $TUT_STATS_OBJET == 'NEW') {
        // cookie jamais crée -> possibilité de voter
        echo "ajout de la nouvelle valeur";

        $requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'NEW'");
        $requete -> execute();
        while ($message = $requete->fetch()) {
            $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
            $TUT_STATS_YES = $message['TUT_STATS_YES'];
            $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
        }
        $requete->closeCursor();
        $TUT_STATS_YES = $TUT_STATS_YES+1;
        $TUT_STATS_TOTAL = $TUT_STATS_TOTAL+1;

        // Methode pour eviter doublons
            $sql = "DELETE FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'NEW'";
            $req = $bd->prepare($sql);
            $req->execute();

        // Ajout nouvelle valeur dans la base de donnée
            $sql = "INSERT INTO `TUT_STATS_TABLE` (`TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL`) VALUES ('NEW', $TUT_STATS_YES, $TUT_STATS_TOTAL);";
            $req = $bd->prepare($sql);
            $req->execute();
            $lesEnreg=$req->fetchall();
            $req->closeCursor();
            setcookie("TUT_STATS_OBJET_NEW", "1", time()+36000);
    }
?>
</body>
</html>

LUMIERE
MONTRE
SERRURE
NEW