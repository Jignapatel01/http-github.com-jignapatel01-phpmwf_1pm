<?php
if(isset($_GET["btn"]))
{
    $nm=$_GET["nm"];
    echo "<h3 align='center' style='color:brown;'> My Name is : ".$nm."</h3>";
}

?>
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
    <form method="get">
        <label> User Name : </label>
        <input type="text" name="nm" placeholder="Name*">
        <br><br>
        <input type="submit" name="btn" value="Submit">
        <br><br>


    </form>
</center>



</body>
</html>