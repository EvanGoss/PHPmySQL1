<?php
  // Passing parameter by value
  function increment($value) {
    $value = $value + 1;
  }

  $value = 10;
  echo "Before increment: " . $value . "<br />";
  increment($value);
  echo "After increment: " . $value;
  
?>