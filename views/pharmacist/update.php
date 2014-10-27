<?php
require_once '../../core/init.php';

print_r($_POST);
$newp=new Pharmasist();
$newp->update('1000012',$_POST);
header('Location: phar_home.php');


?>