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
?>
<!DOCTYPE html>
<html>
<head>
	<title> Checkout </title>
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
				<form action="submit.php" method="post">
					<div class="card-header">
						<div class="card-title">Checking Out</div>
					</div>
					<div class="card-text">
						<ul>
							<li class='list-group-item'>
								<div class='row'>
									<div class="col-md-3">
										<input type="text" name="first_name" placeholder="First Name">
									</div>

									<div class="col-md-3">
										<input type="text" name="last_name" placeholder="Last Name">
									</div>
	
									<div class="col-md-3">
										<input type="text" name="address1" placeholder="Address First Line">
									</div>

									<div class="col-md-3">
										<input type="text" name="address2" placeholder="Address Second Line">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-11 text-right">
										<a href="submit.php" class="btn btn-success"> Place Order </a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</form>
			</div>	
		</div>
	</div>
	<footer>
		<?php include "footer.php" ?>
	</footer>
</body>
</html>