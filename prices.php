<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Prices</title>
</head>
<body>
  <?php
    $prices = array('Fish Food' => 3);
    $prices['Cat Food'] = 8;
    $prices['Bird Food'] = 2;
    $prices['Dog Food'] = 6;

    while ($element = each($prices)) {
      echo $element['key']." - ".$element['value'];
      echo "<br />";
    }
  ?>
</body>
</html>