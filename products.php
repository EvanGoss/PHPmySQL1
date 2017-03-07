<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Products</title>
</head>
<body>
  <?php
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

    array_multisort($products, SORT_DESC);

    for ($row = 0; $row < count($products); $row++) {
      echo '|'.$products[$row]['Code'].'|'.
               $products[$row]['Description'].'|'.
               $products[$row]['Price'].'|<br />';
    }
  ?>
</body>
</html>