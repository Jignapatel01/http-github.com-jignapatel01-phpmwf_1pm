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
    if(isset($_POST["login"]))
    {
        $em=$_POST["email"];
        $pwd=$_POST["pass"];
        if($em=='yash@gmail.com' && $pwd=='yash$$123')
        {
           echo "<h3 align='center' style='color:green'>Thanks you are Logged in successfully</h3>";
           header("refresh:4,welcome.php");

        //location : does not pass echo messages    
        }

        else 
        {

            echo "<h3 align='center' style='color:red'>Your email and passsword are incorect try again</h3>";
            header("refresh:2,refresh.php");
        }
    }  

    ?>
    <center>
        <form method="post">
        <h2>Forms</h2>
        Enter email :<input type="text" name="email" placeholder="Email *" required>
        <br><br>
        Enter password :<input type="password" name="pass" placeholder="Password *" required>
        <br><br>

        <input type="submit" name="login" value="Login">
        <br><br>

</form>
    </center>
</body>
</html>