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
      foreach($_SESSION["squirrels"] as $key => $value)
      {
         echo "SQUIRRELS!!<br>";
         if ($key == '000') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Normal Squirrel(s): $value <br></p>";
            }
         }
         if ($key == '001') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Happy Squirrel: $value <br></p>";
            }
         }
         if ($key == '002') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Heroic Squirrel: $value <br></p>";
            }
         }
         if ($key == '003') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Evil Squirrel: $value <br></p>";
            }
         }
         if ($key == '004') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Fat Squirrel: $value <br></p>";
            }
         }
         if ($key == '005') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Knight Squirrel: $value <br></p>";
            }
         }
         if ($key == '006') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Superman Squirrel: $value <br></p>";
            }
         }
         if ($key == '007') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Thor Squirrel: $value <br></p>";
            }
         }
         if ($key == '008') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Giant Squirrel: $value <br></p>";
            }
         }
         if ($key == '009') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Hyena Squirrel: $value <br></p>";
            }
         }==
         if ($key == '010') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Buff Squirrel: $value <br></p>";
            }
         }
         if ($key == '011') {
            if ($value > 0) {
               echo "<p style = 'background-color:white;'>Invisible Squirrel: $value <br></p>";
            }
         }
      }
   ?>
</body>
</html>