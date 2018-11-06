<?php
session_start();
$username = $_SESSION['username'];

require('connectRPDB.php');
$db = get_db();

$id = htmlspecialchars($_GET['id']);
$name = htmlspecialchars($_GET['name']);
$picLink = htmlspecialchars($_GET['picLink']);
$genre = htmlspecialchars($_GET['genre']);
$developer = htmlspecialchars($_GET['developer']);

$query = 'SELECT text, score, u.username AS username, g.name, u.id ' .
         'FROM reviews ' .
         'JOIN games g ON gameid = g.id ' .
         'JOIN users u ON userid = u.id ' .
         'WHERE g.name= :name';
$stmt = $db->prepare($query);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="rottenpotatoes.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Rotten Potatoes - Game Review</title>
</head>
<body>

<h1>Rotten Potatoes</h1>

<?php

if (isset($_SESSION['username'])) {
   echo "<div class='midbody'>Welcome $username<br>";
   echo "<a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/logout.php'>";
   echo "Logout </a><a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/rottenpotatoes.php'>";
   echo " Home</a></div>";
}

?>

<div class="midbody">
<?php
echo "<img class='selectGamePic' src='$picLink' alt='$name'>";
echo "<br>";
echo "$genre and $developer <br>";
foreach ($reviews as $review) {
   echo $review['username'] . $review['orgname'] . "<br>";
   echo "<p>" . $review['text'] . "</p>";
   echo "Score Given: " . $review['score'] . "<br><br>";
}
?>
</div>

<br>

<?php
   if (isset($_SESSION['username'])) {
?>
<div class="midbody">
<form method="post" action="insertReview.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="gameName" value="<?php echo $name; ?>">
  <input type="hidden" name="picLink" value="<?php echo $picLink; ?>">
  <input type="hidden" name="genre" value="<?php echo $genre; ?>">
  <input type="hidden" name="developer" value="<?php echo $developer; ?>">
  <!-- <span>Put Review Here: </span> <br> -->
  <textarea name="text" rows="6" cols="80" placeholder="Your review.."></textarea>
  <br>
  <!-- <span>Give Score Here: </span> <br> -->
  <input type="text" name="score" placeholder="Give a score 0-100..">
  <br>
  <input type="submit" value="Create Review" class="btn">
</form>
</div>
<?php
   }
?>

</body>
</html>