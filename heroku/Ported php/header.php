<?php 
	session_start();
	
	if(isset($_SESSION['user_id']))
	{
		require('dbconnect.php');

		$user_id = $_SESSION['user_id'];

		$query = 'SELECT username FROM account WHERE account_id=:user_id';

		$stmt = $db->prepare($query);
		$stmt->bindValue(':user_id', $user_id);
		$stmt->execute();

		$row = $stmt->fetch();
		$username = $row['username'];
	}
	 

	$current = basename($_SERVER['PHP_SELF']); 
	if(isset($_SESSION['user_id']))
	{
		$logged_in = true;
	}
	else
	{
		$logged_in = false;
	}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand" href="#"><h1 class="header-title">CS 313</h1></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="btn btn-outline-primary nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">			
						<a class="btn btn-outline-primary nav-link" href="about.php">About Me</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle btn btn-outline-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Assignments
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item text-blue" href="browse.php">Shopping</a>
							<a class="dropdown-item text-blue" href="cart.php">Cart</a>
							<a class="dropdown-item text-blue" href="forum.php">Forum</a>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> 
						<span class="navbar-text">
							<?php 
								if (isset($_SESSION['user_id'])) {
								echo "Welcome," . " $username" . "!";
								}
							?>
						</span>
					</li>
					<li class="nav-item">
				<a style="color: white;"  class="btn  <?php echo $logged_in ? "btn-danger" : "btn-success"  ?>" href="<?php echo $logged_in ? "sign-out.php" : "login.php" ?>">
					<?php 
						echo $logged_in ? "Sign Out" : "Login"
					?>
				</a>
			</li>	
		</ul>
	</div>
</nav>