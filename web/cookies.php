<?php

//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();

if(isset($_SESSION["counter"])) {
   $_SESSION["counter"]++;
}
else {
   $_SESSION["counter"] = 1;
}

$visits = $_SESSION["counter"];

?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

Where's the cookie???

<?php

//$_SESSION["counter"] = 0;

//$user = $_SESSION["user"];

//$user = count()

echo "You have been here $visits times";

?>

</body>
</html>