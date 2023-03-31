<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
      if(isset($_POST["clc"]))
      {
        $sq=$_POST["sq"];
        $qb=$_POST["qb"];

        $square=pow($sq,2);
        $qube=pow($qb,3);

        echo "<h3 align='center'>The square of numbers is :".$square."<h3>";

        echo "<h3 align='center'>The qube of numbers is :".$qube."<h3>";
      }

    ?>
    <center>
        <h2>Calculate power and qube</h2>
        <form method="post">
         Enter a number for square :<input type="text" name="sq" required><br><br>
         Enter a number for qube :<input type="text" name="qb" required><br><br>
         <input type="submit" name="clc" value="Calculate >>">
        </form>
    </center>
    
</body>
</html>