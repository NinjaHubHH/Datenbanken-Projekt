<?php

$user = "ninja93";
$pass = "HotDog555";

try {
	$dbh = new PDO('mysql:host=localhost;dbname=Shooting;charset=utf8', $user, $pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}



/* $dbhost="localhost";
$dbuser="ninja93";
$dbpass="HotDog555";
$dbname="ninja93";
$dbconnection = new mysqli($dbhost,$dbuser, $dbpass,$dbname);
mysql_set_charset('utf8'); */


/* $servername = "localhost";
$username = "ninja93_test";
$passwort = "test";
$dbname = "ninja93_test";

$conn = new mysqli($servername, $username, $passwort, $dbname);

echo "datenbank funzt";
 */


?>