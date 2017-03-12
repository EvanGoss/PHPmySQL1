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
    <img id="imagemiddle" src="images/petlogo.png" alt="TLA logo" height="100" width="100"/>
    <span id="titletext">Exotics and Pets</span>
  </header>

  <!-- nav menu -->
  <nav id="menu">

    <div class="menuitem">
      <a href="home.php">
        <img id="imagemiddle" src="images/petlogo.png" alt="" height="30" width="30"/>
        <span class="menutext">Home</span>
      </a>
    </div>

    <div class="menuitem">
      <a href="oderform.html">
        <img id="imagemiddle" src="images/petlogo.png" alt="" height="30" width="30"/>
        <span class="menutext">Order Form</span>
      </a>
    </div>

    <div class="menuitem">
      <a href="feedback.php">
        <img id="imagemiddle" src="images/petlogo.png" alt="" height="30" width="30"/>
        <span class="menutext">Feedback</span>
      </a>
    </div>

    <div class="menuitem">
      <a href="vieworder.php">
        <img id="imagemiddle" src="images/petlogo.png" alt="" height="30" width="30"/>
        <span class="menutext">View Orders</span>
      </a>
    </div>

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
    <p>&copy; Exotics and Pets<br />
    Please see our <a href="legal.php">legal information page</a>.</p>
  </footer>

</body>
</html>