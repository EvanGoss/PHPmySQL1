<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>array.php</title>
</head>
<body>
  <?php
    $products = array('Dog Food',
                      'Cat Food',
                      'Fish Food',
                      'Bird Food');

    sort($products);

    for ($item = 0; $item < count($products); $item++) {
      echo '|'.$products[$item].'|<br />';
    }
  ?>
</body>
</html>