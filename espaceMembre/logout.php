<?php

	session_start();
	unset($_SESSION['auth']);
	$_SESSION ['flash']['success'] = "vous êtes maintenant deconnecter" ;
	header('location:login.php');

?>