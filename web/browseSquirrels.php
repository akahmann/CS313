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
      "005" => 0,
      "006" => 0,
      "007" => 0,
      "008" => 0,
      "009" => 0,
      "010" => 0,
      "011" => 0
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

<br>

<div class="flex">
   <img src="normalSquirrel.jpg" alt="Normal Squirrel" class="triplePic">
   <img src="happySquirrel.jpg" alt="Happy Squirrel" class="triplePic">
   <img src="heroicSquirrel.jpg" alt="Heroic Squirrel" class="triplePic">
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Normal Squirrel">
      <input type="hidden" name="item" value="000">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Happy Squirrel">
      <input type="hidden" name="item" value="001">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Heroic Squirrel">
      <input type="hidden" name="item" value="002">
   </form>
</div>
<br> <br>

<div class="flex">
   <img src="evilSquirrel.jpg" alt="Evil Squirrel" class="triplePic">
   <img src="fatSquirrel.jpg" alt="Fat Squirrel" class="triplePic">
   <img src="knightSquirrel.jpg" alt="Knight Squirrel" class="triplePic">
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Evil Squirrel">
      <input type="hidden" name="item" value="003">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Fat Squirrel">
      <input type="hidden" name="item" value="004">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Knight Squirrel">
      <input type="hidden" name="item" value="005">
   </form>
</div>
<br> <br>

<div class="flex">
   <img src="supermanSquirrel.jpg" alt="Superman Squirrel" class="triplePic">
   <img src="thorSquirrel.jpg" alt="Thor Squirrel" class="triplePic">
   <img src="giantSquirrel.jpg" alt="Giant Squirrel" class="triplePic">
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Superman Squirrel">
      <input type="hidden" name="item" value="006">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Thor Squirrel">
      <input type="hidden" name="item" value="007">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Giant Squirrel">
      <input type="hidden" name="item" value="008">
   </form>
</div>
<br> <br>

<div class="flex">
   <img src="hyenaSquirrel.jpg" alt="Hyena Squirrel" class="triplePic">
   <img src="buffSquirrel.jpg" alt="Buff Squirrel" class="triplePic">
   <img src="invisibleSquirrel.jpg" alt="Invisible Squirrel" class="triplePic">
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Hyena Squirrel">
      <input type="hidden" name="item" value="009">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Buff Squirrel">
      <input type="hidden" name="item" value="010">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" value="Add Invisible Squirrel">
      <input type="hidden" name="item" value="011">
   </form>
</div>

</body>
</html>