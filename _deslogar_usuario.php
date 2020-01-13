<?php
	session_destroy();
	setcookie('user', null, -1);
	setcookie('name', null, -1);
	
	header('Location: menu.php');
	
?>
