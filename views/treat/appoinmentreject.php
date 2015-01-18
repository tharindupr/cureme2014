<?php

$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);

$query="delete  from appoinment where appoinment_Id=".$_GET['id'];


$result=mysql_query($query,$con);




?>