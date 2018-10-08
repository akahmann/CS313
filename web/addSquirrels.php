<?php
session_start();

$item = $_POST["item"];

$_SESSION["squirrels"][$item]++;
//header("location: browseSquirrels.php");
?>