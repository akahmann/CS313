<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="squirrels.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Squirreltopia - View Squirrels Cart</title>
</head>
<body>
<header>
   <h1>Squirrel Cart</h1>
   <div class="flex">
      <div class="linkPage"><a href="browseSquirrels.php">Browse Squirrels</a></div>
      <div class="linkPage"><a href="checkoutSquirrels.php">Checkout</a></div>
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
      foreach($_SESSION["squirrels"] as $key => $value)
      {
         if ($key == '000') {
            if ($value > 0) {
               echo "<p class='purchase'>Normal Squirrel(s): $value <br></p>";
               echo "<form action='addSquirrelsBtn.php' method='post'>
                        <input type='submit' class='addBtn' value= '+'>
                        <input type='hidden' name='item' value='000'>
                     </form>";
               echo "<form action='deleteSquirrelsBtn.php' method='post'>
                        <input type='submit' class='addBtn' value= '-'>
                        <input type='hidden' name='item' value='000'>
                     </form>";
            }
         }
         if ($key == '001') {
            if ($value > 0) {
               echo "<p class='purchase'>Happy Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '002') {
            if ($value > 0) {
               echo "<p class='purchase'>Heroic Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '003') {
            if ($value > 0) {
               echo "<p class='purchase'>Evil Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '004') {
            if ($value > 0) {
               echo "<p class='purchase'>Fat Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '005') {
            if ($value > 0) {
               echo "<p class='purchase'>Knight Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '006') {
            if ($value > 0) {
               echo "<p class='purchase'>Superman Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '007') {
            if ($value > 0) {
               echo "<p class='purchase'>Thor Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '008') {
            if ($value > 0) {
               echo "<p class='purchase'>Giant Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '009') {
            if ($value > 0) {
               echo "<p class='purchase'>Hyena Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '010') {
            if ($value > 0) {
               echo "<p class='purchase'>Buff Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '011') {
            if ($value > 0) {
               echo "<p class='purchase'>Invisible Squirrel(s): $value <br></p>";
            }
         }
      }
   ?>
</body>
</html>