<!DOCTYPE html>
<?php

include_once("/home/amelie/hemligt/settings.php");
 ?>

<html lang="sv">
<head>
<meta charset="utf-8">
<title>Tabell</title>
      <style>
         table {
         border-collapse: collapse;
         }
         th,td {
         border-style: solid;
         border-width: thin;
         }
      </style>
</head>
<body>
  <?php
        try {
  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);


  $stmt = $db->query("SELECT * FROM `tb_fotboll`");
  ?>

  <table>
  <tr><th>Förnamn</th><th>Efternamn</th><th>Fotbollslag</th></tr>
  <?php



  while ( $row = $stmt->fetch() ) {
   echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['favlag']."</td></tr>";
  //  echo "test";


  }
}
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
   }
  ?>
   </table>

</body>
</html>
