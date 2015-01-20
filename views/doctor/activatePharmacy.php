<?php 
require_once '../../core/init.php';
$arr=[];
echo "array <br/>";
print_r($_POST);


$pharmacy_Id=$_POST['pharmacy_Id'];

$_db=DB::getInstance();

$sql= "UPDATE pharmasist SET active = 1 WHERE pharmacy_Id=$pharmacy_Id";

$_db->query($sql);
				
header('Location: comfirmPharmacy.php');

?>