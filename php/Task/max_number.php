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
        Enter 1st number:
        <input type="text" name="A" required><br>
        Enter 2nd number:
        <input type="text" name="B" required><br>
        Enter 3rd number:
        <input type="text" name="C" required><br>
        <input type="submit" name="cal" value="submit">
</form>
</center>


<?php
    if(isset($_POST["cal"]))
    {
        $A=$_POST["A"];
        $B=$_POST["B"];
        $C=$_POST["C"];
        if($A>$B && $A>$C)
        {
            echo "number 1st is max :".$A;
        } 
         elseif ($B>$C)
         {
             echo "number 2nd is max :".$B;
         }
        else
        {
            echo "number 3rd is max :".$C;
        }
    }


  ?>

</body>
</html>