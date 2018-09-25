<?php
   require("function.php");

	$notice = null;

	if (isset($_POST["submitMessage"])){
	if ($_POST["message"] != "Kirja siia" and !empty ($_POST["message"])) {
	 $message = test_input($_POST["message"]);
	 $notice = saveamsg($message);
	} else {
	 $notice = "Palun kirjuta sõnum";
	  }
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Anonüüme sõnumi lisamine</title>
  
</head>
<body>
  
  <h1>SÕNUMI LISAMINE</h1>
  <hr>
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Sõnum (max 256 märki):</label>
	<br>
	<textarea name="message" rows="4" cols="64">Kirja siia</textarea>
	<br>
    <input type="submit" name="submitMessage" value="Salvesta sõnum">
  </form>
  <hr>
  <p><?php echo $notice; ?></p>
  
</body>
</html>