<?php
require_once('core/init.php');

//echo Config::get('mysql/host');

$patient=DB::getInstance()->get('patient',array('patient_FName','=','Tharindu'));

//we can also insert a q like this :- query('SELECT * FROM patient WHERE patient_FName =?',array('Tharindu'));


if(!$patient->count())
{
	
	echo 'No user';
}
else
{
	echo 'OK!';
	foreach($patient->results() as $user)  //getting results
		{
		echo $user->patient_FName;
		}
}

?>