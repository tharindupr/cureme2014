<?php
require_once '../core/init.php';
	
	if(Input::exists()){
	
		Session::delete('logError');
		Session::delete('paymentError');
	
		$user=new Patient();
		$login_patient=$user->login(Input::get('username'),Input::get('password'));
		
		$user_ph=new Pharmasist();
		$login_pharmasist=$user_ph->login(Input::get('username'),Input::get('password'));
		
		$user_doc=new Doctor();
		$login_doctor=$user_doc->login(Input::get('username'),Input::get('password'));
		
		if($login_patient==3){
			
			echo 'Success';
			header('Location: ../views/patient/profile.php');
			
		}
		
		else if($login_pharmasist==3)
		{
			//echo 'Success as a pharmacy';
			header('Location: ../views/pharmacist/prescriptions.php');
		}
		
		else if($login_doctor==3)
		{
			//echo 'Success as a doctor';
			header('Location: ../views/doctor/select_patient.php');
		}
		else if($login_patient==2)
		{
			session_start();

			$_SESSION['paymentError'] = 'Please complete the payment before you login';
			
			header('Location: index.php#login');
		}
		else if($login_pharmasist==2)
		{
			session_start();

			$_SESSION['paymentError'] = 'Please complete the payment before you login';
			
			header('Location: index.php#login');
		}
		else{
			session_start();

			$_SESSION['logError'] = 'UserName or Password is incorrect';
			
			header('Location: index.php#login');
		}
	}
	

	?>