<?php
 session_start();
 
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<?php include "header.php" ?>
		</header>
		<p style="color:white">
			<?php 
				if(!(empty($_SESSION['cart'])))
				{
					foreach ($_SESSION['cart'] as $key => $value) {
						$empty += $value;
						echo $value;
					}
					if($empty == 0)
					{
						echo "THERE IS NOTHING IN YOUR CART";
					}
				}
				else{
					echo "SESSION VARIABLE DOES NOT EXIST";
				}
				
			?>
		</p>
	</body>
</html>