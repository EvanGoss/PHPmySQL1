<!doctype html>
<html lang=en>
<head>
	<title>Home Page</title>
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
		<div id="content"><!--Start of the home page content-->
			<div id="midcol">
				<h2>Newport Bay Conservancy</h2>
				<div id="mid-left-col">
					<p class="dark">Upper Newport Bay is home to nearly 200 species of birds, including several 
                    endangered species. It is one of the top birding sites in the country, attracting birders 
                    from the east coast of the USA and beyond. The Sea and Sage Audubon Society conducts a monthly 
                    bird count at the Bay in conjunction with the California Department of Fish and Wildlife and 
                    Newport Bay Conservancy. For more information and bird count results, visit the Sea and Sage 
                    Bird Counts page.</p>
					<p class="dark">The Bay is an important rest stop and/or winter home for birds migrating from 
                    Canada and Alaska, and up to 30,000 birds can be seen here on any one day during the winter 
                    months. During the spring and summer many birds that have migrated from the south nest here, 
                    together with other birds that are year-round residents. Nesting birds include the endangered 
                    Ridgway’s rail and California least tern.</p>
				</div>
				<div id="mid-right-col">
					<h3>The Newport Bay Conservancy </h3>
					<p class="dark">The Newport Bay Conservancy (NBC) is the single organization focused exclusively 
                    on the conservation and restoration of Upper Newport Bay – one of the most precious natural resources 
                    in Southern California.</p>
					<p class="dark">We organize community-based native habitat restoration and other service activities 
                    that involve the public and local businesses in the stewardship of the Bay.</p>
                    <p class="dark">We conduct various environmental education programs and nature tours for school and 
                    college groups and for the general public to enhance their knowledge and appreciation of the Bay and 
                    increase their awareness of the role they play in protecting the environment.</p>
				</div>	<!--End of the home page content-->
		    </div>
		</div>
  	</div>
    <br class="clear">
	
    <!--Add footer here-->
	<div id="footer">
		<footer>
			<?php
				include("includes/footer.php");
			?>
		</footer>
	</div>
</body>
</html>



