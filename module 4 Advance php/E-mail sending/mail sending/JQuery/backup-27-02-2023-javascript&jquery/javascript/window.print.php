<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script>
    function test()
    {
       document.getElementById("btn").style="display:none"; 
       window.print();
    }
    </script>
</head>
<body>
  <center>

    <p id="para"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ratione et assumenda vero iusto, nisi cum, illo quae repellendus enim perferendis reiciendis ut esse provident excepturi temporibus in corporis omnis!</p>
    <br><br>

    <button type="button" onclick="test()" id="btn">Print Me</button>

  </center>
    
</body>
</html>