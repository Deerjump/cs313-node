<?php
	require('dbconnect.php');
	
	$search = $_GET['search'];
?>
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
				<div class="card-header">
					<div class="card-title">
						<div class="row">
							<div class="col-md-10">	
								Forum Threads <br>
								<form method="GET">
									<input type="text" name="search" placeholder="Keyword" value="<?php echo $search ?>">
									<input type="submit" value="Search" /> 
								</form>
							</div>
							<div class="col-md-2">
								<a class="btn btn-success" href="<?php echo $logged_in ? "new-thread.php" : "login.php" ?>">Create New Thread</a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="card-text">
						<?php
							
								foreach ($db->query("SELECT * FROM thread INNER JOIN account ON thread.author_id = account.account_id WHERE LOWER(title) LIKE LOWER('%$search%') OR LOWER(username) LIKE LOWER('%$search%') ORDER BY thread_id")  as $row) {
									$title = $row['title'];
									$author = $row['username'];
									$id = $row['thread_id'];
									
									echo "<div class='row index-row'>";
									echo "<div class= 'col-md-9'><h2><strong><a href='view-thread.php?id=$id'>$title</a></strong></h2></div>";
									echo "<div class= 'col-md-3'>" .  "<h4>written by: <strong>$author</strong></h4>" . "</div></div>";

								}
								if(count($row)==0){
									echo "<div class='row'><div class='col-md-12'> <h2>There are no results for $search!</h2><h4><u><a href='forum.php'>Return</a></u></h4></div></div>";
								}
						?>
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