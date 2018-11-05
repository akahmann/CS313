<?php

session_start();

$username = $_SESSION['username'];
$validLogin = $_SESSION['validLogin'];

require('connectRPDB.php');
$db = get_db();

$query = 'SELECT id, name, picLink FROM games';

$stmt = $db->prepare($query);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

function findPic($pic) {
   if ($pic == "The Legend of Zelda: Ocarina of Time") {
      echo "<img class='selectGamePic'" .
           " src='/rottenPotatoes/games/oot.jpg'" .
           "alt='The Legend of Zelda: Ocarina of Time'>";
   }
   else if ($pic == "Super Mario World") {
      echo "<img class='selectGamePic'" .
           " src='/rottenPotatoes/games/smw.jpg'" .
           "alt='Super Mario World'>";
   }
   else if ($pic == "Paper Mario") {
      echo "<img class='selectGamePic'" .
           " src='/rottenPotatoes/games/pmario.jpg'" .
           "alt='Paper Mario'>";
   }
   else if ($pic == "Final Fantasy VII") {
      echo "<img class='selectGamePic'" .
           " src='/rottenPotatoes/games/ff7.jpg'" .
           "alt='Final Fantasy VII'>";
   }
   else if ($pic == "Undertale") {
      echo "<img class='selectGamePic'" .
           " src='/rottenPotatoes/games/undertale.jpg'" .
           "alt='Undertale'>";
   }
   else if ($pic == "StarCraft 2") {
      echo "<img class='selectGamePic'" .
           " src='/rottenPotatoes/games/sc2.jpg'" .
           "alt='StarCraft 2'>";
   }
}

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
         $picLink = $game['picLink'];
         $qry2 = "SELECT score, g.name FROM reviews JOIN games g ON gameId = g.id WHERE g.name = '$name'";
         $average = 0;
         $count = 0;
         foreach ($db->query($qry2) as $score) {
            $average += $score['score'];
            $count++;
         }
         $average = $average / $count; //find the average score
         $average = round($average, 2);
         findPic($name);
         //echo "This is $picLink <br>";
         //echo "<img class='selectGamePic' src='$picLink' alt='$name'>";
         echo "<br><a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?id="
               . $game['id'] . "&name=" . $name . "'>" . $name . "</a>";
         echo "<br>Average Score: $average";
         echo "<br><br><br>";
      }

   ?>
</div>

</body>
</html>