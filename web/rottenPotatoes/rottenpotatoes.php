<?php
//var_dump($game);
session_start();

$username = $_SESSION['username'];
$validLogin = $_SESSION['validLogin'];

require('connectRPDB.php');
$db = get_db();

$query = 'SELECT id, name, piclink FROM games';

$stmt = $db->prepare($query);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="rottenpotatoes.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Rotten Potatoes</title>

</head>
<body>

<h1>Rotten Potatoes</h1>


<?php

  if (!isset($_SESSION['username'])) {

?>

<div class="midbody">
  <form action="loginPotato.php" method="POST">
      Username: <input type="text" name="username"><br>
      Password: <input type="password" name="password"><br>
      <input type="submit" name="submit" value="login">
  </form>
  <a href="https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/createAccountPage.php">Create Account</a>
</div>

<?php
  }
  else {
    echo "<div class='midbody'>Welcome $username";
    echo "<a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/logout.php'>";
    echo "Logout</a></div>";
  }

  if (isset($_SESSION['validLogin'])) {
    if ($_SESSION['validLogin'] == false) {
      echo "<div class='midbody'>Error Logging In</div>";
    }
  }
?>

<div class="midbody">
   <?php

      foreach ($games as $game) {
         $name = $game['name'];
         $picLink = $game['piclink'];
         $qry2 = "SELECT score, g.name FROM reviews JOIN games g ON gameId = g.id WHERE g.name = '$name'";
         $average = 0;
         $count = 0;
         foreach ($db->query($qry2) as $score) {
            $average += $score['score'];
            $count++;
         }
         $average = $average / $count; //find the average score
         $average = round($average, 2);

         echo "<img class='selectGamePic' src='$picLink' alt='$name'>";
         echo "<br><a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?id="
               . $game['id'] . "&name=" . $name . "&picLink=" . $picLink . "'>" . $name . "</a>";
         echo "<br>Average Score: $average";
         echo "<br><br><br>";
      }

   ?>
</div>

</body>
</html>