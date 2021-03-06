<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="squirrels.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Squirreltopia - Confirm Squirrels</title>
</head>
<body>
<header>
   <h1>Checkout</h1>
   <div class="intro">Please confirm if the order is correct.</div>
   <div class="flex">
      <div class="linkPage"><a href="browseSquirrels.php">Browse Squirrels</a></div>
      <div class="linkPage"><a href="checkoutSquirrels.php">View Cart</a></div>
   </div>
</header>

   <!--
   000 = normal
   001 = happy
   002 = heroic
   003 = evil
   004 = fat
   005 = knight
   006 = superman
   007 = thor
   008 = giant
   009 = hyena
   010 = buff
   011 = invisible
   -->

   <?php
      $total;
      foreach($_SESSION["squirrels"] as $key => $value)
      {
         if ($key == '000') {
            if ($value > 0) {
               echo "<p class='purchase'>Normal Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '001') {
            if ($value > 0) {
               echo "<p class='purchase'>Happy Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '002') {
            if ($value > 0) {
               echo "<p class='purchase'>Heroic Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '003') {
            if ($value > 0) {
               echo "<p class='purchase'>Evil Squirrel(s): $value <br></p>";
               $total += $value;
            }
            }
         if ($key == '004') {
            if ($value > 0) {
               echo "<p class='purchase'>Fat Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '005') {
            if ($value > 0) {
               echo "<p class='purchase'>Knight Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '006') {
            if ($value > 0) {
               echo "<p class='purchase'>Superman Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '007') {
            if ($value > 0) {
               echo "<p class='purchase'>Thor Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '008') {
            if ($value > 0) {
               echo "<p class='purchase'>Giant Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '009') {
            if ($value > 0) {
               echo "<p class='purchase'>Hyena Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '010') {
            if ($value > 0) {
               echo "<p class='purchase'>Buff Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
         if ($key == '011') {
            if ($value > 0) {
               echo "<p class='purchase'>Invisible Squirrel(s): $value <br></p>";
               $total += $value;
            }
         }
      }
      echo "<p style='center'>Total: $" . "$total" . ".00</p>";
   ?>

   <div class="myForm">
      <b>First Name:</b> <?php echo htmlspecialchars($_POST["fName"]); ?>
      <br>
      <b>Last Name:</b> <?php echo htmlspecialchars($_POST["lName"]); ?>
      <br>
      <b>Address:</b> <?php echo htmlspecialchars($_POST["address"]); ?>
      <br>
   </div>

   <form action="finalConfirmSquirrels.php" method="post">
      <input class="btn" type="submit" name="submit" value="Confirm Purchase">
      <input class="btn" type="submit" name="submit" value="Cancel Purchase">
   </form>

</body>
</html>