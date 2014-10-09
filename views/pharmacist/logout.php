<?php
	require_once('../../core/init.php');
	
	$user=new Pharmasist();
	$user->logout();
	
	header('Location: ../../index/index.php');
?>
