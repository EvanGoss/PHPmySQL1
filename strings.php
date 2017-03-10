<?php

  // setup variables
  $name = "Evan's";
  $total = 34.111;

  // display total using echo
  echo $name . " total using echo is: " . $total . "<br />";

  // display total using print
  print($name . " total using print is: " . $total) . "<br />";

  // display total using printf formatted as floatval
  printf("%s total using printf is: %s", $name, $total);
  echo "<br />";

  // display total using printf formatted as floatval
  printf("%s total using printf is: %.2f", $name, $total);
  echo "<br />";
  echo "<br />";

  $string = "This is a test string";

  // changing to uppercase
  print(strtoupper($string)) . "<br />";

  // changing to lowercase
  print(strtolower($string)) . "<br />";

  // changing first letter to uppercase
  print(ucfirst($string)) . "<br />";

  // changing first letter of each word to uppercase
  print(ucwords($string)) . "<br />";
  echo "<br />";

  // splitting into array
  $words = explode(" ", $string);
  for ($cnt = 0; $cnt < count($words); $cnt++) { 
    echo $words[$cnt] . '<br />';
  }

  // breaking a string into substrings
  echo "<br />";

  $test = substr($string, 10);
  echo $test;

  echo "<br />";

  $test = substr($string, 10, 4);
  echo $test;
?>