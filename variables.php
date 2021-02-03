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

  <?php
    // assign var by value
    $valueInt = $myInt;
    // or assign by reference
    $refInt = &$myInt;
    $myInt += 999;
    echo "<br /> refInt has changed: $refInt
      <br /> but valueInt has not: ${valueInt}";
  
  ?>

<?php
  // variable names can be variables themselves. Ex:
  $a = 'name';
  $$a = 'num';

  // so now, $name = 'num'
?>

<?php
  $b = 'concat';
  $c = 'enate';
  echo "/n <br />";
  echo $b . $c;

  $d = 'hello';
  // concatenate to hello world
  $d .= 'world';  
?>

<?php
  $x = 1;
  echo "<br /> x is ", var_dump($x);
  echo "<br /> concat and + have same precedence,
    so parentheses are needed for  " . (string)($x - 1) . " to evaluate correctly";
?>


</body>
</html>