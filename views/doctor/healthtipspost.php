<?php 
require_once '../../core/init.php';
$arr=[];

$tip=$_POST['tiptitle'];
$body=$_POST['tipbody'];
$date=date("Y/m/d");
$time=date("h:i:sa");




$healthtips=new HealthTips();
$healthtips->create(array('tip_Id'=>$healthtips->getkey(),'tip_Type'=>$tip,'tip_Content'=>$body,'tip_Date'=>$date, 'tip_Time'=>$time));
				
				
				
				

header('Location: doctor.php');



?>