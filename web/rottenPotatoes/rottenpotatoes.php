<?php
//var_dump($game);
session_start();

$username = $_SESSION['username'];
$validLogin = $_SESSION['validLogin'];

require('connectRPDB.php');
$db = get_db();

$query = 'SELECT gm.name AS gmname, gr.name AS grname, d.name AS dname, ' .
         ' gm.id AS id, gm.piclink AS piclink FROM genres gr ' .
         'JOIN games gm ON gr.id = gm.genreid ' .
         'JOIN developers d ON gm.developerid = d.id;';

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
      Username: <br> <input type="text" name="username" placeholder="Your username.."><br>
      Password: <br> <input type="password" name="password" placeholder="Your password.."><br>
      <input type="submit" name="submit" value="Login" class="btn">
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
         $id = $game['id'];
         $name = $game['gmname'];
         $genre = $game['grname'];
         $developer = $game['dname'];
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
         echo "$genre and $developer <br>";
         echo "<br><a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?id=" .
              "$id&name=$name&picLink=$picLink&genre=$genre&developer=$developer'>$name</a>";
         echo "<br>Average Score: $average";
         echo "<br><br><br>";
      }
   ?>
</div>

</body>
</html>