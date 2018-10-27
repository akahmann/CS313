<?php

// try
// {
//   $dbUrl = getenv('DATABASE_URL');

//   $dbOpts = parse_url($dbUrl);

//   $dbHost = $dbOpts["host"];
//   $dbPort = $dbOpts["port"];
//   $dbUser = $dbOpts["user"];
//   $dbPassword = $dbOpts["pass"];
//   $dbName = ltrim($dbOpts["path"],'/');

//   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $ex)
// {
//   echo 'Error!: ' . $ex->getMessage();
//   die();
// }

require('connectRPDB.php');

$db = get_db();

$query = 'SELECT id, name FROM games';

$stmt = $db->prepare($query);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = 'SELECT score, g.name FROM reviews JOIN games g ON gameId = g.id WHERE g.name = :name';

$stmt = $db->prepare($query);
$stmt->bindValue(':name', $name, PDO::PARAM_INT);
$stmt->execute();
$scores = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

<div class="midbody">
   <?php

      //$qry = "SELECT id, name FROM games";
      //foreach ($db->query($qry) as $game) {
      foreach ($games as $game) {
         $name = $game['name'];
         //$qry2 = "SELECT score, g.name FROM reviews JOIN games g ON gameId = g.id WHERE g.name = '$name'";
         $average = 0;
         $count = 0;
         //foreach ($db->query($qry2) as $score) {
         foreach ($scores as $score) {
         $average += $score['score'];
         $count++;
         }
      $average = $average / $count; //find the average score
      findPic($name);
      echo "<br><a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?id="
            . $game['id'] . "&name=" . $name . "'>" . $name . "</a>";
      echo "<br>Average Score: $average";
      //getScore($game);
      echo "<br><br><br>";
      }

      // $qry3 = "select gm.name AS gmname, gr.name AS grname, d.name AS dname" .
      //        "FROM genres gr JOIN games gm ON gr.id = gm.genreId" .
      //        "JOIN developers d ON gm.developerId = d.id;";
      // foreach ($db->query($qry3) as $)
      // //getScore();
   ?>
   <a href=""></a>
</div>

</body>
</html>