<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Freight Costs</title>
</head>
<body>
  <table style="border: 0px; padding: 3px;">
    <tr>
      <td style="background: #ccc; text-align: center;">Distance</td>
      <td style="background: #ccc; text-align: center;">Cost</td>
    </tr>

    <?php
      // This will loop through and create a new row for freight costs
      $distance = 50;
      while ($distance <= 250) {
        echo '<tr>
            <td style=\"text-align: right;\">'.$distance.'</td>
            <td style=\"text-align: right;\">'.($distance / 10).'</td>
          </tr>'."\n";
        $distance += 50;
      }
    ?>
  </table>
</body>
</html>