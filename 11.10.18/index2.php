<html>
<head>
  <title>  Uppgift 1  </title>
<meta charset="utf-8">
</head>
<body>

<h2>Beräkna</h2>

  <form name="valjTal" action="index2.php" method="post">
      Tal1  <input type="text" name="Tal1">
<br>
      Tal2  <input type="text" name="Tal2">
<br>
    <select name="Raknesatt">
      <option value"+">+</option>
      <option value"-">-</option>
      <option value"*">*</option>
      <option value"/">/</option>
  </select>
<br>
  <input type="submit">
  </form>
  <?php
  $tal1 =$_POST["Tal1"];
  $tal2 =$_POST["Tal2"];
    $raknesatt =$_POST["Raknesatt"];
//echo $tal1;
//echo $raknesatt;
//echo $tal2;

if ($raknesatt == "+")
{
  $summa=($tal1+$tal2);
}
else if ($raknesatt == "-")
{
  $summa=($tal1-$tal2);
}
else if ($raknesatt == "*")
{
  $summa=($tal1*$tal2);
}
else if ($raknesatt == "/")
{
  $summa=($tal1/$tal2);
}
echo $tal1.$raknesatt.$tal2."=".$summa;


?>

</body>
</html>
