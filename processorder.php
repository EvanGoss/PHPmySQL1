<?php
  require_once("file_exceptions.php");
?>
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
    // create short variables
    $birdfoodqty = $_POST['birdfoodqty'];
    $catfoodqty = $_POST['catfoodqty'];
    $dogfoodqty = $_POST['dogfoodqty'];
    $fishfoodqty = $_POST['fishfoodqty'];
    $address = preg_replace('/\t|\R/', ' ', $_POST['address']);
    $document_root  = $_SERVER['DOCUMENT_ROOT'];
    $date = date('H:i, jS F Y');
    
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
      exit;
    }
    
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

    // Create the address line
    echo '<p>Address to ship to is '.htmlspecialchars($address).'</p>';

    // Create the output string to write to file
    $outputstring = $date."\t".$birdfoodqty." bird food \t".$catfoodqty." cat food\t".$dogfoodqty." dog food\t".$fishfoodqty." fish food\t\$".$totalAmount."\t".$address."\n";

    try {
      // Open file for appending
      if (!($fp = @fopen($document_root."/cim/orders/orders.txt", 'ab'))) {
        throw new fileOpenException();
      }
      
      // Lock the file for writing
      if (!flock($fp, LOCK_EX)) {
        throw new fileLockException();
      }

      // Append the data to the file
      if (!fwrite($fp, $outputstring, strlen($outputstring))) {
        throw new fileWriteException();
      }

      flock($fp, LOCK_UN);
      fclose($fp);
      echo "<p>Order written.</p>";
    } catch (fileOpenException $foe) {
      echo "<p><strong>Orders file could not be opened.<br />
        Please contact our webmaster for help.</strong></p>";
    } catch (Exception $foe) {
      echo "<p><strong>Orders file could not be opened.<br />
        Please contact our webmaster for help.</strong></p>";
    }
  ?>
</body>
</html>