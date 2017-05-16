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
				<p>
					<?php
						require('mysqli_connect.php');
						$q = "SELECT * FROM guest ORDER BY registration_date DESC";
						$result = @mysqli_query($dbcon, $q);
						if ($result) {
							// Table header
							echo '<table><tr>
								<td align="left"><b>Name</b></td>
								<td align="left"><b>Date Registered</b></td>
								<td align="left"><b>Email</b></td>
							</tr>';
							// Retrieve and display all records
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								echo '<tr>
									<td align="left">' . $row['fname'] . ' ' . $row['lname'] . '</td>
									<td align="left">' . $row['registration_date'] . '</td>
									<td align="left">' . $row['email'] . '</td>
								</tr>';
							}
							echo '</table>'; // end of table
							mysqli_free_result ($result);
						} else {
							echo '<p class="error">The data could not be retrieved. We apologize for any inconvenience.</p>';
							echo '<p>' . mysqli_error($dbcon) . '<br>Query: ' . $q . '</p>';
						} // end if
						mysqli_close($dbcon);
					?>
				</p>
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
	</div>

</body>
</html>



