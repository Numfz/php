<?php

?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Session</title>
</head>
<body>
  <h3>Hemligt</h3>

  <?php
  $inloggad = $_POST['val'];


  if ($inloggad=="ja")
  {
    echo "Du har tillåtelse!<br>";
  }
  else {
    echo "Du har inte tillåtelse!<br>";
  }
  ?>
</body>
</html>
