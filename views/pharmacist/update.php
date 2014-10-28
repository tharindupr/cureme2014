<?php
require_once '../../core/init.php';

foreach (Session::get('pharmasist') as $pId)
{
	break;
}

print_r($_POST);
$newd=new Doctor();
$newd->update($pId,$_POST);
header('Location: phar_home.php');


?>