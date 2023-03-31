<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    

<!-- js or javascript file -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src='main.js'></script>
   
</head>
<body >
    <!-- Header here -->
 <section id="header">
    <div class="container-fluid mt-0">
    <div class="row">
         <div class="col-sm-2 m-2 ">
    <a href="index.html"><img src="image/logo3d.webp" alt="Maruti" width="90%" height="80px"/></a>
 </div>

      <!-- navbar start here -->
     <div class="col-md-9">
      <nav class="navbar navbar-expand-lg">
         <button type="button" class="navbar-toggler btn-white bg-white" data-bs-toggle="collapse" data-bs-target="#coll">
             <span class="bi bi-grid-3x2-gap-fill"></span>
         </button>
     <div class="collapse navbar-collapse" id="coll">
         <div class="navbar-link ">
          <ul>
                 <li><a href="index.html">Home</a></li>
                 <li><a href="index.html#about">About</a></li>
                 <li><a href="index.html#menu">Menu</a></li>
                 <li><a href="index.html#special">Specials</a></li>
                 <li><a href="index.html#event">Events</a></li>
                 <li><a href="index.html#gallery">Gallery</a></li>
                 <li><a href="index.html#chefs">Chefs</a></li>
                 <li class="dropdown"><a class="dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#"> <i class="bi bi-person"></i>Account</a>  
                   <ul class="dropdown-menu">
                     <li> <a href="Register.html"> <i class="bi bi-person"></i> SignUp! </a></li>
                     <li> <a href="login.html" class="bi bi-person-add"> SignIn </a></li>
                   </ul>
                 
                 </li>
                 <li><a href="index.html#contact">Contact</a></li>
                 <div class="bktbl">
                 <button type="button" class="btn btn-danger btn-md ms-5">Book Table</button></div>
             </ul>
             
             
         
         </div>
     </div>
     </div>
          </div>
     
 </nav>

</div>
    </div>
</section> 

<?php
session_start();
if(isset($_POST["submit"]))
{
    $em=$_POST["email"];
    $pass=$_POST["password"];
    if($em=='jigna@gmail.com' && $pass='jigna123')
    {
        $_SESSION["email"]=$_POST["email"];
        echo "<h3 align='center' style='color:green'> You are logged in sucessfully</h3>";
        header('Location:profile.php');
    }
    else
    {
        echo "<script>
        alert('your email and password are incorrect try again!')
        window.location='index.html';
        </script>";
    }
}

?>



  <div id="form">
    <caption>
        <h2 align="center">Login Form</h2>
    </caption>
    <form method="post">
    <table align="center">
        <!--<thead>
            <tr>
                <th></th>
            </tr>
        </thead>-->
        <tbody>
            <tr> 
                
                <td > <input type="text" name="email" placeholder="Email*" required></td>
            </tr>
            <tr>
                
                <td > <input type="password" name="password" placeholder="password*" required></td>
            </tr>
            <tr>
                <td> <input type="checkbox" name="remember me"> <b style="font-size: 18px; color: gray;">Remember Me</b></td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Login"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="">Forget Password</a></td>
            </tr>
            <tr>
                <td>
                   <b style="font-size: 18px;"> Don't have an account ?</b> <a href="Register.html">Create Your account</a>

                </td>
            </tr>

        </tbody>
    </table>
</form>

</div>





</body>
</html>
