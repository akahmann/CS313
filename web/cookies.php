<?php

//setcookie("fav-text", "c is for cookie", time() + (86400 * 7));
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

Where's the cookie???

<?php

$_SESSION["counter"] = 0;

if(isset($_SESSION["counter"])) {
   echo "\nIt is set";
}

?>

</body>
</html>