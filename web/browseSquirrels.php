<?php

//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();

//?key=ProductName&value=ValueAmount
//%20 = space

require 'addSquirrels.php';
echo $item;

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
<header>
   <h1>Squirreltopia</h1>
</header>

<br>

<div class="flex">
   <img src="normalSquirrel.jpg" alt="Normal Squirrel" class="triplePic">
   <img src="happySquirrel.jpg" alt="Happy Squirrel" class="triplePic">
   <img src="heroicSquirrel.jpg" alt="Heroic Squirrel" class="triplePic">
</div>
<br>
<div class="flex">
   <p><b>Normal Squirrel:</b> If you feel like being boring purchase this normal squirrel!</p>
   <p><b>Happy Squirrel:</b> You will never be sad when this squirrel is constantly by your side!</p>
   <p><b>Heroic Squirrel:</b> This squirrel doesn't fear anything, not even a 30 ton pitbull.</p>
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="000">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="001">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
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
   <p><b>Evil Squirrel:</b> Purchase this squirrel with caution, it has been known to cause the end of the world.</p>
   <p><b>Fat Squirrel:</b> Once you get this squirrel you will never have to ask who ate your cookies again!</p>
   <p><b>Knight Squirrel:</b> You've heard of Knights of the Round table, but have you heard of Squirrels of the Round Table?</p>
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="003">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="004">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
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
   <p><b>Superman Squirrel:</b> The is the most over powered and boring squirrel we have to offer!</p>
   <p><b>Thor Squirrel:</b> This squirrel's favorite thing to say is, "BRING ME THANOS!!!"</p>
   <p><b>Giant Squirrel:</b> If you ever wanted to reenact Godzilla, but with a Squirrel instead, we got the Squirrel for you!</p>
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cartr">
      <input type="hidden" name="item" value="006">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="007">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
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
   <p><b>Hyena Squirrel:</b> This squirrel has a really great sense of humor.</p>
   <p><b>Buff Squirrel:</b> This squirrel is actually a personal fitness trainer in its spare time.</p>
   <p><b>Invisible Squirrel:</b> I bet you didn't see this coming!</p>
</div>
<br>
<div class="flex">
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="009">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="010">
   </form>
   <form action="addSquirrels.php" method="post">
      <input type="submit" class="btn" value= "Add to Cart">
      <input type="hidden" name="item" value="011">
   </form>
</div>

</body>
</html>