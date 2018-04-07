<?php

session_start();


$_SESSION['cart']['prod1'] += $_GET['prod1'];
$_SESSION['cart']['prod2'] += $_GET['prod2'];
$_SESSION['cart']['prod3'] += $_GET['prod3'];
$_SESSION['cart']['prod4'] += $_GET['prod4'];
$_SESSION['cart']['prod5'] += $_GET['prod5'];
$_SESSION['cart']['prod6'] += $_GET['prod6'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse Items</title>
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
				<div class="col-lg-3"></div>
				<div class="col-lg-5 mx-auto">
					<h1>Browse Our Items For Sale</h1>
				</div>
				<div class="col-lg-4"></div>
			</div>	
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
					  	<h4 class="card-title">Budget PC</h4>
					  </div>
					  <div class="card-body">
					    <p class="card-text">Very budget PC designed to play relatively older games or do some <strong>light</strong> video editing</p>
					    <ul class="list-group list-group-flush">
    						<li class="list-group-item">Ryzen 5 2400G 4 Cores</li>
						    <li class="list-group-item">8GB DDR4 2166 Mhz</li>
						    <li class="list-group-item">1 TB 7200 RPM HDD</li>
						    <li class="list-group-item"></li>
					    </ul>
					    <br>
					    <p class="card-text"> $499.99</p>
					    <a href="browse.php?prod1=1" id="prod1"  class="btn btn-primary">Add to Cart</a>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
					  	<h4 class="card-title">Budget Gaming PC</h4>
					  </div>
					  <div class="card-body">
					    <p class="card-text">Budget PC designed for modern games at low/medium settings</p>
					    <ul class="list-group list-group-flush">
    						<li class="list-group-item">Intel i5-7400 4 Cores</li>
						    <li class="list-group-item">Nvidia GTX 1050ti</li>
						    <li class="list-group-item">8GB DDR4 2166 Mhz</li>
						    <li class="list-group-item">1 TB 7200 RPM HDD</li>
					    </ul>
		    			<br>
					    <p class="card-text"> $699.99</p>
					    <a href="browse.php?prod2=1" id="prod2" class="btn btn-primary">Add to Cart</a>
					  </div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
					  	<h4 class="card-title">Mid-Tier Gaming PC</h4>
					  </div>
					  <div class="card-body">
					    <p class="card-text">Very capable build for 1080p gaming at high settings</p>
					    <ul class="list-group list-group-flush">
    						<li class="list-group-item">Ryzen 5 1600x 6 Core </li>
						    <li class="list-group-item">Nvidia GTX 1060 6GB</li>
						    <li class="list-group-item">8GB DDR4 2166 Mhz Ram</li>
						    <li class="list-group-item">1 TB 7200 RPM HDD</li>
					    </ul>
					    <br>
					    <p class="card-text"> $999.99</p>
					    <a href="browse.php?prod3=1"  class="btn btn-primary">Add to Cart</a>
					  </div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
					  	<h4 class="card-title">Option 4</h4>
					  </div>
					  <div class="card-body">
					    <p class="card-text">Mid to high tier PC for productivity and gaming</p>
					    <ul class="list-group list-group-flush">
    						<li class="list-group-item">Intel i7-7700 4 Core</li>
						    <li class="list-group-item">Nvidia GTX 1070 </li>
						    <li class="list-group-item">16GB DDR4 2400 Mhz Ram</li>
						    <li class="list-group-item">256GB SSD, 1 TB 7200 RPM HDD</li>
					    </ul>
					    <br>
					    <p class="card-text"> $1499.99 </p>
					    <a href="browse.php?prod4=1#prod4" id="prod4" class="btn btn-primary">Add to Cart</a>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
					  	<h4 class="card-title">Option 5</h4>
					  </div>
					  <div class="card-body">
					    <p class="card-text">High tier workstation for heavy workloads and gaming</p>
					    <ul class="list-group list-group-flush">
    						<li class="list-group-item">Intel i7-8700k 6 Cores</li>
						    <li class="list-group-item">Nvidia GTX 1080</li>
						    <li class="list-group-item">16GB DDR4 3000 Mhz Ram</li>
						    <li class="list-group-item">500GB SSD, 1 TB 7200 RPM HDD</li>
					    </ul>
					    <br>
					    <p class="card-text"> $1999.99</p>
					    <a href="browse.php?prod5=1#prod5" id="prod5" class="btn btn-primary">Add to Cart</a>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card">
					  <div class="card-header">
					  	<h4 class="card-title">Option 6</h4>
					  </div>
					  <div class="card-body">
					    <p class="card-text"><strong>Extremely</strong> powerful pc for very high rendering workloads</p>
					    <ul class="list-group list-group-flush">
    						<li class="list-group-item">Ryzen Threadripper 1900X</li>
						    <li class="list-group-item">Nvidia GTX 1080ti</li>
						    <li class="list-group-item">32GB DDR4 3000 Mhz</li>
						    <li class="list-group-item">1 TB SSD, 2 TB 7200 RPM HDD</li>
					    </ul>
					    <br>
					    <p class="card-text"> $2499.99.00</p>
					    <a href="browse.php?prod6=1#prod6" id="prod6" class="btn btn-primary">Add to Cart</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<?php include "footer.php" ?>
	</footer>
</body>
</html>