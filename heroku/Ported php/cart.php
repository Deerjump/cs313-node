<?php 
	session_start();

	$_SESSION['cart']['prod1'] -= $_GET['rem1'];
	$_SESSION['cart']['prod2'] -= $_GET['rem2'];
	$_SESSION['cart']['prod3'] -= $_GET['rem3'];
	$_SESSION['cart']['prod4'] -= $_GET['rem4'];
	$_SESSION['cart']['prod5'] -= $_GET['rem5'];
	$_SESSION['cart']['prod6'] -= $_GET['rem6'];

	$prod1 = $_SESSION['cart']['prod1'];
	$prod2 = $_SESSION['cart']['prod2'];
	$prod3 = $_SESSION['cart']['prod3'];
	$prod4 = $_SESSION['cart']['prod4'];
	$prod5 = $_SESSION['cart']['prod5'];
	$prod6 = $_SESSION['cart']['prod6'];

	$isempty = true;

	foreach ($_SESSION['cart'] as $key => $value) {
		if($value != 0){
			$isempty = false;
		}
	}						
?>
<!DOCTYPE html>
<html>
<head>
	<title> Shopping Cart! </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<?php include "header.php" ?>
	</header>
	<div class="bodywrapper">
		<div class="container-fluid">
			<div class="card cart">
				<div class="card-header">
					<div class='card-title'>Shopping Cart</div>
				</div>
				<div class="card-text">
					<ul>
						<?php
							if(!($isempty)){



								if($_SESSION['cart']['prod1'] != 0){
									echo "<li class='list-group-item'><div class='row'>
									<div class='col-sm-4'>Option 1</div>
									<div class='col-sm-4'>$prod1</div>
									<div class='col-sm-4'><a href='cart.php?rem1=1'>Remove From Cart</a></div>
									</div></li>";
								}
								if($_SESSION['cart']['prod2'] != 0){
									echo "<li class='list-group-item'><div class='row'>
									<div class='col-sm-4'>Option 2</div>
									<div class='col-sm-4'>$prod2</div>
									<div class='col-sm-4'><a href='cart.php?rem2=1'>Remove From Cart</a></div>
									</div></li>";
								}
								if($_SESSION['cart']['prod3'] != 0){
									echo "<li class='list-group-item'><div class='row'>
									<div class='col-sm-4'>Option 3</div>
									<div class='col-sm-4'>$prod3</div>
									<div class='col-sm-4'><a href='cart.php?rem3=1'>Remove From Cart</a></div>
									</div></li>";
								}
								if($_SESSION['cart']['prod4'] != 0){
									echo "<li class='list-group-item'><div class='row'>
									<div class='col-sm-4'>Option 4</div>
									<div class='col-sm-4'>$prod4</div>
									<div class='col-sm-4'><a href='cart.php?rem4=1'>Remove From Cart</a></div>
									</div></li>";
								}
								if($_SESSION['cart']['prod5'] != 0){
									echo "<li class='list-group-item'><div class='row'>
									<div class='col-sm-4'>Option 5</div>
									<div class='col-sm-4'>$prod5</div>
									<div class='col-sm-4'><a href='cart.php?rem5=1'>Remove From Cart</a></div>
									</div></li>";
								}
								if($_SESSION['cart']['prod6'] != 0){
									echo "<li class='list-group-item'><div class='row'>
									<div class='col-sm-4'>Option 6</div>
									<div class='col-sm-4'>$prod6</div>
									<div class='col-sm-4'><a href='cart.php?rem6=1'>Remove From Cart</a></div>
									</div></li>";
								}
									echo "<a href='checkout.php' class='btn btn-success'> Checkout </a>";
									echo "<a href='redirect.php'>Clear Cart</a>";
							}
							else{
								echo "<div class='card-header'> <div class='card-title'>There is nothing in your Cart!</div></div>";
								echo "<a href='browse.php' class='btn btn-success'> Continue Shopping </a>";
							}
						?>

						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<?php include "footer.php" ?>
	</footer>
</body>
</html>