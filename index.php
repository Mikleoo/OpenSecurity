<?php
    //connexion à la bdd + blason
    include './sec.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="./style/page.css">
	<meta charset="UTF-8">
	<title> Open-security </title>
	<style type="text/css">

	#myBtn {
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px;
		z-index: 99;
		font-size: 18px;
		border: none;
		outline: none;
		background-color: #1a4163;
		color: white;
		cursor: pointer;
		padding: 15px;
		border-radius: 4px;
	}

	#myBtn:hover {
	  background-color: #555;
	}

	</style>
</head>


<body>

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
	<input autofocus type="text" id="myInput" onkeyup="myFunction()" placeholder="Recherche ... " title="Type in a name">
</nav>

<!-- <marquee direction="right">  </marquee>  -->
<!-- BACKGROUND  -->


<center>
<div class="page">

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!--
	<h2> presentation </h2>
	<h2> menu</h2>
-->
	<ul id="myUL">
		<li id="superli">
			<a> Présentation </a>
			<table>
				<tr>
					<td>
						<p> Avec l’apparition de l’internet des objets, tout objet du quotidien est devenu connecté (enceinte, lumière, montre…). Ces objets proviennent de tous fournisseurs ce qui entraîne un niveau et des failles de sécurité différentes. De nombreuses cyberattaques sont survenus ces dernières années à cause de ces failles, notamment pour les entreprises avec de gros serveur tel que OVH (Hébergeur web) ou Dyn (service informatique américain) pouvant aller jusqu'à perdre plusieurs millions de dollars. </p>
						<p> Notre but est donc d’en informer le plus grand nombre (utilisateurs, professionnels, fabricants…) et de fournir des solutions. Pour cela, créer un site web est la meilleur solution pour toucher le plus de personnes. <p>
						<form action="./commentaire.php" method="post">
							<button> Espace commentaire </button>
						</form>
					</td>
				</tr>
			</table>
		</li>



		<li id="superli">
			<a>Camera</a>
		    <table>
		         <tr>
		            <td> <img src="./img/camera.png">  </td>
		               <td>
		                  Description de l'objet :
		                  Appareil électronique connecté à internet (via IP) qui transmet un flux vidéo constant tant qu'elle est activée.
		                </td>
		         </tr>

		         <tr>
		            <td colspan="2">
		               <h1> 1/ Pourcentage de personne qui possedent l'objet :  </h1>
						    <p> Avez vous cet objet ? </p>
						  	<form action="index_yes.php" method="post">
						        <input id="TUT_STATS_OBJET" name="TUT_STATS_OBJET" type="hidden" value="CAMERA">                        <!--  value tres important   -->
								<button> Oui </button>
							</form>
							<p>	</p>
						  	<form action="index_no.php" method="post">
						        <input id="TUT_STATS_OBJET" name="TUT_STATS_OBJET" type="hidden" value="CAMERA">
								<button> Non </button>
								<p> </p>
							</form>
						<?php
    					$requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'CAMERA'");
     					$requete -> execute();
					    while ($message = $requete->fetch()) {
					        // Recup valeurs serveur pour pouvoir les mettre dans value"" du formulaire
					        $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
					        $TUT_STATS_YES = $message['TUT_STATS_YES'];
					        $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
					        }
					    $requete->closeCursor();
					    $calcul = $TUT_STATS_YES*100/$TUT_STATS_TOTAL;
					    echo "Pourcentage de personnes qui possedent l'objet = ".$calcul." % <p> </p>";
					    ?>
		            </td>
		         </tr>

		         <tr>
		            <td colspan="2">
		            	<h1> 2/ Failles de sécurité : </h1>
		            		<p> - Les mots de passes d'accès à l'équipement ne sont pas systématiquement changés par les utilisateurs dès la première connexion internet. Par conséquent beaucoup d’utilisateur laissent les mots de passe par default (par exemple : admin, 12345, ou même aucun mot de passe) </p>
							      <p> - L'interaction entre la caméra et son service de cloud n'est pas sécurisé ; de plus, le cloud lui-même a un système de sécurité précaire.
		                    Dans le cas ou le constructeur veut installer un firmware sur l’appareil, il est exposé à une connexion non sécurisée durant le téléchargement (le protocole http n’est pas sécurisé) </p>
		                <p> - Pour s’authentifier sur la caméra, il n’y a pas de limites de tentative de mot de passe </p>
		                <p> - Des Botnets utilisent cette faille de sécurité en testant une multitude de login et de password jusqu'à trouve le bon.
		                  Mais les Botnets ne s’arrêtent pas au contrôle / accès au flux vidéo de la caméra qu’il peuvent détourner, ils peuvent se servir de l’appareil pour miner des cryptomonnaie, ou même être utilisé comme « zombie » pour faire des attaques groupées sur des serveurs (et c'est le plus problématique !) </p>
		            </td>
		         </tr>
		         <tr>
		            <td colspan="2">
		                <h1> 3/ Nos recommandations pour les utilisateurs normaux : </h1>
		                  <p> - Recherchez les fonctionnalités de sécurité d'un appareil IoT avant l'achat </p>
							        <p> - Modifier les informations d'identification par défaut sur les périphériques. Utilisez des mots de passe forts et uniques pour les comptes de périphérique et les réseaux Wi-Fi, et changez régulièrement ces derniers </p>
				              <p> - Désactiver les fonctionnalités et les services non requis </p>
							        <p> - Désactiver ou protéger l'accès à distance aux périphériques IoT lorsque vous n'en avez pas besoin </p>
							        <p> - Utilisez des connexions filaires au lieu de sans-fil si possible </p>
						      	  <p> - Consultez régulièrement le site Web du fabricant pour connaître les mises à jour du micrologiciel </p>
                    </td>
              </tr>
              <tr>
                <td clospan="2">
                    <h1> 4/ Nos recommandations supplémentaires pour les utilisateurs experts : </h1>
                      <p> - Effectuer un audit (tests) des périphériques IoT utilisés sur votre réseau </p>
                      <p> - Utilisez une méthode de cryptage fort lors de la configuration de l'accès au réseau Wi-Fi (WPA) </p>
                      <p> - Désactiver la connexion Telnet et utiliser SSH si possible </p>
                      <p> - Modifiez les paramètres de confidentialité et de sécurité par défaut des appareils IoT en fonction de vos exigences et de la politique de sécurité </p>
                      <p> - Désactiver le UPnP (Universal Plug and Play) sur les routeurs sauf en cas d'absolue nécessité </p>
                      <p> - Assurez-vous qu'une panne matérielle n'entraîne pas un état non sécurisé du périphérique </p>
		            </td>
		         </tr>
		    </table>
		</li>

		<li id="superli">
			<a> Enceinte Connectée </a>
		    <table>
		         <tr>
		            <td> <img src="./img/enceinte.png">  </td>
		               <td>
		                  Description de l'objet :
		                  Une enceinte connectée permet d’écouter de la musique en la contrôlant via son téléphone mais aussi de pouvoir dans certain cas communiquer avec elle pour demander divers services (météo, questions, musiques, lumières…)
		               </td>
		         </tr>

		        <tr>
		            <td colspan="2">
		               <h1> 1/ Pourcentage de personne qui possedent l'objet :  </h1>
						    <p> Avez vous cet objet ? </p>
						  	<form action="index_yes.php" method="post">
						        <input id="TUT_STATS_OBJET" name="TUT_STATS_OBJET" type="hidden" value="ENCEINTE">                        <!--  value tres important   -->
								<button> Oui </button>
							</form>
							<p>	</p>
						  	<form action="index_no.php" method="post">
						        <input id="TUT_STATS_OBJET" name="TUT_STATS_OBJET" type="hidden" value="ENCEINTE">
								<button> Non </button>
								<p> </p>
							</form>
						<?php
    					$requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'ENCEINTE'");
     					$requete -> execute();
					    while ($message = $requete->fetch()) {
					        // Recup valeurs serveur pour pouvoir les mettre dans value"" du formulaire
					        $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
					        $TUT_STATS_YES = $message['TUT_STATS_YES'];
					        $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
					        }
					    $requete->closeCursor();
					    $calcul = $TUT_STATS_YES*100/$TUT_STATS_TOTAL;
					    echo "Pourcentage de personnes qui possedent l'objet = ".$calcul." % <p> </p>";
					    ?>
		            </td>
		         </tr>

		         <tr>
		            <td colspan="2">
		            	<h1> 2/ Failles de sécurité : </h1>
                    <p> - Les micros peuvent être activé sans votre volonté à cause d'une mauvaise compréhension de l'IA ou d'un virus.</p>
		            		<p> - Les hackers ne sont pas les seules ennemies de vos appareil connecté, les fabricants peuvent aussi récolter vos données et les utiliser suivant ce que vous avez accepté. Généralement ils gardent vos données vocales dans des serveurs où ils sont utilisés pour améliorer l’interaction des enceintes mais cela représente des données utilisé pour vous (ex : publicité ciblé). </p>
		            </td>
		         </tr>
             <tr>
		            <td colspan="2">
		            	<h1> 3/ Nos recommendations pour les utilisateurs normaux : </h1>
                    <p> - Si votre enceinte comporte un micro, coupez-le au maximum pour éviter toute écoute possible (physiquement si possible). </p>
                    <p> - Lorsque vous ne l’utiliser pas le mieux est encore de la débranché si cela marche par alimentation continu, sinon éteignez là au maximum plutôt qu’une fonction veille. </p>
                    <p> - Privilégiez des marques connues qui auront un service entier dédier à la sécurité. </p>
                    <p> - Supprimez régulièrement l’historique de votre enceinte connecté si cela est possible. </p>
                    <p> - Faites les mises à jour dès que possible, cela peut éviter de garder des failles de sécurité à la vue de tous les mauvais hackers. </p>
                    <p> - Evitez d’échanger toutes informations sensibles avec votre enceinte (ex : données bancaire). Prévenez donc les personnes qui utilise ou sont à proximité de votre enceinte de ne pas dire n’importe quoi </p>
		            </td>
		         </tr>
		    </table>
		</li>

		<li id="superli">
			<a> Lumiere Connectée </a>
		    <table>
		         <tr>
		            <td> <img src="./img/lumiere.png">  </td>
		               <td>
		                  Description de l'objet : Ampoule connecté en Bluetooth permettent d’éclairer la pièce en variant les paramètres (intensité, couleurs, allumage…) c'est un objet de domotique dont l'utilisation est en constante augmentation.
		                </td>
		         </tr>

		         <tr>
		            <td colspan="2">
		               <h1> 1/ Pourcentage de personne qui possedent l'objet :  </h1>
		               </br>
		               - pas de données disponibles -
		            </td>
		         </tr>

		         <tr>
		            <td colspan="2">
		            	<h1> 2/ Failles de sécurité : </h1>
		            		<p> - Les données d’identification sont souvent stockées en clair (accessible physiquement) dans la mémoire flash. </p>
		            		<p> - Pas de fonction démarrage sécurisé ou de chiffrage. </p>
		            		<p> - Utilisation du protocol ZigBee qui propage un virus aux autres ampoule du réseau. </p>
		            </td>
		         </tr>

		         <tr>
		            <td colspan="2">
		                <h1> 3/ Nos recommandations : </h1>
		                	<p> - Se renseigner sur la sécurité de l’objet avant de faire l’achat (fabriquant, provenance, marque, avis…). </p>
		                	<p> - Désactiver les fonctions inutiles si on ne les utilise pas. </p>
		                	<p> - Eteindre l’objet s’il n’est pas utilisé (physiquement si possible). </p>
		                	<p> - Faire toutes les mises à jour disponible dès que possible pour enlever les nouvelles failles de sécurité découvertes. </p>
		                	<p> - Opter pour des objets récents et effectuer les mises à jour. </p>
		                	<p> - Changer le mode d’accès des objets connectés suivant votre besoin. </p>
		                	<p> - Ne pas accéder à votre objet connecté sur les réseaux publics. </p>
		                	<p> - Utilisez un VPN. </p>
		              </li>
		            </td>
		         </tr>
		    </table>
		</li>

<!--		<li id="superli"><a>Ecouteurs </a> content</li> -->
<li id="superli">
  <a> Montre connectée </a>
    <table>
         <tr>
            <td> <img src="./img/montre.png">  </td>
               <td>
                  Description de l'objet :
                  Une montre connectée permet généralement d'acceder à internet, mesurer son pouls ou encore d'intéragir avec d'autres utilisateurs.
               </td>
         </tr>

        <tr>
            <td colspan="2">
               <h1> 1/ Pourcentage de personne qui possedent l'objet :  </h1>
            <p> Avez vous cet objet ? </p>
            <form action="index_yes.php" method="post">
                <input id="TUT_STATS_OBJET" name="TUT_STATS_OBJET" type="hidden" value="MONTRE">                        <!--  value tres important   -->
            <button> Oui </button>
          </form>
          <p>	</p>
            <form action="index_no.php" method="post">
                <input id="TUT_STATS_OBJET" name="TUT_STATS_OBJET" type="hidden" value="MONTRE">
            <button> Non </button>
            <p> </p>
          </form>
        <?php
          $requete = $bd->prepare("SELECT `TUT_STATS_OBJET`, `TUT_STATS_YES`, `TUT_STATS_TOTAL` FROM `TUT_STATS_TABLE` WHERE `TUT_STATS_OBJET` = 'MONTRE'");
          $requete -> execute();
          while ($message = $requete->fetch()) {
              // Recup valeurs serveur pour pouvoir les mettre dans value"" du formulaire
              $TUT_STATS_OBJET = $message['TUT_STATS_OBJET'];
              $TUT_STATS_YES = $message['TUT_STATS_YES'];
              $TUT_STATS_TOTAL = $message['TUT_STATS_TOTAL'];
              }
          $requete->closeCursor();
          $calcul = $TUT_STATS_YES*100/$TUT_STATS_TOTAL;
          echo "Pourcentage de personnes qui possedent l'objet = ".$calcul." % <p> </p>";
          ?>
            </td>
         </tr>

         <tr>
            <td colspan="2">
              <h1> 2/ Failles de sécurité : </h1>
                <p> - L’insuffisance des fonctions d’autorisation et d’authentification des utilisateurs (Pas d'essaie maximum d'authentifiaction pour éviter les botnets) </p>
                <p> - Le manque de chiffrement lors du transfert de données (vulnérable à l'attaque POODLE). </p>
                <p> - Interface de l'application mobile peu sécurisée : les hackers peuvent identifier des comptes utilisateurs valides en s’appuyant sur les informations reçues via les mécanismes de réinitialisation de mots de passe dans 30% des cas.
                <p> - Logiciels et microcode peu sécurisés : 70% des montres ont révélé des failles dans la protection des mises à jour de microcode, comme par exemple la transmission en clair des mises à jour, sans chiffrer les fichiers.
                <p> - Stockage des données personnelles : Comme des données sensibles sont récoltées sur vous (poids, sexe, frequence cardiaque...), il y a un risque que ces informations soit voler
            </td>
         </tr>
         <tr>
            <td colspan="2">
              <h1> 3/ Nos recommendations pour les utilisateurs normaux : </h1>
                <p> - Éviter d'activer des fonctions d'accès sensibles comme par exemple l'ouverture de la porte d'entrée de son domicile ou le déverrouillage de sa voiture, à moins qu'une authentification forte ne soit possible. </p>
                <p> - Activer tous les systèmes de sécurité disponibles. </p>
                <p> - Définir des mots de passe complexes et inédits. </p>
                <p> - Rejeter toute requête d'association de la montre avec un terminal inconnu. </p>
         </tr>
    </table>
</li>

<!--		<li id="superli"><a> TITLE </a> content </li> -->


		<li id="superli"><a> Sources </a>
			<p> </p>
			<p> www.symantec.com </p>
			<p> www.wired.com </p>
			<p> www.lemonde.fr </p>
			<p> www.objetconnecte.net </p>
			<p> www.kanjian.fr</p>
			<p> www.shodan.io</p>
			<p> www.insecam.org</p>
			<p> www.youtube.com</p>
			<p> www.securiteinfo.com</p>
			<p> www.le-monde-informatique.com</p>
			<p> </p>
		</li>

		<li id="superli"><a> Contact </a>
			<p> </p>
			<p> Nous contacter : 📞 07 83 77 33 50 -  📧 contact.opensecu@gmail.com </p>
			<p> </p>
		</li>
	</ul>

</div>
</center>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;  //document. = L'objet document représente la page web. Si tu veux acceder à un élément de la page HTML, tu commence toujours avec document..
    input = document.getElementById("myInput"); //getElementById = renvoie un objet Element représentant l'élément dont la propriété  id correspond à la chaîne de caractères spécifiée
                                                //en gros ca compare ce qu'a rentré l'utilisateur avec l'id des éléments
    filter = input.value.toUpperCase();         //The toUpperCase() method converts a string to uppercase letters.
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");         //Get all elements in the document with the specified tag name:
    for (i = 0; i < li.length; i++) {           //tant que le nombre de li (donc le nombre d'objets) > i faire :
        a = li[i].getElementsByTagName("a")[0]; //prend le 1er <a></a> (1er = "[0]") (donc ca selectionne le <a>) et le 1er li avec i=0 puis le 2eme li avec i=1...
        txtValue = a.textContent || a.innerText; //La propriété .textContent représente le contenu textuel d'un nœud et de ses descendants. (en gros ca prend tout ce qui a dans la <a>)
        if (txtValue.toUpperCase().indexOf(filter) > -1) {  //indexOf = Search a string for "element"
            li[i].style.display = ""; //.style.display Set a <div> element to not be displayed
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>
