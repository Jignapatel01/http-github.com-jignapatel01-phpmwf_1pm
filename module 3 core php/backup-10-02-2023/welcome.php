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
  
    <h1>Welcome to our website     <h5 align="right">The time is :
        <?php 
        date_default_timezone_set("asia/calcutta");
         
         echo date("d/m/Y H:i:s a");?>
     
    </h1>


    <div style="margin-top: 5%;">

    <img src="https://colinbendell.cloudinary.com/image/upload/c_crop,f_auto,g_auto,h_350,w_400/v1512090971/Wizard-Clap-by-Markus-Magnusson.gif" style="width:380px; height: 400px; margin-left: 35%;">
    </div>
    
</body>
</html>