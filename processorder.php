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
    $find = $_POST['find'];
    
    $totalqty = 0;
    $totalqty = $birdfoodqty + $catfoodqty + $dogfoodqty + $fishfoodqty;
    $totalAmount = 0.00;

    define('BIRDFOODPRICE', 3);
    define('CATFOODPRICE', 5);
    define('DOGFOODPRICE', 6);
    define('FISHFOODPRICE', 2);
    $taxrate = 0.10; // Local sales tax
    $discount = 0;
    $discountAmount = 0;

    $totalAmount = $birdfoodqty * BIRDFOODPRICE
      + $catfoodqty * CATFOODPRICE
      + $dogfoodqty * DOGFOODPRICE
      + $fishfoodqty * FISHFOODPRICE;

    if ($totalAmount >= 50) {
      $discount = 15;
    }
    else if ( $totalAmount >= 25 && $totalAmount < 50 ) {
      $discount = 10;
    }
    else if ( $totalAmount > 10 && $totalAmount < 25 ) {
      $discount = 5;
    }

    $discountAmount = $totalAmount * ($discount * 0.01);
    $totalTaxAmount = ($totalAmount - $discountAmount) * $taxrate;

    echo '<p>Order processed at '; // Start processing order here
    echo date('H:i, jS F Y');
    echo '</p>';

    if ($totalqty == 0) {
      echo '<p style="color:red">';
      echo 'You did not order anything';
      echo '</p>';
    }
    else
    {
      // This will display the order summary
      echo '<p>Your order is as follows:</p>';
      echo htmlspecialchars($birdfoodqty).' bird food<br />';
      echo htmlspecialchars($catfoodqty).' cat food<br />';
      echo htmlspecialchars($dogfoodqty).' dog food<br />';
      echo htmlspecialchars($fishfoodqty).' fish food<br />';

      echo '<p>Items Ordered: '.$totalqty.'<br />';
      echo 'Subtotal: $'.number_format($totalAmount, 2).'<br />';
      echo 'Discount: -$'.number_format($discountAmount, 2).' ('.$discount.'%)<br />';
      echo 'Total including tax: $'.number_format($totalAmount - $discountAmount + $totalTaxAmount, 2).'</p>';

      switch ($find) {
        case 'a' :
          echo '<p>Regular Customer.</p>';
          break;
        case 'b' :
          echo '<p>Customer referred by Mail Advertising.</p>';
          break;
        case 'c' :
          echo '<p>Customer referred by Newspaper Advertising.</p>';
          break;
        case 'd' :
          echo '<p>Customer referred by Word of Mouth.</p>';
          break;
        default :
          echo '<p>We do not know how this customer found us.</p>';
          break;
      }
    }
  ?>
</body>
</html>