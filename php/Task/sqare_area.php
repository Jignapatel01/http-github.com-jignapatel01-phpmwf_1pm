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
    Enter area of rectangle :
    <input type="text" name="area" required><br>
    <input type="submit" name="cal" value="submit">


</form>

<?php
    if(isset($_POST["cal"]))
    {
        $a=$_POST["area"];
        $area=$a*$a;
        echo "Area of ractabgle is :".$area ;

    }



?>

</center>


</body>
</html>
