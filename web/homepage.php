<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="homeStyle.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Adam Kahmann's Homepage</title>
   <script>

   function fav(select) {
      if (select == 1) {
         document.getElementById("select").innerHTML =
         "<img src='bom.jpg' alt='Book of Mormon' class='selectPic'>";
      }
      else if (select == 2) {
         document.getElementById("select").innerHTML =
         "<img src='wonderfulLife.jpg' alt='Wonderful Life' class='selectPic'>";
      }
      else if (select == 3) {
         document.getElementById("select").innerHTML =
         "<img src='oot.jpg' alt='Ocarina of Time' class='selectPic'>";
      }
      else if (select == 4) {
         document.getElementById("select").innerHTML =
         "<img src='sloth.jpg' alt='Sloth' class='selectPic'>";
      }
      else if (select == 5) {
         document.getElementById("select").innerHTML =
         "<img src='aerodactyl.jpg' alt='Aerodactyl' class='selectPic'>";
      }
      else if (select == 6) {
         document.getElementById("select").innerHTML =
         "<img src='bigPizza.jpg' alt='Best Pizza Ever' class='selectPic'>";
      }
      else if (select == 7) {
         document.getElementById("select").innerHTML =
         "<img src='lolipop.jpg' alt='Awesome Lolipop' class='selectPic'>";
      }
      else if (select == 8) {
         document.getElementById("select").innerHTML =
         "<img src='toe.jpg' alt='Best Toe Ever' class='selectPic'>";
      }
      else if (select == 9) {
         document.getElementById("select").innerHTML =
         "<img src='favGoomba.jpg' alt='Buff Goomba' class='selectPic'>";
      }
      else if (select == 10) {
         document.getElementById("select").innerHTML =
         "<img src='blueRaptor.jpg' alt='My Waifu' class='selectPic'>";
      }
      else {
         document.getElementById("select").innerHTML =
         "<img src='doorKnob.jpg' alt='Door Knob' class='selectPic'>";
      }
   }

   </script>
</head>
<body>

<header>
   <h1>Adam Kahmann's Homepage</h1>
   <a href="list.html" class="link">Assignments</a>
</header>
<hr>

<img src="adamHeather.jpg" alt="Adam and Heather" class="pic">

<div class="centerDate">
   <?php
      echo "<br>Today is " . date("Y/m/d");
      echo " and the time is " . date("h:i") . "<br>";
      echo "3 days remaining... (insert ominous sound here)<br><br>";
   ?>
</div>

<div id="select">
</div>
<button onclick="fav(1)">Favorite Book</button> <br>
<button onclick="fav(2)">Favorite Movie</button> <br>
<button onclick="fav(3)">Favorite Video Game</button> <br>
<button onclick="fav(4)">Favorite Animal</button> <br>
<button onclick="fav(5)">Favorite Pokemon</button> <br>
<button onclick="fav(6)">Favorite Pizza</button> <br>
<button onclick="fav(7)">Favorite Lolipop</button> <br>
<button onclick="fav(8)">Favorite Toe</button> <br>
<button onclick="fav(9)">Favorite Goomba</button> <br>
<button onclick="fav(10)">Favorite Celebrity Crush</button> <br>
<button onclick="fav(11)">Favorite Door Knob in a House</button> <br>

</body>
</html>