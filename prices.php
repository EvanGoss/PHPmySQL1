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

    ksort($prices);

    while (list($product, $price) = each($prices)) {
      echo $product." - ".$price."<br />";
    }
  ?>
</body>
</html>