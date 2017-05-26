<?php
require('gestures.php');

class manners implements Gestures
{
  private $name;
  function __construct($value) {
    $this->name = $value;
  }

  function __get($name) {
    return $this->name;
  }

  function __set($name, $value) {
    $this->$name = $value;
  }

  function greet() {
    echo "Hello " . $this->name;
  }

  static function farewell() {
    echo "Goodbye";
  }
}
?>