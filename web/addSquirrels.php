<?php

session_start();

$item = $_POST["item"];

//echo $item;

$_SESSION["squirrels"][$item]++;
header("location: browseSquirrels.php");
?>