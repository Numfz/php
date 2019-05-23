<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Logga in </title>
<script type="text/javascript" src="fieldtest.js"></script>
   </head>
   <body>
     <form action="index2.php" method="post">

       <table><tr>Mata in dina inloggningsuppgifter nedan</tr><br>
        <br> <td>Användarnamn:</td><td><input type="text" name="anamn" id="anamn"></td>
         <td>Lösenord:</td><td><input type="text" name="password" id="password"></td>
         <td><input type="submit" value="LOGGA IN"
      onclick="return kolla(document.getElementById('anamn').value,document.getElementById('password').value)"></td>
       </table>

<h4>Inte medlem?</h4><a href="blimedlem.php">Bli medlem!</a>


   </body>

   </html>
