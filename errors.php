<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
/* Intentional file error */
// the @ sign prevents the warning from being displayed
// $my_file = @file ('non_existent_file') or
//     die ("Failed opening file: error was '" . error_get_last()['message'] . "'");

// this works for any expression, not just functions:
$value = @$cache[$key];
// will not issue a notice if the index $key doesn't exist.
?>

<?php

// die throws an error and keeps remaining code from executing
// $my_err = $err or 
//   die ("Oh no");

var_dump($my_err);

$arr_err = $non_existent_arr['key'];
var_dump($arr_err);
function my_func() {
  return 1;
}

$func_err = my_func () or 
  die ("err is " . error_get_last()['message']);
?>

</body>
</html>