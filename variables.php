<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <a href='/php-apache-basics/'>home</a>
  <br />

  <?php
    echo $_SERVER['HTTP_USER_AGENT'];
  ?>
  <br />
  <?php 
    $myInt = 12;
    echo $myInt;
  ?>

    <br />

  <?php
    echo gettype($myInt);
  ?>
</body>
</html>