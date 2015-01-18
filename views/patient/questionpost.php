<?php 
require_once '../../core/init.php';
$arr=[];





foreach(Session::get('patient') as $t)
{
	array_push($arr,"{$t}");;
}
$currentPatient=array('patient_Id'=>$arr[0],'active'=>$arr[1],'patient_FName'=>$arr[2],'patient_LName'=>$arr[3],'email'=>$arr[4],'address_No'=>$arr[5],'address_Street' =>$arr[6],'address_City' => $arr[7],'date_Of_Birth' => $arr[8],'mobile_Number' => $arr[9],'gender' =>$arr[10],'date_Of_Registration'=>$arr[11],'password' =>$arr[12]);
$date = date('Y-m-d H:i:s');
$question=new Question();
$question->create(array('question_Content'=>$_POST['question'],'question_Date&Time'=>$date,'Patient_patient_Id'=>$currentPatient['patient_Id'],'subject'=>$_POST['subject']));

header('Location: conversations.php');

?>