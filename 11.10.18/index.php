<html>
<head>
  <title>  Array  </title>
<meta charset="utf-8">
</head>
<body>

<form name="mittFormular" action="index.php" method="post">
  <select name="val">
    <option value"tiger">Tiger</option>
    <option value"lejon">Lejon</option>
    <option value"katt">Katt</option>
</select>

<input type="submit" value"Gör ditt val">
</form>


<?php

$val =$_POST["val"];




?>
</body>
</html>
