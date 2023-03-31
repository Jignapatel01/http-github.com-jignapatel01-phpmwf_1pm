<?php 
// require_once("header.php");
// require_once("navigation.php");

?>
<!-- content start here-->
<div class="container-fluid content  mt-1 p-5">
    <div class="row">
        <div class="col-md-3 shadow bg-light p-3 m-3"><h5 align="center" class="bg-dark text-white p-2">Welcome To:<?php echo rtrim($_SESSION["email"],"@gmail.com");?></h5>
        
            <ul class="sidebar-link">
                <li><a href="">24x7 help</a></li>
                <li><a href="">COD facilities</a></li>
                
            </ul>
 
        
        </div>
        
        <div class="col-md-8  p-3 m-3">
            
            <div class="card">
                <div class="card-header">Manage Profile <button type="button" class="btn btn-sm btn-dark float-end">View more >></button></div>
                <div class="card-body">
                  <button class="btn btn-dark text-white mt-2">Manage profiles here >></button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- <?php
require_once("footer.php");


?> -->
