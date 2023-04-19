<?php 
$mainurl="http://localhost/phpmwf_1pm/module5_mvc_app/mvc-app/";
$baseurl="http://localhost/phpmwf_1pm/module5_mvc_app/mvc-app/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Yashraj Online ecommerce selling products for Mens | womens | kids </title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- stylesheet or css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel='stylesheet' type='text/css' media='screen' href='<?php  echo $baseurl;?>css/style.css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- js or javascript file -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<!--header start here  -->
<div class="container-fluid header p-5">
<div class="row">    
<!-- contact us or email us -->
<div class="col-md-4 contact-us">
    <b><i class="bi bi-inbox"></i>&nbsp;<a href="mailto:info@gmail.com">info@gmail.com</a> | Call Us :(+91)-9998003879</b>
</div>
<!-- search box -->
<div class="col-md-4">
    <div class="form-group">
        <input type="text" name="search" placeholder="Search anything here..." required class="form-control">
    </div>
</div>
<!-- social media -->
<div class="col-md-4 social-media">
    <b><a href="<?php echo $mainurl;?>viewcart"><i class="bi bi-cart"></i>&nbsp;<span class="badge badge-sm bg-danger">(0)</span></a></b>
    &nbsp;
    <b><a href="" data-bs-toggle="modal" data-bs-target="#log"><i class="bi bi-person-add"></i>&nbsp;<span class="badge badge-sm bg-dark">(0)</span></a></b>

    <b><i class="bi bi-facebook"></i>
        <i class="bi bi-whatsapp"></i>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-linkedin"></i>
        <a href="<?php echo $mainurl;?>youtubechanel"><i class="bi bi-youtube"></i></b></a>
</div>
</div>
</div>



</body>
</html>