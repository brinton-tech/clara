<?php
	session_start();
	unset($_SESSION['cart']);
	$_SESSION['message'] = 'Cart cleared successfully';
	header('location: view_cart.php');
?>