<?php
	require_once('../../core/init.php');
	
	$user=new Patient();
	$user->logout();
	
	header('Location: ../../index/index.php');
?>
