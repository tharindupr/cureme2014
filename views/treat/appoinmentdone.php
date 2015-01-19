<?php

$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);

$query="UPDATE appoinment SET confirmation_Flag=1 WHERE appoinment_Id=".$_GET['id'];


$result=mysql_query($query,$con);


?>