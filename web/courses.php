<?php

   require('practice.php');

   $db = get_db();

   $query = 'SELECT id, code, name FROM course';

   $stmt = $db->prepare($query);
   $stmt->execute();
   $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
   <title>Courses</title>
</head>
<body>
   <h1>Course</h1>

<?php

   foreach ($courses as $course) {
      $id = $course['id'];
      $name = $course['id'];
      $code = $course['code'];

      echo "<li><p>$code - $name</p></li>\n";
   }

?>

</body>
</html>