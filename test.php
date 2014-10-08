<?php
require_once('core/init.php');

//echo Config::get('mysql/host');

//$patient=DB::getInstance()->get('patient',array('patient_Id','=','100000'));

//we can also insert a q like this :- query('SELECT * FROM patient WHERE patient_FName =?',array('Tharindu'));

$patient=DB::getInstance()->query('SELECT MAX(patient_Id) FROM patient;',array());



//$patient=DB::getInstance()->query('SELECT * FROM key WHERE id < ?',array(1000000000));
$a=(($patient->results()[0]));

foreach ($a as $key => $object) {
    echo intval($object);
}
//echo 'hello';
				


//echo $patient;				

/*$patient=DB::getInstance()->insert('patient',array(
				'patient_Id'=>921477756,		
				'patient_FName'=>'Kalpani',		
				'patient_LName'=>'rasangika',			
				'email'=>'kalpani.prf@gmail.com',				
				'address_No'=>'No 7',			
				'address_Street'=>'Pubudupura',	
				'address_City'=>'Anuradapura',			
				'date_Of_Birth'=>'1992-09-01',	
				'mobile_Number'=>'0710556744',
				'gender'=>'Male',			
				'date_Of_Registration'=>'2014-05-10',
				'password'=>'kalpani123')); */
				
				
/*if(!$patient->count())
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
}*/

?>