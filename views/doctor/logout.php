<?php
	require_once('../../core/init.php');
	
	$user=new Doctor();
	$user->logout();
	
	header('Location: ../../index/index.php');
?>
