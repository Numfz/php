<?php
  session_start();
  require_once("validate.php");
  $anamn_test = test($_POST['anamn']);
    if ( $anamn_test == "ok" )
  {
  $password_test = test($_POST['password']);
    if ($password_test == "ok")
      {
       $_SESSION['anamn'] = $_POST['anamn'];
       $_SESSION['password'] = $_POST['password'];
   header("location:checkdb.php");
             exit();
      }
      else
        {
          $_SESSION['fel'] = "Lösenord: ".$password_test;
    header("location:fel.php");
            exit();
          }
  }
  else
  {
    $_SESSION['fel'] = "Användarnamn: ".$anamn_test;
    header("location:fel.php");
    exit();
  }
?>
