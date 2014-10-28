<?php
require_once '../core/init.php';
	
	if(Input::exists()){
		$user=new Patient();
		$login_patient=$user->login(Input::get('username'),Input::get('password'));
		
		$user_ph=new Pharmasist();
		$login_pharmasist=$user_ph->login(Input::get('username'),Input::get('password'));
		
		$user_doc=new Doctor();
		$login_doctor=$user_doc->login(Input::get('username'),Input::get('password'));
		
		if($login_patient){
			
			echo 'Success';
			header('Location: ../views/patient/patient.php');
			
		}
		
		else if($login_pharmasist)
		{
			//echo 'Success as a pharmacy';
			header('Location: ../views/pharmacist/phar_home.php');
		}
		
		else if($login_doctor)
		{
			//echo 'Success as a doctor';
			header('Location: ../views/doctor/doctor.php');
		}
	}
	

	?>