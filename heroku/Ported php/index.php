<!DOCTYPE html>
<html>
<head>
	<title> Hello! </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<?php include "header.php" ?>
	</header>
	<div class="bodywrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="card" style="width:600px">
						<div class="card-header">
							<h2>Parkour is an amazing sport.</h2>
						</div>
					</div>
					<img src="flip.png">
				</div>
				<div class="col-xlg-6">
					<div class="card" style="width:600px">
						<div class="card-header">
							<h2>Here is a video I made in 2012!</h2>
						</div>
					</div>
					
					<iframe class="parkour" src="https://www.youtube-nocookie.com/embed/WFsLMIVZnqE" frameborder= "0";  allow="encrypted-media" allowfullscreen> </iframe>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<?php include "footer.php" ?>
	</footer>
</body>
</html>