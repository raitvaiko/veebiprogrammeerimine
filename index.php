<?php
	echo "See on php"; 
	$firstName = "Rait"; 
	$lastName = "Väiko";
	$dateToday = date("d.m.Y");
	$hourNow = date("G");
	$partOfDay = " ";
	if ($hourNow < 8 ) { 
		$partOfDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "koolipäev";
	}
	if ($hourNow >16) {
		$partOfDay = "loodetavasti vaba aeg";
	}
		
?>

	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 

<?php
		echo $firstName;
		echo " ";
		echo $lastName;
	?>
  </head>
  <body>
	<?php
		echo $firstName . " " . $lastName;
	?>
	<?php
		echo "<p>Tänane kuupäev on: " . $dateToday .".</p>"; \n"
		echo "<p>Lehe avamise hetkel oli kell ".date("H:i:s"). ",käes oli
		" .$partOfDay.".<p>"; ;
		
	?>
	
    <h1>Rait Väiko</h1>
	
    <p>TLÜ koduleht:  <a href="http://www.tlu.ee" target = "blank" >TLÜ</a>
	
	<p>Minu sõber teeb ka veebi <a href "../../~rasmaro/veebiprogrammeerimine/" target ="blank" >LINK</a> </p>
	
	<p>Tere. Ei oskagi midagi kirjutada siia.</p>

	<img src="../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_2.jpg" alt="Tlü Terra õppehoone"
	
	

 </body>
</html>
