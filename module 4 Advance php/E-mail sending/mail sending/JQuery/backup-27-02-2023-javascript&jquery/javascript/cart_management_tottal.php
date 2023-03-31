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
        function crttotal()
        {
             var price=document.getElementById("price").value;
             var qty=document.getElementById("qty").value;
             var t=price*qty;
             document.getElementById("tot").innerHTML=t;
        }
    </script>
</head>
<body>
    <h2 style="margin-left: 16%;">View Cart</h2>
    <table width="70%" align="center" border="0">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>pname</th>
            <th>price</th>
            <th>select qty</th>
            <th>Action</th>
            
        </tr>

        <tr align="center">
            <td>1101</td>
            <td><img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d62990c9fe8a439488d5aefc00bf59cb_9366/VALRUN_SHOES_Blue_GB2347_01_standard.jpg" width="85px" height="85px"></td>
            <td>addidas shoes</td>
            <td>Rs.<input type="text" name="price" id="price" value="4500" style="border: none; width:65px" readonly></td>
            <td><input type="number" id="qty" min="1" max="10" value="1" onchange="crttotal()"></td>
            <td><a href="#">delete</a></td>
            
        </tr>

        <tr>
           
            <td align="right" colspan="6"><h3 style="background-color: black
            ; color:white; padding:15px; width:50%">Subtotal of products Rs. <label id="tot">4500</label></h3></td>
          
        </tr>

    </table>
</body>
</html>