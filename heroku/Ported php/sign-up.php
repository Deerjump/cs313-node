<?php

	require('dbconnect.php');

	session_start();


	$username = $_POST['new_username'];
	$display_name = htmlspecialchars($_POST['new_display']);
	$password = $_POST['new_password'];
	
	$hash = password_hash($password, PASSWORD_DEFAULT);


	$stmt = $db->prepare("INSERT INTO account VALUES (DEFAULT, :display_name, :username, :password, CURRENT_TIMESTAMP)");
	$stmt->bindValue(':display_name', $display_name);
	$stmt->bindValue('username', $username);
	$stmt->bindValue(':password', $hash);
	$stmt->execute();

	header("Location: login.php");
	die();
?>