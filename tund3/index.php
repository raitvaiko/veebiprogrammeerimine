<?php
	//echo "See on php"; 
	$firstName = "Rait"; 
	$lastName = "Väiko";
	$dateToday = date("d.m.Y");
	$weekdayToday = date("N");
	$weekdayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
	//echo $weekdayNamesET;
	//echo $weekdayToday;
	//var_dump($weekdayNamesET);
	//echo $weekdayNamesET[1];
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
		
	//juhusliku pildi valimine
	$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
	$picEXT = ".jpg";
	$picNUM = mt_rand(2,43);
	//echo $picNUM;	
	$picFILE = $picURL .$picNUM .$picEXT; //sõnade järjekord, ei tohi algata "numi" või "extiga"	
	
?>

	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
	<h1>Rait Väiko</h1>

  </head>
  <body>
	
	<?php
		
		//echo "<p>Tänane kuupäev on: " . $dateToday .".</p>"; 
		echo "<p>Täna on ".$weekdayNamesET[$weekdayToday - 1] . ", " .$dateToday. ".</p> \n";
		echo "<p>Lehe avamise hetkel oli kell ".date("H:i:s"). ",käes oli
		" .$partOfDay.".<p>"; ;
		
	?>
	
    <p>Teised lehed; <a href="photo.php">photo.php</a>.</p> <a href="page.php">page.php</a>
	
    <p>TLÜ koduleht:  <a href="http://www.tlu.ee" target = "blank" >TLÜ</a>
	
	<p>Minu sõber teeb ka veebi <a href "../../../../~rasmaro/veebiprogrammeerimine/" target ="blank" >LINK</a> </p>
	
	<p>Tere. Ei oskagi midagi kirjutada siia.</p>

	<img src="<?php echo $picFILE?>" alt="";
	
	

 </body>
</html>
