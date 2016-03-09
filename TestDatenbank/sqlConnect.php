<?php

$dbhost="localhost";
$dbuser="ninja93_test";
$dbpass="test";
$dbname="ninja93_test";
$dbconnection = new mysqli($dbhost,$dbuser, $dbpass,$dbname);
mysql_set_charset('utf8');


/* $servername = "localhost";
$username = "ninja93_test";
$passwort = "test";
$dbname = "ninja93_test";

$conn = new mysqli($servername, $username, $passwort, $dbname);
 */
echo "datenbank funzt";

?>