<?php
	session_start(); 
	require('dbconnect.php');

	$user_id = $_SESSION['user_id'];
	$thread_id = $_POST['thread_id'];
	$comment = htmlspecialchars($_POST['comment']);

	$stmt = $db->prepare("INSERT INTO comment VALUES(DEFAULT, :author_id, :thread_id, :comment, CURRENT_TIMESTAMP)");
	$stmt->bindValue(':author_id', $user_id);
	$stmt->bindValue(':thread_id', $thread_id);
	$stmt->bindValue(':comment', $comment);
	$stmt->execute();

	header("Location: view-thread.php?id=$thread_id");
	die();

 ?> 