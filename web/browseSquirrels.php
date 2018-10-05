<?php

//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();

$cartArray = array(
   123,
   12,
   490
);

$_SESSION['cart'] = $cartArray;

var_dump($_SESSION["cart"]);

if(isset($_SESSION["cart"])) {
   foreach($_SESSION["cart"] as $productId) {
      echo "$productId <br>";
   }
}

?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

<h1>Squirreltopia</h1>

<form action="viewSquirrelsCart.php">
   <button onclick="loadCart(1)">Item 1</button> <br>
   <button onclick="loadCart(2)">Item 2</button> <br>
   <button onclick="location.reload()">Item 3</button> <br>
</form>

<img src="normalSquirrel.jpg" alt="Normal Squirrel"> <br>
<img src="happySquirrel.jpg" alt="Happy Squirrel"> <br>
<img src="heroicSquirrel.jpg" alt="Heroic Squirrel"> <br>
<img src="evilSquirrel.jpg" alt="Evil Squirrel"> <br>
<img src="fatSquirrel.jpg" alt="Fat Squirrel"> <br>
<img src="knightSquirrel.jpg" alt="Knight Squirrel"> <br>
<img src="supermanSquirrel.jpg" alt="Superman Squirrel"> <br>
<img src="thorSquirrel.jpg" alt="Thor Squirrel"> <br>
<img src="giantSquirrel.jpg" alt="Giant Squirrel"> <br>
<img src="hyenaSquirrel.jpg" alt="Hyena Squirrel"> <br>
<img src="buffSquirrel.jpg" alt="Buff Squirrel"> <br>
<img src="invisibleSquirrel.jpg" alt="Invisible Squirrel"> <br>

</body>
</html>