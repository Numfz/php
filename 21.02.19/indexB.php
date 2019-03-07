<?php

include_once "/home/amelie/hemligt/settings.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Session</title>
</head>
<body>
  <h3> Dina inloggningsuppgifter har kontrollerats </h3>

<?php
$anamn = $_POST['anamn'];
$losen = $_POST['losen'];


try {
  $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

$stmt = $db->query("SELECT anamn, losen FROM `tb_wordlist` WHERE anamn='$anamn' AND losen='$losen'");

if ($row = $stmt->fetch()) {
  $val = "ja";

}

else {
  $val = "nej";

}

} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

 ?>
 <form action="indexC.php" method="post">

   <input type="hidden" name="val" value="<?php echo $val; ?>">
           <input type="submit">
 </form>
</body>
</html>
