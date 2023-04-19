<!-- navbar -->
<nav class="navbar navbar-expand-md bg-secondary mt-1">
    <!-- logo here -->
        <a href="" class="navbar-brand text-white mt-0" > <img src="<?php echo $baseurl;?>images/jg2.jpg" width="30%" height="50px" > Jay Gayatri Surgical</a>
         
        <button type="button" class="navbar-toggler btn-white bg-white" data-bs-toggle="collapse" data-bs-target="#Coll">
            <span class="bi bi-grid-3x2-gap-fill"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="Coll">
        <ul class="navbar-link p-1">
            <li><a href="<?php echo $mainurl;?>"><i class="bi bi-person"></i> Home</a>   </li>
            <li class="dropdown"><a href="<?php echo $mainurl;?>product" class="dropdown-toggle" data-bs-toggle="dropdown"> Producrt </a>   
                <ul class="dropdown-menu bg-secondary " style=" border: 0; ">
                    <li><a href="<?php echo $mainurl;?>medicaldisposable"> Medical Disposables</a></li>
                    <li><a href=""> Diagnostic Equipments & Products</a></li>
                    <li><a href=""> Height & Weight Scales</a></li>
                    <li><a href=""> Medical Rubber Products</a></li>
                    <li><a href=""> Rehabilitation Products & Aids</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $mainurl;?>about-us"> About Us </a>  </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person" ></i> Account</a>
                <ul class="dropdown-menu bg-secondary" style="border: 0;">
                    <li><a href="register.php" data-bs-toggle="modal" data-bs-target="#register"><i class="bi bi-person" ></i>SignUp</a></li>
                    <li><a href="login.php" data-bs-toggle="modal" data-bs-target="#login" ><i class="bi bi-person" ></i>SignIn</a></li>
                </ul>
             </li>
            <li><a href="<?php echo $mainurl;?>contact-us">Contact Us </a></li>
            
        </ul>
    </div>
    </nav>