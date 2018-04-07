<?php
	session_start();

	$badLogin = false;

	require('dbconnect.php');

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	

		$query = 'SELECT account_id, password FROM account WHERE login=:username';


		$stmt = $db->prepare($query);
		$stmt->bindValue(':username', $username);

		$result = $stmt->execute();

		if($result)
		{
			$row = $stmt->fetch();
			$hashedPassword = $row['password'];

		
			if (password_verify($password, $hashedPassword))
			{
				
				$_SESSION['user_id'] = $row['account_id'];
				
				header("Location: forum.php");
				die();
				
			}
			else
			{
				$badLogin = true;
			}	
		}
		else
		{	
			$badLogin = true;
		}		
	}	
?>