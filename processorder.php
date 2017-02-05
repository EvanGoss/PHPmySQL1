<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Order Results</title>
</head>
<body>
  <h1>Exotics and Pets</h1>
  <h2>Order Results</h2>
  <?php
    /* Author: Evan Oldfield Goss
       Last Modified: 2/4/17
       This script will process the customer order
    */
    // create short variables
    $birdfoodqty = $_POST['birdfoodqty'];
    $catfoodqty = $_POST['catfoodqty'];
    $dogfoodqty = $_POST['dogfoodqty'];
    $fishfoodqty = $_POST['fishfoodqty'];
    
    $totalqty = 0;
    $totalqty = $birdfoodqty + $catfoodqty + $dogfoodqty + $fishfoodqty;
    $totalamount = 0.00;

    define('BIRDFOODPRICE', 3);
    define('CATFOODPRICE', 5);
    define('DOGFOODPRICE', 6);
    define('FISHFOODPRICE', 2);
    $taxrate = 0.10; // Local sales tax

    $totalamount = $birdfoodqty * BIRDFOODPRICE
      + $catfoodqty * CATFOODPRICE
      + $dogfoodqty * DOGFOODPRICE
      + $fishfoodqty * FISHFOODPRICE;

    $totaltaxamount = $totalamount * $taxrate;

    echo '<p>Order processed at '; // Start processing order here
    echo date('H:i, jS F Y');
    echo '</p>';

    // This will display the order summary
    echo '<p>Your order is as follows:</p>';
    echo htmlspecialchars($birdfoodqty).' bird food<br />';
    echo htmlspecialchars($catfoodqty).' cat food<br />';
    echo htmlspecialchars($dogfoodqty).' dog food<br />';
    echo htmlspecialchars($fishfoodqty).' fish food<br />';

    echo '<p>Items Ordered: '.$totalqty.'<br />';
    echo 'Subtotal: $'.number_format($totalamount, 2).'<br />';
    echo 'Total including tax: $'.number_format($totalamount + $totaltaxamount, 2).'</p>';


  ?>
</body>
</html>