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

    Enter Width of Rectangle:
    <input type="text" name="width"  required><br><br>
    Enter Length of Rectangle:
    <input type="text" name="length"  required><br><br>
    <input type="submit" name="cal" value="calculate">


</form>

</center>
<?php
    if(isset($_POST["cal"]))
    {
        $width=$_POST["width"];
        $length=$_POST["length"];
        $rec=$width*$length;
        echo "<center> Area of circle is : ".$rec ."</center>";
    }


?>


</body>
</html>