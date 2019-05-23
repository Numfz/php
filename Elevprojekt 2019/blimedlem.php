<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Bli medlem</title>
<script type="text/javascript" src="fieldtest.js"></script>
   </head>
   <body>

       <table><tr><h1>Mata in dina uppgifter nedan</h1></tr><br>
        <td>Användarnamn:</td><td><input type="text" name="anamn"></td>
        <td>Lösenord:</td><td><input type="text" name="password"></td>
        <td>Förnamn:</td><td><input type="text" name="fnamn"></td>
        <td>Efternamn:</td><td><input type="text" name="enamn"></td>
        <td>Telefon nummer:</td><td><input type="text" name="Tel"></td>


         <td><input type="submit" value="Skapa användare"
         onclick="return kolla(document.getElementById('anamn').value,document.getElementById('password').value)"></td>
       </table>

<br><a href="index1.php">Ångra</a><br>


   </body>
   </html>
