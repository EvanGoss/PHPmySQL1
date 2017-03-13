<?php
  $printer = function($value) {
    echo "$value<br />";
  };

  $products = array('Fish Food' => 3);
  $products['Cat Food'] = 8;
  $products['Bird Food'] = 2;
  $products['Dog Food'] = 6;

  $markup = 0.20;

  $apply = function(&$val) use ($markup) {
    $val = $val * (1 + $markup);
  };

  array_walk($products, $apply);

  array_walk($products, $printer);

?>