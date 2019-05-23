<!DOCTYPE html>
<?php
session_start();
include_once("/home/amelie/hemligt/settings.php");
?>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Medlemmar</title>

   </head>
   <body>

<h1> Medlemmar </h1>

<style>
table {
    border-collapse: collapse;
}
td {
  border-style: solid;
  border-width: 2px;
  padding: 3px;
}
</style>
</head>
<body>

<h4> Filtrera efter: </h4><input type="submit" value="Förnamn"><input type="submit" value="Efternamn"><input type="submit" value="Användarnamn"><input type="submit" value="Telefon nummer">
<br>


  <?php
        try {
  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);


  $stmt = $db->query("SELECT * FROM `tb_ep`");
  ?>

  <table>
  <br><tr><th>Förnamn</th><th>Efternamn</th><th>Användarnamn</th><th>Telefon nummer</th><th>Admin 1/0</th></tr>
  <?php



  while ( $row = $stmt->fetch() ) {
   echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['anamn']."</td><td>".$row['Tel']."</td><td>".$row['Admin']."</td></tr>";



  }
}
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
   }
  ?>
   </table>
<?php   if ($row = $stmt->fetch()) {

          if  ($row['Admin'] = 1);
          {
                                    }

            exit();}
?>

<br><a href="loggaut.php">Logga ut</a><br>
<br><a href="valkommen.php">Föregående sida</a><br>

   </body>
   </html>
