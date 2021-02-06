<?php

class diamond {
  public $color;

  function __construct($color) {
    $this->color= $color;
  }

  // destructor is called at the end of the script
  function __destruct() {
    echo "<br /> the diamond is the color {$this->color}";
  }
}


$sparkles = new diamond("purple");
echo var_dump($sparkles);

?>