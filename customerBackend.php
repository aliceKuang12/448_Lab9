<!DOCTYPE html>
<html>

<head>
        <title> Checkout </title>
        <link href ="store.css" rel = "stylesheet" type = "text/css"/>
</head>

<body>
<?php
 $user = $_POST["user"];
 $pass = $_POST["pass"];

 $numPizza =$_POST["pizzaNum"];
 $numDplg = $_POST["dpgNum"];
 $numChoc = $_POST["chocNum"];

 $pricePizzas = 14.95 * $numPizza;
 $priceDplg = 6.95  * $numDplg;
 $priceChoc = 10 * $priceChoc;
 
 $shipOpt = $_POST["ship"];

 $totalPrice = $pricePizzas + $priceDplg + $priceChoc + $shipOpt;

 echo "<div>";

 echo "<h1>Welcome " .$user."!</h1>";
 echo "(Your password: " .$pass. ")<br>";
 echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
 echo "<h3>Your receipt</h3>";

 echo "<table>";
 echo"<tr>";
     echo "<th>Item</th>";
     echo "<th>Quantity</th>";
     echo "<th>Unit Price</th>";
     echo "<th>Subtotal</th>";
 echo"</tr>";

 echo"<tr>";
    echo "<td>Pizza</td>";
    echo "<td>".$numPizza. "</td>";
    echo "<td>$14.95</td>";
    echo "<td>$".$pricePizzas."</td>";
 echo"</tr>";

 echo"<tr>";
    echo "<td>Dumpling</td>";
    echo "<td>".$numDplg. "</td>";
    echo "<td>$6.95</td>";
    echo "<td>$".$priceDplg. "</td>";
 echo"</tr>";

 echo"<tr>";
   echo "<td>Chocolate</td>";
   echo "<td>".$numChoc. "</td>";
   echo "<td>$10</td>";
   echo "<td>$".$priceChoc."</td>";
 echo"</tr>";

$speed; //store speed to print appropriate msg
if($shipOpt == 0)
{
        $speed = "7-day free";
}
else if($shipOpt == 50)
{
        $speed = "$50 Overnight";
}
else
{
        $speed = "$5 3-day";
}
 echo"<tr>";
   echo "<td>Shipping</td>";
   echo "<td>".$speed."</td>";
   echo "<td>------</td>";
   echo "<td>$".$shipOpt."</td>";
 echo"</tr>";

 echo "</table><br>";

 echo "<b>Total Cost:         $".$totalPrice."</b>";

echo "</div>";

?>

</body>

</html>