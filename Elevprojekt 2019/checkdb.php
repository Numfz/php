<?php
session_start();
$anamn=$_SESSION['anamn'];
$password=$_SESSION['password'];
include_once("/home/amelie/hemligt/settings.php");
//$hash = password_hash($password, PASSWORD_DEFAULT);
try {
   $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT * FROM tb_ep WHERE anamn='$anamn' LIMIT 1");
    if ($row = $stmt->fetch()) {
        if (password_verify($password, $row['password'])) {
             header("location:valkommen.php");
             $_SESSION['inloggad'] = true;
             $_SESSION['anamn'] = $row['anamn'];
             $_SESSION['fnamn'] = $row['fnamn'];
             $_SESSION['enamn'] = $row['enamn'];
             $_SESSION['Tel'] = $row['Tel'];
             $_SESSION['Admin'] = $row['Admin'];

             exit();
          }  else {
             $_SESSION['fel'] = "<h2>Användarnamnet och/eller lösenordet hittas inte</h2><a href=\"index1.php\">Logga in</a>";
             header("location:fel.php");
             exit();
           }
    } else {
         echo "Inloggningen misslyckades!<br>Fel användarnamn och/eller lösenord. (2)<br>";
        $_SESSION['fel'] = "<h2>Användarnamnet och/eller lösenordet hittas inte</h2><a href=\"index1.php\">Logga in</a>";
              header("location:fel.php");
              exit();
    }
 }
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
    $_SESSION['fel'] = "Något gick fel med databasen";
    header("location:fel.php");
    exit();
 }

$pdo = null;
header("Location: valkommen.php");
?>
