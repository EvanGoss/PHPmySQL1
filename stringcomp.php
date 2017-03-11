<?php
  // create variables
  $stringA = "This is a test";
  $stringB = "test";

  $substring = substr($stringA, 10, 4);

  // for string compares, return -1 if false and 0 if true
  printf("Comparing the strings '%s' and '%s' returns %s",
    $stringA, $substring, strcmp($stringA, $substring));
  print("<br />");

  printf("Comparing the strings '%s' and '%s' returns %s",
    $stringB, $substring, strcmp($stringB, $substring));
  print("<br />");

  $stringB = strtoupper($stringB);

  printf("Comparing the strings '%s' and '%s' returns %s",
    $stringB, $substring, strcmp($stringB, $substring));
  print("<br />");

  printf("Comparing the strings '%s' and '%s' returns %s",
    $stringB, $substring, strcasecmp($stringB, $substring));
  print("<br />");

  print("<br />");
  printf("The string '%s' is %s characters in length",
    $stringA, strlen($stringA));

  // string position
  $stringA = "Hello world";
  $stringB = "Goodbye";

  print("<br />");

  echo strpos($stringA, "o");

  // string replace
  print("<br />");
  $result = str_replace("Hello", $stringB, $stringA);
  echo $result;

  print("<br />");
  $result = substr_replace($stringA, $stringB, 0, 5);
  echo $result;

  print("<br />");

  // Regular Expressions
  $address = 'username@example.com';
  $arr = preg_split('/\.|@/', $address);
  while (list($key, $value) = each($arr)) {
    echo '<br />' . $value;
  }

?>