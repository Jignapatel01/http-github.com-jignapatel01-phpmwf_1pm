<?php
require_once("navigation.php");
?>


<div class="container">

    <h2 style="color: green;"> Hi <?php echo rtrim($_SESSION["mail"] ,"@gmail.com")?>! Welcome to in my page.</h2>

</div>


<?php
require_once("footer.php");
?>