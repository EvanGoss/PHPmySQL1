<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Products</title>
</head>
<body>
  <?php
    function price_compare($x, $y) {
      if ($x['Price'] == $y['Price']) {
        return 0;
      } else if ($x['Price'] < $y['Price']) {
        return -1;
      } else {
        return 1;
      }
    }

    $products = array(
                  array('Code' => 'BF',
                        'Description' => 'Bird Food',
                        'Price' => 2),
                  array('Code' => 'CF',
                        'Description' => 'Cat Food',
                        'Price' => 8),
                  array('Code' => 'DF',
                        'Description' => 'Dog Food',
                        'Price' => 6),
                  array('Code' => 'FF',
                        'Description' => 'Fish Food',
                        'Price' => 3)
                );

    usort($products, 'price_compare');

    for ($row = 0; $row < count($products); $row++) {
      echo '|'.$products[$row]['Code'].'|'.
               $products[$row]['Description'].'|'.
               $products[$row]['Price'].'|<br />';
    }
  ?>
</body>
</html>