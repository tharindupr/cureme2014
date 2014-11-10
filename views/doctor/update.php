<?php
require_once '../../core/init.php';

foreach (Session::get('doctor') as $dId)
{
	break;
}

print_r($_POST);
$newp=new Doctor();
$newp->update($dId,$_POST);
header('Location: doctor.php');


?>