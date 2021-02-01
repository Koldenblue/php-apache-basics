<?php
  $arr1 = array(1, 2);
  $arr2 = [3, 4];

  echo var_dump($arr1);
  echo '<br />';
  echo var_dump($arr2);
?>

<?php
  // specify array keys. Keys can be either specified or auto-incremented.
  // In this way, arrays are like both JavaScript objects and arrays.
  $arr3 = [
    'a',
    'my key' => 'b',
    'c',
    999 => 'd',
    'e'
  ];

  echo '<br />';
  echo var_dump($arr3);

  echo '<br />';
  echo $arr3['my key'];
  echo $arr3[1000];
  // can set new values.
  $arr3['my key'] = 'new value';
  echo $arr3['my key'];

  // push new element. Can also use the array_push() function
  $arr3[] = 'push new element';
  echo "<br />", var_dump($arr3);
?>

<?php
// iterable is a psuedotype
  function printValues(iterable $arr) {
    foreach($arr as $value) {
      echo '<br />', $value;
    }
  }

  printValues($arr3);
?>
