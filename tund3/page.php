<?php
$firstName = "Rait";
$lastName ="Väiko";
// püüan POST andmed kinni
var_dump($_POST);
if (isset($_POST["firstName"])) {
	$firstName = $_POST["firstName"]; 
}
if (isset($_POST["lastName"])) {
	$firstName = $_POST["lastName"]; 
}
	?>



<!DOCTYPE html>
<html>
	<head>
	<meta charset=" utf-8 "> 
	<h1>Rait Väiko õppetöö</h1>

  </head>
  <body>
  
  <hr>
  
 <form method="POST">
	<label>Eesnimi: </label>
	<input type="text" name="firstName">
	<label>Perekonnanimi: </label>
	<input type="text" name="lastNname">
	<label>Sünniaasta: </label>
	<input type="number" min="1914" max="2005" value="1999" name="birthyear">
	<input type="submit" name="submitUserData" value="Saada andmed">
	
</form>
<hr>
<?php
		if (isset($_POST["birthyear"])){
	echo "<p>olete elanud järgnevatel aastatel:</p>";
	echo "<ul>";
	for ($i - $_POST["birthyear"]; $i <= date("Y"); $i++) {
		echo "<li>" .$i."</li>";
	}
	echo "</ul>";
		}

?>	
 </body>
</html>
