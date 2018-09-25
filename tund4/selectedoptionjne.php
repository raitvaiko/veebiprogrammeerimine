<?php
  //lisan teise php faili
  require("function.php")
  $firstName = "Tundmatu";
  $lastName = "Kodanik";
  $fullName = "";
  //püüan POST andmed kinni
  //var_dump($_POST);
  if (isset($_POST["firstName"])){
	$firstName = test_input($_POST["firstName"]);
   
  
  }
  if (isset($_POST["lastName"])){
	$lastName = test_input($_POST["lastName"]);
  }
  
  
  
  //Mõttetu funktsioon?
  function stupidfunction() {
  $GLOBALS["fullName"] = $GLOBALS["firstName"] ." " .$GLOBALS["lastName"];
  
  }
  stupidfunction()
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
  <?php
    echo $firstName;
	echo " ";
	echo $lastName;
  ?>
  , õppetöö</title>
</head>
<body>
  <h1>
  <?php
    echo $firstName ." " .$lastName;
  ?>
  </h1>
  <p>Siin on minu <a href="http://www.tlu.ee">TLÜ</a> õppetöö raames valminud veebilehed. Need ei oma mingit sügavat sisu ja nende kopeerimine ei oma mõtet.</p>
  <hr>
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Eesnimi: </label>
    <input type="text" name="firstName">
    <label>Perekonnanimi: </label>
    <input type="text" name="lastName">
	<label>Sünniaasta: </label>
<select name="birthMonth">
  <option value="1">jaanuar</option>
  <option value="2">veebruar</option>
  <option value="3">märts</option>
  <option value="4">aprill</option>
  <option value="5">mai</option>
  <option value="6">juuni</option>
  <option value="7">juuli</option>
  <option value="8">august</option>
  <option value="9">september</option>
  <option value="10">oktoober</option>
  <option value="11">november</option>
  <option value="12">detsember</option>
  <option value="9" selected>september</option>
</select>
	<input type="number" min="1914" max="2000" value="1999" name="birthyear">
    <input type="submit" name="submitUserData" value="Saada andmed">
  </form>
  <hr>
  <?php
    if (isset($_POST["birthyear"])){
	  echo "<h2>" .$fullName ."</h2>";
	  echo "<p>Olete elanud järgnevatel aastatel:</p> \n";
	  echo "<ul> \n";
	    for ($i = $_POST["birthyear"]; $i <= date("Y"); $i++){
		  echo "<li>" .$i ."</li> \n";
		}
	  echo "</ul> \n";
	}
  ?>
  
</body>
</html>