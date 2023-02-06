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
    Enter Mark of Maths :
    <input type="text" name="maths" required><br>
    Enter Mark of Chemestry :
    <input type="text" name="chem" required><br>
    Enter Mark of Computer :
    <input type="text" name="comp" required><br>
    <input type="submit" name="cal" value="calcute avg.">
</form>

<?php
    if(isset($_POST["cal"]))
    {
        $m=$_POST["maths"];
        $ch=$_POST["chem"];
        $com=$_POST["comp"];
        $avg=$m+$ch+$com/3;
        echo "Average mark of total sub.:".$avg;
    }

?>
</center>
</body>
</html>