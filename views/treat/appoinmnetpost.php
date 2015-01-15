<?php 
require_once '../../core/init.php';
$arr=[];
foreach(Session::get('patient') as $pid)
	{
		break;
	}
$a=new Appoinment();
$a->create($_POST['date'],$_POST['time'],$_POST['title'],$_POST['description'],$pid);

echo $_POST['date'];

header('Location: patient.php');

?>