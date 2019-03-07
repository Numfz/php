<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>wordlist</title>
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
    <h3> Inloggningsuppgifter </h3>
    <table>
      <tr><th>Användarnamn</th><br>
        <th>Lösenord</th></tr>

    </table>
    <form action="indexB.php" method="post">
      <input type="text" name="anamn">
      <input type="text" name="losen">
      <input type="submit" value="Skicka!">
    </form>


</body>
</html>
