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
    <div class="container mt-5 mx-auto">
        <form action="" method="post">
            <div class="list-group mt-5">
            <label> Country</label>
            <select name="country" class="form-control" required> 
                <option value="" > -- Select Country --</option>
                <?php 
                $url="http://localhost/phpmwf_1pm/module%204%20Advance%20php/JQuery/webservice1/country_list.json";
                $file=file_get_contents($url,true);
                $cn=json_decode($file,true);
                foreach($cn as $cn1)
                {
                ?>
                    <option value="<?php echo $cn1;?>"> <?php echo $cn1;?> </option>

                <?php
                    }
                ?>

                
            </select>
                </div>


            <div class="list-group mt-5">
            <label> state</label>
            <select name="State" class="form-control" required> 
                <option value="" > -- Select State --</option>
                <?php 
                $url="http://localhost/phpmwf_1pm/module%204%20Advance%20php/JQuery/webservice1/state_list.json";
                $file=file_get_contents($url,true);
                $sn=json_decode($file,true);
                foreach($sn as $sn1)
                {
                ?>
                    <option value="<?php echo $sn1;?>"> <?php echo $sn1;?> </option>

                <?php
                    }
                ?>

                
            </select>
                </div>



            <div class="list-group mt-5">
            <label> City </label>
            <select name="City" class="form-control" required> 
                <option value="" > -- Select City --</option>
                <?php 
                $url="http://localhost/phpmwf_1pm/module%204%20Advance%20php/JQuery/webservice1/city_list.json";
                $file=file_get_contents($url,true);
                $ct=json_decode($file,true);
                foreach($ct as $ct1)
                {
                ?>
                    <option value="<?php echo $ct1;?>"> <?php echo $ct1;?> </option>

                <?php
                    }
                ?>

                
            </select>
                </div>
            
                <div class="list-group mt-5">
                   <input name="submit" value="Register" class="btn btn-danger btn-lg text-white w-25">
                </div>

        </form>

    </div>


</body>
</html>