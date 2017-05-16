<!doctype html>
<html lang=en>
<head>
	<title>Guest Book</title>
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
				<h2>Guest Book</h2>

        <form action="register-thanks.php" method="post">
					<p>
						<label for="fname">First Name:</label>
						<input type="text" name="fname" id="fname">
					</p>
          <p>
						<label for="lname">Last Name:</label>
						<input type="text" name="lname" id="lname">
					</p>
          <p>
						<label for="email">Email:</label>
						<input type="email" name="email" id="email">
					</p>
          <p>
						<input type="submit" name="Register" value="Register">
					</p>
        </form>

			</div>
		</div>
	</div>

  <!--Footer-->
	<div id="footer">
		<footer>
			<?php
				include("includes/footer.php");
			?>
	</footer>

</body>
</html>