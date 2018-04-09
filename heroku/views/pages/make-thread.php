<?php
	session_start(); 
	require('dbconnect.php');

	$user_id = $_SESSION['user_id'];
	$title = htmlspecialchars($_POST['title']);
	$content = htmlspecialchars($_POST['content']);

	$stmt = $db->prepare("INSERT INTO thread VALUES(DEFAULT, :title, :author_id, :content, CURRENT_TIMESTAMP)");
	$stmt->bindValue(':title', $title);
	$stmt->bindValue(':author_id', $user_id);
	$stmt->bindValue(':content', $content);
	$stmt->execute();

	header("Location: forum.php");
	die();

 ?> 