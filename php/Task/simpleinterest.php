<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
 <form method="post">
    <br>
    Enter Amount:
    <input type="text" name="amt" required><br><br>
    Enter no of year: 
    <input type="text" name="year" required><br><br>
    Enter rate of interest:
    <input type="text" name="rate" required><br><br>
    <input type="submit" name="cal" value="calculate">
    <br><br>
    
</form>

<?php
 
  if(isset($_POST["cal"]))
  {
    $p=$_POST["amt"];
    $n=$_POST["year"];
    $r=$_POST["rate"];
    $si=$p*$r*$n/100;
    echo "simple interest is :".$si;

  }


?>
</center>
</body>
</html>