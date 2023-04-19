<?php
$mainurl="http://localhost/phpmwf_1pm/Module5-%20MVC-App/mvc-app1/";
$baseurl="http://localhost/phpmwf_1pm/Module5-%20MVC-App/mvc-app1//Assets/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Jay Gayatri Surgical for selling all Surgical products </title>
    <meta name='viewport' content='width=device-width,initial-scale=1'>
    <!-- css file -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl; ?>/css/style.css'>

<!-- js file -->
<script src='main.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
</head>
<body>
    <!-- Header start here -->
    <div class="container-fluid header bg-secondary p-3">


        <div class="row">
            <div class="col-md-4 p-2 contact-us ">
                <b class="text-white p-4"><i class="bi bi-inbox"></i><a href="mailto:info@gmail.com"> info@gmail.com</a>|Call us:(+91)8849346985</b>
            </div>
            <div class="col-md-5 p-2">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Search Here....." class="form-control">
                </div>
            </div>
            <div class="col-md-3 p-2 social-media">
                <b><i class="bi bi-cart"></i><span class="badge badge-btn bg-dark">(0)</span></b>
                    <b><a href="" data-bs-toggle="modal" data-bs-target="#login"><i class="bi bi-person-add"></i><span class="badge badge-btn bg-dark">(0)</span></a></b>
                    <b> <i class="bi bi-facebook"></i>
                        <i class="bi bi-whatsapp"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-linkedin"></i>
                        <a href="<?php echo $mainurl;?>youtubechanel"><i class="bi bi-youtube"></i> </a>          
                    </b>
            </div>

        </div>
      
    </div>
    </body>
</html>