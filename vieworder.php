<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Order Results</title>
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
  <h2>Customer Orders</h2>

  <?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    @$orders = file($document_root."/cim/orders/orders.txt");

    $number_of_orders = count($orders);

    if ($number_of_orders == 0) {
      echo "<p><strong>No orders pending.<br />
        Please try again later.</strong></p>";
      exit;
    }

    echo "<table>\n";
    echo "<tr>
      <th>Order Date</th>
      <th>Bird Food</th>
      <th>Cat Food</th>
      <th>Dog Food</th>
      <th>Fish Food</th>
      <th>Total</th>
      <th>Address</th>
      </tr>";

    for ($i = 0; $i < $number_of_orders; $i++) {
      // split up each line
      $line = explode("\t", $orders[$i]);

      // keep only the number of items ordered
      $line[1] = intval($line[1]);
      $line[2] = intval($line[2]);
      $line[3] = intval($line[3]);
      $line[4] = intval($line[4]);

      // output each order
      echo "<tr>
        <td>".$line[0]."</td>
        <td style=\"text-align: right;\">".$line[1]."</td>
        <td style=\"text-align: right;\">".$line[2]."</td>
        <td style=\"text-align: right;\">".$line[3]."</td>
        <td style=\"text-align: right;\">".$line[4]."</td>
        <td style=\"text-align: right;\">".$line[5]."</td>
        <td>".$line[6]."</td>
        </tr>";
    }
    echo "</table>";
  ?>

  <!-- page footer -->
  <footer>
    <?php require('footer.php'); ?>
  </footer>

</body>
</html>