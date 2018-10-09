<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="squirrels.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Squirreltopia - Confirmed Purchase</title>
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

<?php
   $confirmCancel = $_POST["submit"];
   if ($confirmCancel == "Confirm Purchase")
      echo "<p>Your purchase has been made.</p>";
   else
      echo "<p>Your purchase has been canceled.</p>";
   ?>

</body>
</html>