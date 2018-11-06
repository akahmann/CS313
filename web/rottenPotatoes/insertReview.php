<?php

session_start();

require('connectRPDB.php');
$db = get_db();

//From server
$username = $_SESSION['username'];
$userId = $_SESSION['userId'];
//$date = getdate();

// $stmt = $db->prepare("SELECT id FROM users WHERE username = '$username';");
// $stmt->execute();
// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach ($users as $user) {
//    $userId = $user['userId'];
// }

//From client
$usernamePassed = htmlspecialchars($usernamePassed);
$text = htmlspecialchars($_POST['text']);
$score = htmlspecialchars($_POST['score']);
$gameId = htmlspecialchars($_POST['id']);
$gameName = htmlspecialchars($_POST['gameName']);
$picLink = htmlspecialchars($_POST['picLink']);
$genre = htmlspecialchars($_POST['genre']);
$developer = htmlspecialchars($_POST['developer']);

//From server

$insertStmt = 'INSERT INTO reviews (text, date, score, likes, userId, gameId)' .
              'VALUES (:text, NULL, :score, 0, :userId, :gameId)';

$stmt = $db->prepare($insertStmt);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);
$stmt->bindValue(':score', $score, PDO::PARAM_INT);
$stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
$stmt->bindValue(':gameId', $gameId, PDO::PARAM_INT);
$stmt->execute();
$new_page = "https://cryptic-taiga-82259.herokuapp.com/rottenPotatoes/gamereview.php?id=$gameId&name=$gameName" .
            "&picLink=$picLink&genre=$genre&developer=$developer";

header("Location: $new_page");
die();

?>