<?php 
require_once '../../core/init.php';
$arr=[];

$subject=$_POST['messageTitel'];
$body=$_POST['messageBody'];
$patient_Id=$_GET['id'];
$date=date("Y/m/d");
$time=date("h:i:sa");




//$healthtips=new HealthTips();
//$healthtips->create(array('tip_Id'=>$healthtips->getkey(),'patient_Id'=>$patient_Id,'message_Type'=>$tip,'message_Content'=>$body,'date'=>$date, 'time'=>$time));
				
				
$db=DB::getInstance();
$query1="INSERT INTO `cureme`.`message` (`patient_Id`, `message_Subject`, `message_Containt`, `date`, `time`) VALUES ('$patient_Id', '$subject', '$body', '$date','$time' )";
$db->query($query1);				
				

header('Location: profile.php?id='.$_GET['id']);


//"INSERT INTO `cureme`.`message` (`patient_Id`, `message_Subject`, `message_Containt`, `date`, `time`) VALUES ('$patient_Id', '$subject', '$body', '$date','$time' );"
?>