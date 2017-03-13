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
  <link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>
<body>
  <header>
    <?php require('header.php'); ?>
  </header>

  <!-- nav menu -->
  <nav id="menu">
    <?php require('menu.php'); ?>
  </nav>

  <!-- Page Content -->
  <section>
    <h2>Welcome to Exotics and Pets.</h2>
    <p>We specialize in supplies for domestic and exotic pets alike.</p>
    <p>Please browse our site and let us know if you can't find what you're looking for.</p>
  </section>
  
  <div align="center">
    <table width="75%">
      <tr>
        <?php
          for ($i = 0; $i < count($pictures); $i++) {
            echo "<td style=\"width: 25%; text-align: center\">
              <img src=\"images//";
            echo $pictures[$i];
            echo "\" height=\"75\" width=\"75\"/></td>";
          }
        ?>
      </tr>
    </table>

  </div>

  <!-- page footer -->
  <footer>
    <?php require('footer.php'); ?>
  </footer>

</body>
</html>