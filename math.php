<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
<?php 
  var_dump(10009909909090909090909009909090);
  echo "<br />";
  echo "\nhello \r\n\r Double quotes in order \f to \t use escape chars and variables \r";
  echo "<br />";
  echo "html tags may also be inserted in double quotes";
  echo "<br />";
  $int_1 = 10;
  $int_2 = 4;
  echo $int_1 + $int_2;
  echo "<br />";
  
  echo '\n single quotes dont escape';
  echo "<br />";
  
  echo $int_1 / $int_2;
  echo "<br />";
  echo "the intdiv function divides, and returns an integer rounded down";
  echo "<br />";
  echo intdiv($int_1, $int_2);
  echo "<br />";
  echo "on the other hand the round function rounds up or down";
  echo "<br />";
  echo round($int_1 / $int_2);
  echo "<br />";
  echo round(10 / 3);
?>
</p>
</body>
</html>

