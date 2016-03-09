<?php

require ("sqlConnect.php");

$temp = $_POST;

$Name = $_POST ['Name'];
$Vorname = $_POST['Vorname'];
$PLZ = $_POST['PLZ'];
$Email = $_POST['Email'];
$Tierart = $_POST['Tierart'];
$Vorstellungen = $_POST['Vorstellungen'];
$Sonstiges = $_POST['Sonstiges'];

$dbconnection = new mysqli($dbhost,$dbuser, $dbpass,$dbname) or die ("Verbindungsversuch fehlgeschlagen");

echo "Die Datenbank-Verbindung hat geklappt";
echo "<br>";

mysql_select_db($dbname, $dbconnection) or die ("Konnte die Datenbank nicht wählen");

$sql = "INSERT INTO Shooting (Name,Vorname,PLZ,Email,Tierart,Vorstellungen,Sonstiges) Values ($temp)";

echo "Die Auswahl der Datenbank hat geklappt";
echo "<br>";

	
	$eintrag = "INSERT INTO Shooting (Name,Vorname,PLZ,Email,Tierart,Vorstellungen,Sonstige Wünsche) Values ('$Name','$Vorname','$PLZ','$Email','$Tierart','$Vorstellungen','$Sonstiges')";
	$eintrage = mysql_query($eintrag);
	
echo "Die Daten wurden eingetragen";
echo "<br>";
	
	if($eintragen == true){
		echo "Daten erfolgreich in die Datenbank eingetragen";
	}
	else {
		echo "Fehler beim Eintragen in die Datenbank";
	}
	
	
	
	
	/* 
	$Benutzername = $_POST['Benutzername'];
	$Passwort = $_POST['Passwort'];
	$Email = $_POST['Email'];

	$con = mysql_connect("mysql16.1blu.de","s117931_2131326","Jo96688968");
	mysql_select_db("db117931x2131326", $con);
	$eintrag = "INSERT INTO MusikQuiz (Benutzername, Passwort, Email) VALUES ('$Benutzername', '$Passwort', '$Email')";

	mysql_query($eintrag, $con);
	echo "Ihre Registrierung war erfolgreich, Sie werden in 5 Sekunden automatisch zu Ihrem Profil weitergeleitet" ;
	 */
?>
