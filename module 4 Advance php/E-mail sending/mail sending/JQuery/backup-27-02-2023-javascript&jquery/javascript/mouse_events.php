<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function chng1()
        {
            document.getElementById("imgg").src='images/1.jpg';

        }
        function chng2()
        {
            document.getElementById("imgg").src='images/2.jpg';

        }
    </script>
</head>
<body>

    <img id="imgg" src="images/1.jpg" style="width:350px; height:300px; margin-left:35%; margin-top:5%" onmouseover="chng2()" onmouseout="chng1()">

    
</body>
</html>