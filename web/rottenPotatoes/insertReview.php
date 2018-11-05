<?php

session_start();

require('connectRPDB.php');
$db = get_db();

//From server
$username = $_SESSION['username'];
//$date = getdate();

//Find userId
$usernamePassed = htmlspecialchars($usernamePassed);
$stmt = $db->prepare("SELECT id FROM users WHERE username = '$username';");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$userId = $users['userId'];

//From client
$text = htmlspecialchars($_POST['text']);
$score = htmlspecialchars($_POST['score']);
$gameId = htmlspecialchars($_POST['id']);
$gameName = htmlspecialchars($_POST['gameName']);

//From server

$insertStmt = 'INSERT INTO reviews (text, date, score, likes, userId, organizationId, gameId)' .
              'VALUES (:text, NULL, :score, 0, :userId, NULL, :gameId)';

$stmt = $db->prepare($insertStmt);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);
$stmt->bindValue(':score', $score, PDO::PARAM_INT);
$stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
$stmt->bindValue(':gameId', $gameId, PDO::PARAM_INT);
$stmt->execute();
$new_page = "https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?id=$gameId&name=$gameName";
header("Location: $new_page");
die();

?>