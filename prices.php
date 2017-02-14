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

    foreach ($prices as $key => $value) {
      echo $key." - ".$value."<br />";
    }
  ?>
</body>
</html>