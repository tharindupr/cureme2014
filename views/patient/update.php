<?php
require_once '../../core/init.php';
foreach (Session::get('patient') as $pId)
{
	break;
}


$newp=new Patient();
$newp->update($pId,$_POST);   //geting the post variable and passing to a new patient object
  

$name=$_FILES["myfile"]["name"];

$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$temp=$_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];

if($error>0)
{
	die("Error uploading file! Code $error.");
}
else
{
move_uploaded_file($temp,"../../img/;".$name);
rename("../../img/;".$name, "../../img/".$pId.".jpeg");
echo "Upload Complete!";
	
}

header('Location: profile.php'); //heading to the profile



?>