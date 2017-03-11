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

?>