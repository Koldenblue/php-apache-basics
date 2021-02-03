<?php
  require __DIR__.'/vendor/autoload.php';

  $debug = new \bdk\Debug(array(
    'collect' => true,
    'output' => false,
  ));

  $debug->log('hello world');
  $debug->warn('hello world')
?>

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

<hr>
<h2>Array Operators: </h2>
<?php
  // union of arrays:
  // if a key exists in more than one array, the elements from the left-hand array are used
  $unionArr = $arr1 + $arr2 + $arr3;

  echo var_dump($unionArr);
  echo "<br />";
  // prints nothing if false, prints 1 if true
  echo $arr1 === $arr2;
  echo $arr1 != $arr2;
  // another way to write inequality:
  echo $arr1 <> $arr2;
  echo gettype($arr1 === $arr2);

?>