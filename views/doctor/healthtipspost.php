<?php 
require_once '../../core/init.php';
$arr=[];

$tip=$_POST['tiptitle'];
$body=$_POST['tipbody'];
$date=date("Y/m/d");
$time=date("h:i:sa");




$healthtips=new HealthTips();
$healthtips->create(array('tip_Id'=>$healthtips->getkey(),'tip_Type'=>$tip,'tip_Content'=>$body,'tip_Date'=>$date, 'tip_Time'=>$time));
				
				
$db=DB::getInstance();
$query1="INSERT INTO `cureme`.`notification` (`notitification_ID`, `content`) VALUES (NULL, 'You got a new Health Tip')";
$db->query($query1);				
				

header('Location: healthtips.php');



?>