<?php

$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);

$query="delete  from appoinment where appoinment_Id=".$_GET['id'];


$result=mysql_query($query,$con);

$query1="INSERT INTO `cureme`.`notification` (`notitification_ID`, `content`,`patient_Id`) VALUES (NULL, 'Your Appoinment Was Rejected',".$_GET['pid'].")";

$result1=mysql_query($query1,$con);



?>