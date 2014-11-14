<?php 
require_once '../../core/init.php';
$arr=[];

$tip=$_POST['tiptitle'];
$body=$_POST['tipbody'];
$datetime=date('Y-m-d H:i:s');

//$sql = "INSERT INTO healthtip (tip_Id, tip_Type, tip_Content, tip_Date&Time)VALUES ('', '$tip', '$body', '$datetime')";
//mysql_query($sql);


$healthtips=new HealthTips();
$healthtips->create(array('tip_Id'=>$healthtips->getkey(),'tip_Type'=>$tip,'tip_Content'=>$body,'tip_Date&Time'=>$datetime));
				
				
				
				

header('Location: healthtips.php');



?>