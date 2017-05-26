<?php
  require('manners.php');
  require('morningmanners.php');

  // $greeting = new morningmanners('Evan');
  // $greeting->name = "Sam";
  // $greeting->greet();

  echo morningmanners::greeting;
  echo "<br/>";
  manners::farewell();
  echo "<br/>";

  $greeting = new morningmanners('Evan');
  echo $greeting;
?>