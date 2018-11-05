<?php
session_start();

require('connectRPDB.php');
$db = get_db();

$newUsername = $_POST['newUsername'];
$newUsername = htmlspecialchars($newUsername);
$newPassword = $_POST['newPassword'];
$newPassword = htmlspecialchars($newPassword);

$query = "SELECT username FROM users";
$stmt = $db->prepare($query);
$stmt->bindValue(":newUsername", $newUsername, PDO::PARAM_STR);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$inputUnique = true;

foreach ($users as $user) {
   if ($user['username'] == $newUsername) {
      $inputUnique = false;
   }
}

if($inputUnique) {
   $query = "INSERT INTO users(firstName, lastName, username, password, critic)" .
   "VALUES ('Bob', 'Frank', :newUsername, :newPassword, false);";
   $stmt = $db->prepare($query);
   $stmt->bindValue(":newUsername", $newUsername, PDO::PARAM_STR);
   $stmt->bindValue(":newPassword", $newPassword, PDO::PARAM_STR);
   $stmt->execute();

   $_SESSION["validAccount"] = true;
   header("location:rottenpotatoes.php");
}
else {

   $_SESSION["validAccount"] = false;
   header("location:createAccountPage.php");
}

?>