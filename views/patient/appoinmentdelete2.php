<?php 
$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);
if(count($_POST)==0){header('Location: appoinment.php#edit-appoinment');}



else
{


foreach($_POST as $vals)
{
	$query="delete  from appoinment where Patient_patient_Id=".$_GET['id']." and appoinment_Id=".$vals;
	$result=mysql_query($query,$con);
}


header('Location: appoinment.php#edit-appoinment');


}

?>