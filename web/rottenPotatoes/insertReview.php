<?php

//From client
$text = htmlspecialchars($_POST['text']);
$score = htmlspecialchars($_POST['score']);
$gameId = htmlspecialchars($_POST['id']);
$gameName = htmlspecialchars($_POST['gameName']);

//From server
//$date = getdate();

$insertStmt = 'INSERT INTO reviews (text, date, score, likes, userId, organizationId, gameId) VALUES (:text, NULL, :score, 0, 1, NULL, :gameId)';

require('connectRPDB.php');
$db = get_db();
$stmt = $db->prepare($insertStmt);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);
$stmt->bindValue(':score', $score, PDO::PARAM_INT);
$stmt->bindValue(':gameId', $gameId, PDO::PARAM_INT);
$stmt->execute();
$new_page = "<a href='https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?id=$gameId&name=$gameName";
header("Location: $new_page");
die();

?>