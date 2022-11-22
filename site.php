<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="site.php" method="post">

      <input type="text" name="student">
      <input type="submit">

    </form>

    <?php

    $Grades = array("Name1"=>"A+", "Name2"=>"B","Name3","C");
    echo $Grades[$_POST["student"]];

    ?>

  </body>
</html>
