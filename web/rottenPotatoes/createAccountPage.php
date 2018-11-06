<?php

session_start();
$validAccount = $_SESSION['validAccount'];

require('connectRPDB.php');
$db = get_db();

?>

<script type="text/javascript">
   function switch() {
      if (document.getElementById("switch").innerHtml == "Switch to Organization") {
         document.getElementById("switch").innerHtml = "Switch to User";
         document.getElementById("formHere").innerHtml = "<form action='createOrgAccount.php' method='POST'>"
         "Organization Name: <input type='text' name='name'><br>" +
         "Password: <input type='password' name='newPassword'><br>" +
         "<input type='submit' name='submit' value='Create Account'>" +
         "</form>";
      }
      else {
         document.getElementById("switch").innerHtml = "Switch to Organization";
         document.getElementById("formHere").innerHtml = "<form action='createUserAccount.php' method='POST'>"
         "Firstname: <input type='text' name='newFirstname'><br>" +
         "Lastname: <input type='text' name='newLastname'><br>" +
         "Username: <input type='text' name='newUsername'><br>" +
         "Password: <input type='password' name='newPassword'><br>" +
         "Critic: <input type='checkbox' name='critic' value='criticChecked'><br>" +
         "<input type='submit' name='submit' value='Create Account'>" +
         "</form>";
      }
   }
</script>

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
</div>

<!-- <form action="createAccount.php" method="POST">
      Firstname: <input type="text" name="newFirstname"><br>
      Lastname: <input type="text" name="newLastname"><br>
      Username: <input type="text" name="newUsername"><br>
      Password: <input type="password" name="newPassword"><br>
      Critic: <input type="checkbox" name="critic" value="criticChecked"><br>
      <input type="submit" name="submit" value="login">
</form> -->

<button id="switch" onclick="switch()">Switch to Organization</button>

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