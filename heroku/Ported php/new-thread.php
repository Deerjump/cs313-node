<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forum</title>
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
				<form action="make-thread.php" method="POST">
					<div class="card-header">
						<div class="card-title">
							<div class="row">
								<div class="col-lg-10">
									<input type="text" name="title" placeholder="Title Here">
								</div>
								<div class="col-md-2">
									<button type="submit" class="btn btn-success">Submit Thread</button>
								</div>
							</div>
						</div>
					</div>
						<div class="card-body">
							<div class="card-text">
								<textarea name="content" rows="10" id="fill" placeholder="Content Here"></textarea>
							</div>
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