<?php
echo "<!--   												-->"."\n";
echo "<!--    __  __  __         __ __ __     __  ___    	-->"."\n";
echo "<!--   /  \|__)|_ |\ | __ (_ |_ /  /  \|__)| | \_/ 	-->"."\n";
echo "<!--   \__/|   |__| \|    __)|__\__\__/| \ | |  | 	-->"."\n";
echo "<!--   												-->"."\n";
echo "<!--   												-->"."\n";
    try {
    $bd = new PDO ( "mysql:host=smrindusqg589.mysql.db;dbname=smrindusqg589", "smrindusqg589", "8u62fd1EG" ); 
    $bd->exec ('SET NAMES utf8') ;
    }
    catch (Exception $e) {
    die ("Erreur: Connexion à la base impossible");
    }
?>