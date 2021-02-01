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
    class diamond {
      public $color;

      // function cannot set the $color
      public function setColor(string $newColor) {
        return $newColor;
      }
    }
  ?>

  <?php 

    // get the color from the form
    $diamondColor = $_GET['color'];
    echo var_dump($diamondColor), PHP_EOL;
    $diamond = new diamond();
    echo $diamond::setColor($diamondColor);

    // instead set the diamond color here
    $diamond->color = $diamondColor;
    echo var_dump($diamond);
  ?>
</body>
</html>