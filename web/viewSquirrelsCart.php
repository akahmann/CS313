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
   //echo "<h1> BLAHHH!!!! </h1>"
   if(isset($_SESSION["squirrels"]))
      echo "It works <br>";
      foreach($squirrels as $key => $value)
      {
         echo "SQUIRRELS!!<br>";
         if ($key == '000') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Normal Squirrel: $value <br></p>";
            }
         }
         if ($key == '001') {
            if ($value > 0) {
               echo "Happy Squirrel: $value <br>";
            }
         }
         if ($key == '002') {
            if ($value > 0) {
               echo "Heroic Squirrel: $value <br>";
            }
         }
         if ($key == '003') {
            if ($value > 0) {
               echo "Evil Squirrel: $value <br>";
            }
         }
         if ($key == '004') {
            if ($value > 0) {
               echo "Fat Squirrel: $value <br>";
            }
         }
         if ($key == '005') {
            if ($value > 0) {
               echo "Knight Squirrel: $value <br>";
            }
         }
         if ($key == '006') {
            if ($value > 0) {
               echo "Superman Squirrel: $value <br>";
            }
         }
         if ($key == '007') {
            if ($value > 0) {
               echo "Thor Squirrel: $value <br>";
            }
         }
         // if ($key == 008) {
         //    if ($value > 0) {
         //       echo "Giant Squirrel: $value <br>";
         //    }
         // }
         // if ($key == 009) {
         //    if ($value > 0) {
         //       echo "Hyena Squirrel: $value <br>";
         //    }
         // }
         // if ($key == 010) {
         //    if ($value > 0) {
         //       echo "Buff Squirrel: $value <br>";
         //    }
         // }
         // if ($key == 011) {
         //    if ($value > 0) {
         //       echo "Invisible Squirrel: $value <br>";
         //    }
         // }
      }
   ?>
</body>
</html>