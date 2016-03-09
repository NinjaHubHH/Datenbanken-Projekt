<?php

require "./config/_squlconnect-php";

$temp = $_POST;
$date = "04.12.2015";
$autor = "Crusard";
$newstext = "Hallo dies ist eine Testtabelle für PHP Datenbanken";

$connection = mysql_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Verbindungsversuch fehlgeschlagen");

mysql_select_db($dbname, $connection) or die("Konnte die Datenbank nicht waehlen");

//INSERT INTO <datenbankname> (<spaltennamen>)
$sql = "INSERT INTO testNews(datum, autor, newstext) Values($temp)";
	
	$eintrag = "INSERT INTO testNews (datum, autor, newstext) VALUES ('$date','$autor','$newstext')";
	$eintragen = mysql_query($eintrag);
	
	if ($eintragen == true){
		
		echo "Daten erfolgreich in die Datenbank eingetragen";
		
	}
	else {
		echo "Fehler beim Eintragen in die Datenbank";
	}
	
		
	


?>