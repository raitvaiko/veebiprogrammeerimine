<?php
	//loeme kataloogi sisu
	$dirToRead = "../../pics/";
	$allFiles = scandir($dirToRead);
	//var_dump($allFiles);
	$picFiles = array_slice($allFiles,2);
	//var_dump($picFiles);
	
?>



<!DOCTYPE html>
<html>
	<head>
	<meta charset=" utf-8 "> 
	<h1>Rait Väiko</h1>

  </head>
  <body>
	
	<h3>Siin lehel on fotod ning see leht on loodud õppimiseesmärgil</h3>
	
	<?php
	// <img src="pilt.jpg" alt ="pilt">
	for ($i = 0; $i < count($picFiles); $i++) {
	echo '<img src="' .$dirToRead .$picFiles[$i] . '" alt="pilt">'; // muidu oli [$i] asemel [2]
	}
?>
	
	
 </body>
</html>
