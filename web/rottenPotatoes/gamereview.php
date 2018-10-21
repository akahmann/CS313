<?php
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

$name = $_GET['name'];
findPic($name);

$qry = "select id, name FROM games";
      foreach ($db->query($qry) as $game) {
         //$qry2 = "select score, gameId FROM reviews";
         // $average;
         // $total;
         // $count;
         // foreach ($db->query($qry2) as $score) {
         //    echo "score: " . $score['score'];
         //    echo " id: " . $game['id'];
         //    echo " gameId: " . $score['gameId'] . "<br><br>";
         //    if ($game['id'] == $score['gameId']) {
         //       echo "This is score: " . $score['score'] . "<br>";
         //       $total += $score['score'];
         //       $count++;
         //    }
         // }
         // $average = $total / $count; //find the average score
         findPic($game['name']);
         echo "<br><a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?name="
               . $game['name'] . "'>" . $game['name'] . "</a>";
         //echo "<br>Average Score: $average";
         //getScore($game);
         echo "<br><br><br>";
      }

?>
</div>

</body>
</html>