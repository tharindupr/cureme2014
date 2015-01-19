<?php 
require_once '../../core/init.php';
$arr=[];
echo "array <br/>";
print_r($_POST);


$pid=$_POST['patient_Id'];

$_db=DB::getInstance();

$sql= "UPDATE patient SET active = 1 WHERE patient_Id=$pid";

$_db->query($sql);
				
header('Location: comfirmPatient.php');

?>