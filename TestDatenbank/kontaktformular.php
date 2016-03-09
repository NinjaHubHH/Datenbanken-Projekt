<?php
	//nur direkten zugang zum Formular, keinen über Google Verlinkung zb
	if (!isset($_POST["sub"])){
		exit;
	}
	
	$name = addslashes(htmlspecialchars($_POST["name"]));  
	$email = addslashes(htmlspecialchars($_POST["email"]));
	$number = addslashes(htmlspecialchars($_POST["number"]));
	$message = addslashes(htmlspecialchars($_POST["nachricht"]));

	//sternchen = wurde wirklich etwas ins Feld geschrieben
	if($name == ""){
		echo "Bitte gib deinen Namen an!";
		exit;
	}
	if ($email == ""){
		echo "Bitte gib deine Email an!"
		exit;
	}
	
	if($message == ""){
		echo "Bitte trage eine Nachricht ein!"
		exit;
	}
	
	//Abfrage dass keine Zahl im Namen ist 
	//strpos($name, "0");
	$numbers = array("0","1","2","3","4","5","6","7","8","9");
	
	foreach($numbers as $key => $value){
		if(strpos($name, $value) === FALSE){
		}
		else {
			echo "Der Name darf keine Zahl enthalten!"
			exit;
		}	
	}
	
	echo "Ich habe Ihre Anfrage danked erhalten";
?>