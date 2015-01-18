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

$db=DB::getInstance();
$query1="INSERT INTO `cureme`.`notification` (`notitification_ID`, `content`,`patient_Id`) VALUES (NULL, 'New appointment added',100)";
$db->query($query1);


header('Location: appoinment.php');

?>