<?php
  //echo "See on minu esimene php!"; //rumal teade
  $firstName = "Rait";
  $lastName = "V�iko";
  $dateToday = date("d");
  $weekdayToday = date("N");
  $yearNow = date("o");
  $weekdayNamesET = ["esmasp�ev", "teisip�ev", "kolmap�ev", "neljap�ev", "reede", "laup�ev", "p�hap�ev"];
  $monthNow = date("n");
  $monthNamesET = ["jaanuar", "veebruar", "m�rts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
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
	  $partOfDay = "koolip�ev";
  }
  if ($hourNow > 16){
	  $partOfDay = "loodetavasti vaba aeg";
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<h1>Rait V�iko</h1>
 
</head>
<body>
  

  
  <?php
    //echo "<p>T�nane kuup�ev on: " .$dateToday .".</p> \n";
	echo "<p>T�na on " .$weekdayNamesET[$weekdayToday - 1] .", ".$dateToday .". ".$monthNamesET[$monthNow - 1]." ".$yearNow."  </p> \n";
	echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", k�es oli " .$partOfDay .".</p> \n";
  ?>


</body>
</html>