<?php
require("config.php"); 
$database = "if18_rait_va_1";
//echo $serverHost;
//teksti sisendi kontrollimine
function saveamsg($msg) {
	$notice = "";
	//loome andmebaasiühenduse
$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		//valmistan ette andmebaasikäsu
		$stmt = $mysqli->prepare("INSERT INTO vpamsg (message) VALUES(?) ");
		echo $mysqli->error;
		//bind param kasutusel kui andmed lähevad serverisse, asendan küsimärgi(d) pärisandmetega
		//esimene kirja andmetüübid, siis andmed ise
		// s-string, i-integer, d-decimal, kuupäevad stringid, d-decimel on nt. (5,5) 
		//firstname,lastname,kuupäev on stringid "sss" kolm string on need, ilma komadeta
		$stmt->bind_param("s", $msg);
		//täidame ettevalmistatud käsu
		if ($stmt->execute()){
		  $notice = 'Sõnum: "' .$msg .'" on edukalt salvestatud!';
		} else {
			$notice = "Sõnumi salvetamisel tekkis tõrge: " .$stmt->error;
		}
		//sulgeme ettevalmistatud käsu
		$stmt->close();
		//sulgeme ühenduse
		$mysqli->close();
		return $notice;
		
		
		function readallmessages () {
		$notice = "";
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = $mysqli->prepare("SELECT message FROM vpamsg");
		echo $mysqli->error;
		$stmt->bind_result($msg);
		$stmt->execute();
		//msg tuleb siin
		while($stmt->fetch()) {
			$notice .= "<p>".$msg ."</p> \n";
		}
		}
		
		
		
  }
  



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }



?>