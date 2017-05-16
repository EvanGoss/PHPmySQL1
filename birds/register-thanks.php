<!doctype html>
<html lang=en>
<head>
	<title>Thank you for registering</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="birds.css">
</head>

<body>
	<div id="container">
		<?php
			include("includes/header.php");
			include("includes/nav.php");
		?>

		<div id="content">
			<div id="midcol">
				<h2>Thank you for registering</h2>

        <p class="center">We received the following information:</p>
        <p>
          <?php
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $timestamp = date("Y-m-d H:i:s");

            require('mysqli_connect.php');
            $query = "INSERT INTO guest (fname, lname, email) VALUES (?, ?, ?)";
            $stmt = $dbcon->prepare($query);
            $stmt->bind_param('sss', $fname, $lname, $email);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
              echo '<table>
                <tr>
                  <td><b>First Name:</b></td>
                  <td>' . $fname . '</td>
                </tr>
                <tr>
                  <td><b>Last Name:</b></td>
                  <td>' . $lname . '</td>
                </tr>
                <tr>
                  <td><b>Email:</b></td>
                  <td>' . $email . '</td>
                </tr>
              </table>';
            } else {
              echo '<p>An error has occurred. Your registration information was not saved.</p>';
            }

            $dbcon->close();
          ?>
        </p>
			</div>
    </div>
	</div> <!--Container end-->

  <!--Footer-->
	<div id="footer">
		<footer>
			<?php
				include("includes/footer.php");
			?>
	</footer>

</body>
</html>