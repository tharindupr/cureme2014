<?php 
require_once '../../core/init.php';
$arr=[];
foreach(Session::get('patient') as $pid)
	{
		break;
	}
//echo $_POST['time'];
$a=new Appoinment();

$a->create($a->getkey(),$_POST['date'],$_POST['time'],$_POST['title'],$_POST['description'],$pid);

//echo $_POST['date'];

header('Location: appoinment.php');

?>