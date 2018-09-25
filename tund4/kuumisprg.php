<?php
  //echo "See on minu esimene php!"; //rumal teade
  $firstName = "Rait";
  $lastName = "Väiko";
  $dateToday = date("d");
  $weekdayToday = date("N");
  $yearNow = date("o");
  $weekdayNamesET = ["esmaspäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
  $monthNow = date("n");
  $monthNamesET = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
  //echo $weekdayNamesET;
  //var_dump($weekdayNamesET);
  //echo $weekdayNamesET[1];
  //echo $weekdayToday;
  $hourNow = date("G");
  $partOfDay = "";
  if ($hourNow < 8){
	  $partOfDay = "varajane hommik";
  }
  if ($hourNow >= 8 and $hourNow < 16){
	  $partOfDay = "koolipäev";
  }
  if ($hourNow > 16){
	  $partOfDay = "loodetavasti vaba aeg";
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<h1>Rait Väiko</h1>
 
</head>
<body>
  

  
  <?php
    //echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n";
	echo "<p>Täna on " .$weekdayNamesET[$weekdayToday - 1] .", ".$dateToday .". ".$monthNamesET[$monthNow - 1]." ".$yearNow."  </p> \n";
	echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes oli " .$partOfDay .".</p> \n";
  ?>


</body>
</html>