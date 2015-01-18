<?php 
require_once '../../core/init.php';

$presid=$_GET['id'];



$db=DB::getInstance();
$db->query('UPDATE Prescriptions SET issued = 1 WHERE prescription_Id = '.$presid.'');










header('Location: prescriptions.php');



?>