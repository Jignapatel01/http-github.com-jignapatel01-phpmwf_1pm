<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script>
        function carttotal()
        {
            var price=document.getElementById("price").value;
            var qty=document.getElementById("qty").value;
            var t= price*qty;
            document.getElementById("tot").innerHTML.t;
        }

    </script>
</head>
<body>
<h2> </h2>    
<table>
<tr>
    <th>Id</th>
    <th>Image</th>
    <th>P_name</th>
    <th>P_price</th>
    <th>Select_qty</th>
    <th>Action</th>
</tr>
<tr>
    <td>01</td>
    <td> <img src="images/2.jpg" width="50%" height="100px" > </td>
    <td> Toys</td>
   <td> Rs.<input type="text" id="price" name="price" value="2500" readonly> </td>
   <td> <input type="number" id="qty" min="1" max="10" value="1" onchange="carttotal()"></td>
   <td> <a href = "" >Delete </a></td>
</tr>
<tr>
   <td align="center" colspan="6"> Subtotal of Purchase Item <label id="tot"> 2500 </label>  </td>
</tr>

</table>

</body>
</html>