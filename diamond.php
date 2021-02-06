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

      // $this keyword is only available inside the class!!
      public function displayColor() {
        echo $this->color;
      }

      // function sets the $color
      function setColor(string $newColor) {
        $this->color = $newColor;
      }
      
      function getColor() {
        return $this->color;
      }
      // displays the name of the class, in this case "diamond"
      public function foo() {
        echo get_class($this);
      }
    }
  ?>

  <?php 
    // get the color from the form
    $diamondColor = $_GET['color'];
    echo var_dump($diamondColor), PHP_EOL;
    $diamond = new diamond();

    // call the setColor method of $diamond.
    $diamond->setColor($diamondColor);

    echo var_dump($diamond);

    echo '<br />', $diamond->foo();
  ?>
</body>
</html>