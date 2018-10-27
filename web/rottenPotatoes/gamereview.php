<?php

require('connectRPDB.php');
$db = get_db();

$gameId = htmlspecialchars($_GET['id']);
$name = htmlspecialchars($_GET['name']);

$query = 'SELECT text, score, g.name FROM reviews JOIN games g ON gameId = g.id WHERE g.name=:name';

$stmt = $db->prepare($query);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
   <title>Rotten Potatoes - Game Review</title>
</head>
<body>

<div class="midbody">
<?php

findPic($name);
echo "<br>";
// $qry = "SELECT text, score, g.name FROM reviews JOIN games g ON gameId = g.id WHERE g.name=:name";
// $db->prepare($qry);
// $db->bindValue(":name", $name, PDO::PARAM_STR);
//       foreach ($db->query($qry) as $review) {
foreach ($reviews as $review) {
  echo "<p>" . $review['text'] . "</p>";
  echo "Score Given: " . $review['score'] . "<br><br>";
}

?>

<form method="post" action="insertReview.php">
  <input type="hidden" name="gameId" value="<?php echo $gameId; ?>">
  <input type="hidden" name="gameName" value="<?php echo $name; ?>">
  <textarea name="text"></textarea>
  <input type="text" name="score">
  <input type="submit" value="Create Review">
</form>

</div>

</body>
</html>