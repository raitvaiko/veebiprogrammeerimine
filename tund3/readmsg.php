<?php
   require("function.php");

   $notice = readallmessages();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Anon��me s�numi lisamine</title>
  
</head>
<body>
  
  <h1>S�NUMI LISAMINE</h1>
  <hr>
  
  
  <?php echo $notice; ?>
  
</body>
</html>