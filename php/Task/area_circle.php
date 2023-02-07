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

    Enter Redious of circle:
    <input type="text" name="area"  required><br><br>
    <input type="submit" name="cal" value="calculate">


</form>

</center>
<?php
    if(isset($_POST["cal"]))
    {
        $r=$_POST["area"];
        $pi=3.14;
        $area=$pi*$r*$r;
        echo "<center> Area of circle is : ".$area ."</center>";
    }


?>


</body>
</html>