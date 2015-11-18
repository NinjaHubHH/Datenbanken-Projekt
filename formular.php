<?php
if ($_GET['name'] != "" && $_GET['email'] != "" && $_GET['betreff'] != "" && $_GET['nachricht'] != "") {
	mail ('support@blumenladen.de','Kontakt-Formular: ' $_GET['betreff'], 
			'Kontakt-Formular wurde ausgefüllt von ' $_GET['name'] ' Email: ' $_GET['email'] ' Nachricht: \n\n' $_GET['nachricht'] );
}
?>


<head>
	<title> Formular - test </title>
</head>

<body>
	
	<h1> 
	<?php
	echo $_GET['name']
	?>
	</h1>

	<h2> Kontakt-Formular</h2>
		
	<form action="formular.php">
		<br>Vorname </br>
		<input type = "text" name = "vorname" placeholder= "Name"> <!--name ist die ID -->
		<input type="submit" value="Senden"><br>
		
		<br>
		
		<input type = "text" value="<?php echo $_GET['name']; ?>" name = "name" placeholder= "Name"><br>
		<input type = "text" value="" name = "email" placeholder= "Email"><br>	
		<input type = "text" value="" name = "betreff" placeholder= "Betreff"><br>
		
		 <!--textfeld wird mit textarea geöffnet und geschlossen, mit rows="10" zb kann man die Zeilen festlegen -->
		 <!-- und mit cols="50" die breite des Textfeldes-->
		<textarea name ="inhalt" placeholder ="Nachricht" rows="8" cols="40"  ></textarea>
		
		<br><input type="submit" value="Senden">
		
	</form>
</body>
</html>
