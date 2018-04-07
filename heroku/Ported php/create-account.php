<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
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
					<div class="card-title">
						<h2 class="index-row">Create your account</h2>
						<form action="sign-up.php" method="POST">

							<label for="new_display" class="space-left">Display Name</label>
							<input type="text" name="new_display" placeholder="Display Name">

							<label for="new_username" class="space-left">Username</label>
							<input type="text" name="new_username" placeholder="Username">
							
							<label for="new_password" class="space-left">Password</label>
							<input type="password" name="new_password" placeholder="Password">
							
							<input class="btn btn-success" type="submit" value="Create Account">
						
						</form>
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