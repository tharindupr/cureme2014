<?php 
$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);
$d=$_GET['d'];

$query="select time from appoinment where date='".$d."'";
//echo $query;
$result=mysql_query($query,$con);
$data=array();

while($vv=mysql_fetch_row($result))
{
	array_push($data,$vv[0]);
}


$times=["6.00 AM","6.30 AM","7.00 AM","7.30 AM","8.00 AM","8.30 AM","9.00 AM","4.30 PM","5.00 PM","5.30 PM","6.00 PM","6.30 PM","7.00 PM"];
echo"<select class='form-control' id='time' name='time'>";
foreach($times as $a){
	if(in_array("$a", $data))
	{
		echo "<option disabled>$a</option>";
	}
	else
	{
		echo "<option>$a</option>";
	}


}
echo "</select> ";
 


	

											/*			<option>6.30 AM</option>
														<option>7.30 AM</option>
														<option disabled>8.00 AM</option>
														<option>8.30 AM</option>
														<option>4.30 PM</option>
														<option>5.00 PM</option>
														<option>5.30 PM</option>
														<option>6.00 PM</option>
														<option>6.30 PM</option>
														<option>7.00 PM</option>
													</select> ";

													
	print_r($data);*/

?>