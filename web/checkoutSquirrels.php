<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="squirrels.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Squirreltopia - Checkout Squirrels</title>
</head>
<body>
<header>
   <h1>Checkout</h1>
   <div class="intro">Please fill out your address so we can deliver you squirrels.</div>
   <div class="flex">
      <div class="linkPage"><a href="browseSquirrels.php">Browse Squirrels</a></div>
      <div class="linkPage"><a href="checkoutSquirrels.php">View Cart</a></div>
   </div>
</header>

   <form action="confirmSquirrels.php" method="post" class="myForm">
         <label>First Name</label>
         <br>
         <input type="text" id="fName" name="fName" value="">
         <label style="color: red" id="errorFName"></label>
         <br> <br>

         <label>Last Name</label>
         <br>
         <input type="text" id="lName" name="lName" value="">
         <br> <br>

         <label class="inputTitle">Address</label>
         <br>
         <textarea style="width: 80%" rows="3" cols="50" value="" id="address" name="address"></textarea>
         <br> <br>
         <input class="btn" type="submit">
         <br>
   </form>

</body>
</html>