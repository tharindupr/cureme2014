<?php
require_once('../../core/init.php');





//properties of the uploaded file
$name=$_FILES["myfile"]["name"];

$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$temp=$_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];
//echo $name;
//echo $type;
//echo $size;
//echo $temp;
//echo $error;

echo $_POST['description'];

echo $_POST['patiend_Id'];

$db=DB::getInstance();

$db->query("SELECT MAX(report_Id) FROM report");


foreach ($db->results()[0] as $maxkey){}

echo $maxkey;


//$db->query("INSERT INTO cureme.`report` (`report_Id` ,`report_Type` ,`Date&Time` ,`Patient_patient_Id` ,`description`) VALUES (NULL ,  {$_POST['reporttype']},".date('Y-m-d h:i:sa').",  '{$_POST['patiend_Id']}',  {$_POST['description']})") ;

$db->query("INSERT INTO `cureme`.`report` (`report_Id`, `report_Type`, `Date&Time`, `Patient_patient_Id`, `description`,`fileName`) VALUES (NULL,'".$_POST['reporttype']."', '".date('Y-m-d h:i:sa')."','".$_POST['patiend_Id']."','".$_POST['description']."','".$maxkey.".jpeg')");

//$a=$db->results();







$path = "../../img/reports/{$_POST['patiend_Id']}/";

if ( ! is_dir($path)) {
    mkdir($path);
}



if($error>0)
{
	die("Error uploading file! Code $error.");
}
else
{
move_uploaded_file($temp,"../../img/reports/{$_POST['patiend_Id']}/';".$name);
rename("../../img/reports/{$_POST['patiend_Id']}/';".$name, "../../img/reports/{$_POST['patiend_Id']}/".$maxkey.".jpeg");
echo "Upload Complete!";
	
}


header('Location: report.php?report=ok');

?>