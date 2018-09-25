<?php
   require("function.php");

   $notice = readallmessages();

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
  
  
  <?php echo $notice; ?>
  
</body>
</html>