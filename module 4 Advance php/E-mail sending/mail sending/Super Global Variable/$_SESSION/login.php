
<?php
require_once("navigation.php");
if(isset($_POST["btn"]))
{
    $email=$_POST["mail"];
    $pass=$_POST["pass"];

    if($email=='jigna@gmail.com' && $pass=='12345')
    {
        $_SESSION["mail"]=$_POST["mail"];
        echo "<h3> Login Successfully !</h3>";
        header("Location:profile.php");
    }
    else
    {
        echo "<h3> Your email and password incorrct try again ?</h3>";
        header("Location : login.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <center>
        <div class="container mt-5 p-5 ms-auto bg-secondary text-white">
            <form method="post">
            <label>Email :</label>
            <input type="email" name="mail" placeholder="Email *" required>
            <br><br>
            <label>Password :</label>
            <input type="password" name="pass" placeholder="password *" required>
            <br><br>
            <input type="submit" name="btn" value="Login">

            </form>

        </div>

    </center>


</body>
</html>
<?php
require_once("footer.php");
?>
