<?php
require_once '../../core/init.php';
foreach (Session::get('doctor') as $did)
{
	break;
}

$newp=DB::getInstance();
//$newp=new Doctor();
$newp->updateDoctor($did,$_POST);
print_r($_POST);
header('Location: profile.php');



/*$a->create(array(
				'patient_Id'=>$a->getkey(), //this will generate a patient id next to previous patient		
				'patient_FName'=>'Raveen',		
				'patient_LName'=>'Perera',			
				'email'=>'perera@gmail.com',				
				'address_No'=>'sadsa',			
				'address_Street'=>'sadasdasd',	
				'address_City'=>'sadasdsad',			
				'date_Of_Birth'=>date("Y-m-d"),	
				'mobile_Number'=>'0710554644',
				'gender'=>'Male',			
				'date_Of_Registration'=>date("Y-m-d"),
				'password'=>'1234567',
				'salt'=>'sadasdasdasdasdasd')); */


?>