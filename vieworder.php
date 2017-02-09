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
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    @$fp = fopen($document_root."/cim/orders/orders.txt", 'rb');
    flock($fp, LOCK_SH); // lock file for reading

    if (!$fp) {
      echo "<p><strong>No orders pending.<br />
        Please try again later.</strong></p>";
      exit;
    }

    while (!feof($fp)) {
      $order = fgets($fp);
      echo htmlspecialchars($order)."<br />";
    }

    flock($fp, LOCK_UN); // release read lock
    fclose($fp);
  ?>
</body>
</html>