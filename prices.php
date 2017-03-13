<?php
  $prices = array('Fish Food' => 3);
  $prices['Cat Food'] = 8;
  $prices['Bird Food'] = 2;
  $prices['Dog Food'] = 6;

  function display_prices($prices) {
    echo "<table>\n";
    echo "<tr>
      <th>Product</th>
      <th>Price</th>
      </tr>";
    while (list($product, $price) = each($prices)) {
      // output each price
      echo "<tr>
        <td>".$product."</td>
        <td>".format_price($price)."</td>
        </tr>";
    }
    echo "</table>";
  }

  function format_price($price) {
    $formattedprice = sprintf("%.2f", $price);
    return $formattedprice;
  }
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Prices</title>
  <link rel="stylesheet" href="styles/styles.css" type="text/css">

  <style type="text/css">
    table, th, td {
      border-collapse: collapse;
      border: 1px solid black;
      padding: 6px;
    }

    th {
      background: #ccccff;
    }
  </style>
</head>
<body>
  <header>
    <?php require('header.php'); ?>
  </header>

  <!-- nav menu -->
  <nav id="menu">
    <?php require('menu.php'); ?>
  </nav>

  <br /><br />
  <h2>Prices</h2>

  <?php 
    display_prices($prices);
  ?>

  <!-- page footer -->
  <footer>
    <?php require('footer.php'); ?>
  </footer>
    
</body>
</html>