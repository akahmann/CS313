<?php

session_start();
$validAccount = $_SESSION['validAccount'];

require('connectRPDB.php');
$db = get_db();

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="rottenpotatoes.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Rotten Potatoes - Create Account</title>
</head>
<body>

<h1>Rotten Potatoes</h1>

<div class="midbody">

Create Account

<form action="createAccount.php" method="POST">
      Username: <input type="text" name="newUsername"><br>
      Password: <input type="password" name="newPassword"><br>
      <input type="submit" name="submit" value="login">
</form>

<a href="https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/rottenpotatoes.php">Home</a>

<?php

if (isset($_SESSION['validAccount'])) {
   if ($_SESSION['validAccount'] == false) {
      echo "<div class='midbody'>Username already used.<b>Please try a different one.</div>";
   }
}

?>

</div>

</body>
</html>