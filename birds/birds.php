<!doctype html>
<html lang=en>
	<head>
	<title>Bird Breeds</title>
	<meta charset=utf-8>
	<link rel="stylesheet" type="text/css" href="birds.css">
</head>

<body>
	<div id="container">
		<!--Add include statements here-->
		<?php
			include("includes/header.php");
			include("includes/nav.php");
		?>
		<div id="content"><!-- Start of the view birds page content. -->
			<div id="midcol">
				<h2>Birds that can be seen on our Reserves</h2>
				<p>
					<!--Add birds table here-->
					<?php
						// Retrieve all records from birds table
						require('mysqli_connect.php');
						$q = "SELECT bird_name, rarity, best_time FROM birds ORDER BY bird_name ASC";
						$result = @mysqli_query($dbcon, $q);
						if ($result) {
							// Table header
							echo '<table><tr>
								<td align="left"><b>Bird Name</b></td>
								<td align="left"><b>Rarity</b></td>
								<td align="left"><b>Best Time</b></td>
							</tr>';
							// Retrieve and display all records
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								echo '<tr>
									<td align="left">' . $row['bird_name'] . '</td>
									<td align="left">' . $row['rarity'] . '</td>
									<td align="left">' . $row['best_time'] . '</td>
								</tr>';
							}
							echo '</table>'; // end of table
							mysqli_free_result ($result);
						} else {
							echo '<p class="error">The current birds could not be retrieved. We apologize for any inconvenience.</p>';
							echo '<p>' . mysqli_error($dbcon) . '<br>Query: ' . $q . '</p>';
							} // end if
							mysqli_close($dbcon);
					?>
				</p>
			</div>
		</div><!-- End of the view birds page content. -->
	</div>
	
	<!--Add footer here-->
	<div id="footer">
		<footer>
			<?php
				include("includes/footer.php");
			?>
	</footer>
</body>
</html>



