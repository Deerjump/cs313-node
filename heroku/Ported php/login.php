<?php
	require('db-login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
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
						<h2>Login to your account</h2>
						<form action="login.php" method="POST">
							<label for="username">Username</label>
							<input type="text" name="username" placeholder="Username">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Password">
							<input class="btn btn-primary" type="submit" value="Login">
							<?php
								if ($badLogin) {
									echo "<h2 class='login-fail'>Incorrect username or password!</h2><br>";
								}
							?>
						</form>
						<form action="create-account.php">
							<label for="create-account">New?</label>
							<input class="btn btn-success" type="submit" value="Create an account"/>
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