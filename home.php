<?php
  $pictures = array(
    'birdfood.jpg',
    'catfood.jpg',
    'dogfood.jpg',
    'fishfood.jpg'
  );
  shuffle($pictures);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exotics and Pets - Home Page</title>
</head>
<body>
  <header>
    <h1>Exotics and Pets</h1>
  </header>

  <div align="center">
    <table width="75%">
      <tr>
        <?php
          for ($i = 0; $i < 4; $i++) {
            echo "<td style=\"width: 25%; text-align: center\">
              <img src=\"images\\";
            echo $pictures[$i];
            echo "\" height=\"75\" width=\"75\"/></td>";
          }
        ?>
      </tr>
    </table>

  </div>
</body>
</html>