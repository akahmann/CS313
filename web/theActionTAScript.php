<?php

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

<?php
   $book = $_POST['book'];
   $chapter = $_POST['chapter'];
   $verse = $_POST['verse'];
   $topics = $_POST['topic'];

   $stmt = $db->prepare("insert into scripture (book, chapter, verse) VALUES (:book, :chapter, :verse)");
   $stmt->bindValue(":book", $book, PDO::PARAM_STR);
   $stmt->bindValue(":chapter", $chapter, PDO::PARAM_INT);
   $stmt->bindValue(":verse", $verse, PDO::PARAM_INT);
   $stmt->exectute();

   $stmt = $db->prepare("select id FROM scripture WHERE ");
   $stmt->bindValue(":book", $book, PDO::PARAM_STR);
   $stmt->bindValue(":chapter", $chapter, PDO::PARAM_INT);
   $stmt->bindValue(":verse", $verse, PDO::PARAM_INT);
   $stmt->exectute();

   $stmt = $db->prepare("insert into topic_scripture (scripture_id, topic_id) VALUES (:scripture_id, :topic_id)");
   $stmt->bindValue(":book", $book, PDO::PARAM_STR);
   $stmt->bindValue(":chapter", $chapter, PDO::PARAM_INT);
   $stmt->bindValue(":verse", $verse, PDO::PARAM_INT);
   $stmt->exectute();

?>

</body>
</html>