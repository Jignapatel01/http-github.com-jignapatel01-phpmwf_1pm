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
   if(isset($_POST["sub"]))
   {
    class A 
    {
        public function test()
        {
            $nm=$_POST["name"];
            echo "<h3 align='center'>The name is : $nm<h3>";
        }
    }

    $obj=new A;
    $obj->test();

   }


  ?>
    <center>
    <form method="post">
        Enter your Name :<input type="text" name="name" placeholder="Name *" required>
        <br><br>
        <input type="submit" name="sub" value="Submit">
    </form>
    </center>

</body>
</html>