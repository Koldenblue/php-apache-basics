<?php

class Gem {
  // public functions can be called anywhere. 
  // protected functions can only be called by a class and inherited classes.
  // private function can only be called within a class.
  public $color;
  const CLARITY = 'clear';

  public static function need_gems() {
    // this static function may be called without creating an instance of the class first
    echo "Hey bub you need gems";
  }

  public function __construct($color) {
    $this->color = $color;
    $this->name = 'gem';
  }

  // destructor is called at the end of the script
  // final keyword prevents this method from being overwritten by inheriting classes
  final public function __destruct() {
    echo "<br /> the {$this->name} is the color {$this->color}";
    echo "<br /> It sure is " . self::CLARITY;
  }
}

class Ruby extends Gem {
  // since this function has the same name as the __construct() function in the gem class,
  // it overwrites that function
  public function __construct() {
    $this->color = 'red';
    $this->name = 'ruby';
  }

  public function message() {
    echo "the ruby is {$this->color}";
  }

}


$sparkles = new Gem("purple");
echo var_dump($sparkles);

$rails = new Ruby();
echo "<br />", var_dump($rails);

// Can call the constant that is defined within the class Gem
echo '<br /> The gem has a constant of ', Gem::CLARITY;
?>