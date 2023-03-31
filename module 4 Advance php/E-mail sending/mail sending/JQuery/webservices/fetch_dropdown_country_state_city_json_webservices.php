<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>

    
    <div class="container mt-5 mx-auto p-5">

        <h3>Fetch country state and city using json webservices</h3>
        <hr class="border border-0 w-50">
        <form method="post">
            <div class="list-group mt-5">
                <label>Select country</label>
                <select name="country" required class="form-control">
                    <!-- fetch websirvices  -->
                    <option value="">-select country-</option>
                    <?php 
                     $url="http://localhost/phpmwf_1pm/module4_advancedphp8/webservices/country_list.json";
                     $file=file_get_contents($url,True);
                     $cn=json_decode($file,True);
                     foreach($cn as $cn1)
                     {
                    ?>
                    <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>

                    <?php 
                    }
                    ?>
                </select>
            </div>

            
            <div class="list-group mt-5">
                <label>Select country</label>
                <select name="country" required class="form-control">
                    <option value="">-select state-</option>
                    <?php 
                     $url="http://localhost/phpmwf_1pm/module4_advancedphp8/webservices/state_list.json";
                     $file=file_get_contents($url,True);
                     $sn=json_decode($file,True);
                     foreach($sn as $sn1)
                     {
                    ?>
                    <option value="<?php echo $sn1;?>"><?php echo $sn1;?></option>

                    <?php 
                    }
                    ?>
                </select>
            </div>


            
            <div class="list-group mt-5">
                <label>Select country</label>
                <select name="country" required class="form-control">
                    <option value="">-select country-</option>
                    <?php 
                     $url="http://localhost/phpmwf_1pm/module4_advancedphp8/webservices/city_list.json";
                     $file=file_get_contents($url,True);
                     $ct=json_decode($file,True);
                     foreach($ct as $ct1)
                     {
                    ?>
                    <option value="<?php echo $ct1;?>"><?php echo $ct1;?></option>

                    <?php 
                    }
                    ?>
                </select>
            </div>



            
            <div class="list-group mt-5">
         
                <input name="submit" name="register" class="btn btn-danger btn-lg w-25 text-white" value="Register">
               </div>
        </form>
    </div>
</body>
</html>