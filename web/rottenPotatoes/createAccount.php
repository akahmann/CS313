<?php
session_start();

require('connectRPDB.php');
$db = get_db();

$newFirstname = $_POST['newFirstname'];
$newLastname = htmlspecialchars($newLastname);
$newPassword = $_POST['newPassword'];
$newPassword = htmlspecialchars($newPassword);
$newUsername = $_POST['newUsername'];
$newUsername = htmlspecialchars($newUsername);
$newPassword = $_POST['newPassword'];
$newPassword = htmlspecialchars($newPassword);

$isChecked = 'false';

if (isset($_POST['critic'])) {
//if ($_POST['critic'] == 'criticChecked') {
   $isChecked = 'true';
}

$query = "SELECT username FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$inputUnique = true;

foreach ($users as $user) {
   if ($user['username'] == $newUsername) {
      $inputUnique = false;
   }
}

if($inputUnique) {
   $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
   $query = "INSERT INTO users(firstName, lastName, username, password, critic, piclink)" .
   "VALUES (:newFirstname, :newLastname, :newUsername, :newPassword, '$isChecked', '/rottenPotatoes/users/batman.jpg');";
   $stmt = $db->prepare($query);
   $stmt->bindValue(":newFirstname", $newFirstname, PDO::PARAM_STR);
   $stmt->bindValue(":newLastname", $newLastname, PDO::PARAM_STR);
   $stmt->bindValue(":newUsername", $newUsername, PDO::PARAM_STR);
   $stmt->bindValue(":newPassword", $hashedPassword, PDO::PARAM_STR);
   $stmt->execute();

   $_SESSION["validAccount"] = true;
   $_SESSION["validLogin"] = true;
   header("location:rottenpotatoes.php");
}
else {

   $_SESSION["validAccount"] = false;
   $_SESSION["validLogin"] = true;
   header("location:createAccountPage.php");
}

?>