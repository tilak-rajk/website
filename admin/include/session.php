<?php
	session_start();
	if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
		echo 'set';  
	}
	else{
		echo 'unset';
		//header('Location: ../sign-in.html');
	}
?>