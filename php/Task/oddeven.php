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
        Enter any value :<input type="text" name="val" required><br>
        <input type="submit" name="cal" value="submit">

   </form>
</center>

<?php
  
 if(isset($_POST["cal"]))
 {
   $_POST["val"];
   if($val%2==0)
    {
        echo "number is even";
    }
    else
    {
        echo "number is odd";
    }
}

?>
</body>
</html>