<?php
class morningmanners extends manners
{
  const greeting = "Good Morning";

  function greet() {
    echo "Good Morning " . $this->name;
  }

  public function __toString() {
    return "And have a very good tomorrow!";
  }
}
?>