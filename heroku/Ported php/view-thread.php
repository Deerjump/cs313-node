<?php
	require('dbconnect.php');
	
	$id = (int)$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forum</title>
	<script src="javascript.js"></script>
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
						<?php
							foreach($db->query("SELECT *, to_char(date_posted, 'Month DD, YYYY at HH12:MI' ) FROM thread INNER JOIN account ON thread.author_id = account.account_id WHERE thread_id=$id") as $row)
							{
								$title = $row['title'];
								$author = $row['username'];
								$date = $row['to_char'];
								$content = $row['content'];
								echo "<h2>$title</h2>";
								echo "<h6>by: <strong>$author</strong>. written on: <strong>$date</strong></h6>";
							}
						?> 
						<a href="forum.php" style="color: #5cb85c;"><strong>Back to Forum Index</strong></a>
					</div>
				</div>
				<div class="card-body">
					<div class="card-text">
						<?php
							echo "<p>$content</p>";

						?>
					</div>
					<ul class="list-group list-group-flush">
						<?php 
							foreach ($db->query("SELECT *, to_char(date_commented, 'Month DD, YYYY at HH12:MI' ) FROM comment INNER JOIN account ON comment.author_id = account.account_id WHERE thread_id=$id") as $row1) {
									$author = $row1['username'];
									$comment_date = $row1['to_char'];
									$content = $row1['comment'];				
							echo "<li class='list-group-item fill-width'><span class='comment-title fill-width'>By: <strong> $author </strong> at <strong>$comment_date</strong></span> <span class='comment-body'> $content <span></li>";
							}
						?>				    
						<strong> <a class="btn btn-outline-primary borderless" href="<?php echo $logged_in ? "#" : "login.php" ?>" onclick="<?php echo $logged_in ? "showForm()" : " " ?>"> <strong id="new-comment"> Comment </strong> </a> </strong>
							<br>
							<form class="comment-form" id="comment-form"  action="new-comment.php" method="POST">
								<textarea class="fill-width" rows="10" name="comment"></textarea>
								<br>
								<input type="submit">
								<input type="text" name="thread_id" value="<?php echo "$id"?>" style="display:none;">
								<a onclick="hideForm()" class="btn btn-outline-danger borderless hover-white"><strong id="text-red">Cancel</strong></a>
							</form>
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