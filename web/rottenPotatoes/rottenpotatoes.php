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
      <img class="selectGamePic" src="/rottenPotatoes/games/oot.jpg"
      alt="Ocarina of Time"><br>
      <?php
         $qry = "select gm.name, gr.name, d.name" .
                  "FROM genres gr" .
                  "JOIN games gm ON gr.id = gm.genreId" .
                  "JOIN developers d ON gm.developerId = d.id";
         foreach ($db->query($qry) as $game)
         {
            echo "<b> " . $game['gm.name'] . "</b> " . $game['gr.name'] .
            ": " . $game['d.name'] . "<br>";
         }
      ?>
   </div>

</body>
</html>