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

<div id="formHere">
   <form action="createAccount.php" method="POST">
      Firstname: <br> <input type="text" name="newFirstname" placeholder="Your name.."><br>
      Lastname: <br> <input type="text" name="newLastname" placeholder="Your last name.."><br>
      Username: <br> <input type="text" name="newUsername" placeholder="Your username.."><br>
      Password: <br> <input type="password" name="newPassword"><br>
      Critic: <input type="checkbox" name="critic" value="criticChecked"><br>
      <input type="submit" name="submit" value="Create Account" class="btn">
</form>
</div>

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