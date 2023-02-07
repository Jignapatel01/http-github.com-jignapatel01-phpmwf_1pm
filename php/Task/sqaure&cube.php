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
    Enter number for sqaure :
        <input type="text" name="sq" required><br><br>
    Enter number for cube :
        <input type="text"  name="cu" required><br><br>
        <input type="submit" name="cal" value="Calculate">   <br>


        </form> 

<?php
    if(isset($_POST["cal"]))
    {
        $sq=$_POST["sq"];
        $cu=$_POST["cu"];
        $sqare=$sq*$sq;
        $cube=$cu*$cu*$cu;
        echo "sqaure of $sq is:".$sqare."<br>";
        echo "cube of $cu is:".$cube;

    }
?>

</center>    


</body>
</html>