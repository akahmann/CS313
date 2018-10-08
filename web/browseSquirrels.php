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
   <title></title>
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

<?php

echo "Squirrel # $item <br>";

?>

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