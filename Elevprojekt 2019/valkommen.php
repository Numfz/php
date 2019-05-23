<?php
  session_start();
  if (!$_SESSION['inloggad'])
  {
    $_SESSION['fel'] = "<h2>Du har inte rätt att vara här</h2><a href=\"index1.php\">Logga in</a>";
    header("location:fel.php");
    exit();
  }

  /*lyckats få till 'skalet' för hemsidan och vissa funktioner fungerar
  men på  grund av tidsbrist funkerar inte allt.
  det mesta är länkat så att man kommer rätt och själva hemsidan är ungefär klar
  förutom funktioner som inte hunnits få till korrekt.*/

?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Mina uppgifter</title>
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

<h1>Välkommen</h1>
<h2> Mina uppgifter: </h2>
<br><a href="redigera.php">REDIGERA</a><br>

<br><table>
  <tr><td>Användarnamn</td><td><?php echo $_SESSION['anamn'] ?></td></tr>
  <tr><td>Förnamn</td><td><?php echo $_SESSION['fnamn'] ?></td></tr>
  <tr><td>Efternamn</td><td><?php echo $_SESSION['enamn'] ?></td></tr>
  <tr><td>Telefon</td><td><?php echo $_SESSION['Tel'] ?></td></tr>
  <tr><td>Admin</td><td><?php echo $_SESSION['Admin'] ?></td></tr>



</table>

<br><a href="loggaut.php">Logga ut</a><br>
<br><a href="medlemmar.php">Medlemsregister</a>

   </body>
   </html>
