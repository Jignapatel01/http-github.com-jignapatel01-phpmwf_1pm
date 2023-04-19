
<!-- navbar start here -->
<nav class="navbar navbar-expand-md bg-dark p-1">
    <!-- logo start here -->
    <a href="" class="navbar-brand p-1"><i class="bi bi-browser-edge"></i> &nbsp; Yashraj e-commerce</a>

    <button type="button" class="navbar-toggler  btn-white bg-white" data-bs-toggle="collapse" data-bs-target="#Coll">
        <span class="bi bi-grid-3x2-gap-fill"></span>
    </button>
    
    <!-- menu start  -->
   <div class="collapse navbar-collapse" id="Coll">
    <ul class="navbar-link p-1">
    <li><a href="<?php echo $mainurl;?>"><i class="bi bi-house"></i>Home</a></li>
    <li><a href="<?php echo $mainurl;?>about-us">Aboutus</a></li>
    <li><a href="<?php echo $mainurl;?>our-services">OurServices</a></li>
    <li><a href="<?php echo $mainurl;?>products"><i class="bi bi-image"></i>Gallery</a></li>
    <li><a href="<?php echo $mainurl;?>portfolio">Portfolio</a></li>
    <li class="dropdown"><a class="dropdown-toggle text-white" data-bs-toggle="dropdown" href="#"><i class="bi bi-person"></i> Account</a>
    <ul class="dropdown-menu bg-dark">
        <li><a href="" data-bs-toggle="modal" data-bs-target="#reg"><i class="bi bi-person"></i> SignUp!</a></li>
        <li><a href="" data-bs-toggle="modal" data-bs-target="#log"><i class="bi bi-person"></i> SignIn!</a></li>
    </ul>
    </li>
    <li><a href="<?php echo $mainurl;?>contact-us">ContactUs</a></li>
   </ul>
   </div>
</nav>
