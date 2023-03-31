<?php
if(isset($_POST["upload"]))
{
    // customer iamge
    $tmp_name1=$_FILES["custimg"]["tmp_name"];
    $size=$_FILES["custimg"]["size"]/1024;
    $type=$_FILES["custimg"]["type"];
    $path1="upload/customer_image/".$_FILES["custimg"]["name"];
    move_uploaded_file($tmp_name1,$path1);

    //upload gallery
    $tmp_name2=$_FILES["glry"]["tmp_name"];
    $size=$_FILES["glry"]["size"]/1024;
    $type=$_FILES["glry"]["type"];
    $path2="upload/gallery/".$_FILES["glry"]["name"];
    move_uploaded_file($tmp_name2,$path2);

    //upload gallery
    $tmp_name3=$_FILES["proimg"]["tmp_name"];
    $size=$_FILES["proimg"]["size"]/1024;
    $type=$_FILES["proimg"]["type"];
    $path3="upload/product_image/".$_FILES["proimg"]["name"];
    move_uploaded_file($tmp_name3,$path3);

    echo "<h3  align='center' style='color:green'> Image Uploaded successfully</h3>";
    header('refresh:2,upload_form.php');


}


?>






<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</head>
<body>
        

</body>
</html>
