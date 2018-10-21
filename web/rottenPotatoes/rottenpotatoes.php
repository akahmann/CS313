<?php

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

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

// $stmt = $db->prepare("select gm.gmname, gr.grname, d.dname" .
//                      "FROM genres gr" .
//                      "JOIN games gm ON gr.id = gm.genreId" .
//                      "JOIN developers d ON gm.developerId = d.id");
// $stmt->execute();
// $games = $stmt->fetchALL(PDO::FETCH_ASSOC);

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
      $qry = "select name FROM games";
      foreach ($db->query($qry) as $game)
      {
         findPic($game['name']);
         echo "<div class='fr'><b>" . $game['name'] . "</b></div><br><br>";
         echo "<br><br><br><br><br><br><br>"
      }
   ?>
</div>

</body>
</html>