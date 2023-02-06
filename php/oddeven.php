<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_POST["sub"]))
    {
        $number=$_POST["number"];
        if($number%2==0)
        {
            echo "number is even";
        }
        else
        {
            echo "number is odd";
        }
    }
?>
    <center>
    <form method="post">
      enter any number:
      <input type="text" name="number" required>
     <br>
     <input type="submit" name="sub" value="submit"> 
    </form>
</center>

</body>
</html>