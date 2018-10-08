<?php

//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();

$squirrels = array();
if(!isset($_SESSION["squirrels"]))
   $_SESSION["squirrels"] = [
      "000" => 0,
      "001" => 0,
      "002" => 0,
      "003" => 0,
      "004" => 0,
      "005" => 0
   ]

//$_SESSION['cart'] = $cartArray;

//var_dump($_SESSION["cart"]);

// echo "<br>";

// if(isset($_SESSION["cart"])) {
//    foreach($_SESSION["cart"] as $productId) {
//       echo "$productId <br>";
//    }
// }

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="squirrels.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Squirreltopia - Browse Squirrels</title>
</head>
<body>

<h1>Squirreltopia</h1>

<form action="addSquirrels.php" method="post">
   <input type="submit" value="Buy Normal Squirrel">
   <input type="hidden" name="item" value="000">
</form>
<br>
<form action="addSquirrels.php" method="post">
   <input type="button" value="Buy Fat Squirrel">
   <input type="hidden" name="item" value="001">
</form>
<br>

<div class="flex">
   <img src="normalSquirrel.jpg" alt="Normal Squirrel" class="triplePic"> <br>
   <img src="happySquirrel.jpg" alt="Happy Squirrel" class="triplePic"> <br>
   <img src="heroicSquirrel.jpg" alt="Heroic Squirrel" class="triplePic"> <br>
</div>
<br> <br>
<div class="flex">
   <img src="evilSquirrel.jpg" alt="Evil Squirrel" class="triplePic"> <br>
   <img src="fatSquirrel.jpg" alt="Fat Squirrel" class="triplePic"> <br>
   <img src="knightSquirrel.jpg" alt="Knight Squirrel" class="triplePic"> <br>
</div>
<br> <br>
<div class="flex">
   <img src="supermanSquirrel.jpg" alt="Superman Squirrel" class="triplePic"> <br>
   <img src="thorSquirrel.jpg" alt="Thor Squirrel" class="triplePic"> <br>
   <img src="giantSquirrel.jpg" alt="Giant Squirrel" class="triplePic"> <br>
</div>
<br> <br>
<div class="flex">
   <img src="hyenaSquirrel.jpg" alt="Hyena Squirrel" class="triplePic"> <br>
   <img src="buffSquirrel.jpg" alt="Buff Squirrel" class="triplePic"> <br>
   <img src="invisibleSquirrel.jpg" alt="Invisible Squirrel" class="triplePic"> <br>
</div>

</body>
</html>