<?php
//properties of the uploaded file
$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$temp=$_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];
//echo $name;
//echo $type;
//echo $size;
//echo $temp;
//echo $error;

if($error>0)
{
	die("Error uploading file! Code $error.");
}
else
{
move_uploaded_file($temp,"../../img/reports/".$name);
echo "Upload Complete!";
	
}

?>