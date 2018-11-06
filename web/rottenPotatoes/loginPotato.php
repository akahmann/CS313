<?php

session_start();

require('connectRPDB.php');
$db = get_db();
$usernamePassed = $_POST['username'];
$passwordPassed = $_POST['password'];
$usernamePassed = htmlspecialchars($usernamePassed);
$stmt = $db->prepare("SELECT id, username, password FROM users;");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$correctUser = false;
$correctPassword = false;
foreach ($users as $user) {
   if ($user['username'] == $usernamePassed) {
      $correctUser = true;
      $hashedPassword = $user['password'];
      if(password_verify($passwordPassed, $hashedPassword)) {
      //if($user['password'] == $passwordPassed) {
         $correctPassword = true;
      }
   }
}
if ($correctUser == true && $correctPassword == true) {
   $_SESSION["username"] = $usernamePassed;
   $_SESSION["validLogin"] = true;
   $_SESSION['userId'] = $user['id'];
   header('location:rottenpotatoes.php');
}
else {
   $_SESSION["validLogin"] = false;
   header('location:rottenpotatoes.php');
}

die();

?>