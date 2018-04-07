<?php
	session_start();
	$order = array("first_name" => '', "last_name" => '', "address_1" => '', "address_2" => '');



	$_SESSION['order']["first_name"] = $order["first_name"];
	$_SESSION['order']["last_name"] = $order["last_name"];
	$_SESSION['order']['address_1'] = $order['address_1'];
	$_SESSION['order']['address_2'] = $order["address_2"];

?>
