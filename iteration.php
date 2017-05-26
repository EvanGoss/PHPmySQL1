<?php
class animals
{
  public $d = "Dog";
  public $c = "Cat";
  public $f = "Fish";
  public $b = "Bird";
}

$animals = new animals;
foreach ($animals as $animal) {
  echo $animal."<br/>";
}
?>