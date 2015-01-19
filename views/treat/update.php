<?php
require_once '../../core/init.php';

$pid=$_GET['id'];
$password=$_POST['new_password'];
//echo $password;
$salt=Hash::salt(32);

//'password'=>Hash::make(Input::get('password'),$salt),
				//'salt'=>$salt))
				
				//"UPDATE MyGuests SET lastname='Doe' WHERE id=2";

$password1=Hash::make($password,$salt);

//echo $password1;

				$db=DB::getInstance();
				$db->query("UPDATE patient SET password = '$password1',salt='$salt' WHERE patient_Id = $pid");
				header('Location: profile.php');
			






/*foreach (Session::get('patient') as $pId)
{
	break;
}

print_r($_POST);
$newp=new Patient();
$newp->update($pId,$_POST);*/




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