<html>
	<head>
	<?php
	
	require_once '../core/init.php';
	
	//var_dump(Token::check(Input::get('token')));
	$vali="";
	if(Input::exists())
	{	
			
	
		//Input::get('fname'); //this is the way of getting data from a form.fname is the input name.
		$validate=new Validation();
		$validation=$validate->check($_POST, array(
			'patient_FName'=>array(
				'required'=>true,
				'min'=>2,
				'max'=>44),
			'patient_LName'=>array(
				'required'=>true,
				'min'=>2,
				'max'=>44),
			'email'=>array(
				'required'=>true,
				'min'=>2,
				'max'=>1023,
				'unique'=>'patient'),
			'address_No'=>array(
				'required'=>true,
				'max'=>44),
			'address_Street'=>array(
				'required'=>true,
				'max'=>44),
			'address_City'=>array(
				'required'=>true,
				'max'=>44),
			'date_Of_Birth'=>array(
				'required'=>true),
			'mobile_Number'=>array(
				'required'=>true,
				'ismobile'=>true),
			'gender'=>array(
				'required'=>true),
			'password'=>array(
				'required'=>true,
				'min'=>6),
			'confirmPassword'=>array(
				'required'=>true,
				'matches'=>'password')));
		
		
		if($validation->passed()){
			$patient = new Patient(); 
			$salt=Hash::salt(32);
			
			
			
			try{
				$patient->create(array(
				'patient_Id'=>$patient->getkey(), //this will generate a patient id next to previous patient		
				'patient_FName'=>Input::get('patient_FName'),		
				'patient_LName'=>Input::get('patient_LName'),			
				'email'=>Input::get('email'),				
				'address_No'=>Input::get('address_No'),			
				'address_Street'=>Input::get('address_Street'),	
				'address_City'=>Input::get('address_City'),			
				'date_Of_Birth'=>Input::get('date_Of_Birth'),	
				'mobile_Number'=>Input::get('mobile_Number'),
				'gender'=>Input::get('gender'),			
				'date_Of_Registration'=>date("Y-m-d"),
				'password'=>Hash::make(Input::get('password'),$salt),
				'salt'=>$salt)); 
				//mkdir("../img/reports/".$patient->getkey()-1);
				header('Location: index.php#login');
				
				
			}
			catch(Exception $e){
				
				die($e->getMessage());
			}
		} 
		else {
			//print_r($validation->errors());
			
			
			foreach ($validation->errors() as $err)
			{
				$vali.=$err;
			}
			
		}
	}
	
	
	?>
		
		<script language="javascript">
			function check()
			{
				var pass= document.getElementById("password").value;
				var cpass= document.getElementById("confirmPassword").value;
	
				if(pass!=cpass)
				{
					alert("Passowrd Does not Match");
					cpass.value="";
				}
			}
		</script>
	
		    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	
	
	</head>
	<body>
		<div class="row">
                <div class="col-lg-4 col-lg-offset-4">
				<br><br>
			
				<h4>Register as a patient</h4>
				<br>
				<p><font color="red">all fields are required</br></font>
				
					<font color="red"><?php echo $vali ?></font>
				</p>
				<br>
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" method="POST" action="signupPatient.php" id="contactForm">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>First Name</label>
                                <input required type="text" class="form-control" name="patient_FName" placeholder="First Name" id="name" value=<?php echo Input::get('patient_FName') ?> >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Last Name</label>
                                <input required type="text" class="form-control" placeholder="Last Name" name="patient_LName" id="name" value=<?php echo Input::get('patient_LName') ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input required type="email" class="form-control" placeholder="Email Address" name="email"id="email" value=<?php echo Input::get('email') ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address Number</label>
                                <input required type="text" class="form-control" placeholder="Address Number" name="address_No" id="name" value=<?php echo Input::get('address_No') ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address Street</label>
                                <input required type="text" class="form-control" placeholder="Address Street" name="address_Street" id="name" value=<?php echo Input::get('address_Street') ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>District</label>
								<select required class="form-control" id="address_City" name="address_City" value=<?php echo Input::get('address_City') ?>>
									<option selected value=''>I am from</option>
									<option>Ampara</option>
									<option>Anuradhapura</option>
									<option>Badulla</option>
									<option>Batticaloa</option>
									<option>Colombo</option>
									<option>Galle</option>
									<option>Gampaha</option>
									<option>Hambantota</option>
									<option>Jaffna</option>
									<option>Kalutara</option>
									<option>Kandy</option>
									<option>Kegalla</option>
									<option>Kilinochchi</option>
									<option>Kurunegala</option>
									<option>Mannar</option>
									<option>Matale</option>
									<option>Matara</option>
									<option>Moneragala</option>
									<option>Mullaitivu</option>
									<option>Nuwara Eliya</option>
									<option>Polonnaruwa</option>
									<option>Puttalam</option>
									<option>Ratnapura</option>
									<option>Trincomalee</option>
									<option>Vavuniya</option>
								</select>
								<p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Date of birth</label>
								<p>Date of birth</p>
                                <input type="date" class="form-control" id="date_Of_Birth" name="date_Of_Birth" value=<?php echo Input::get('date_Of_Birth') ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="mobile_Number" id="phone" value=<?php echo Input::get('mobile_Number') ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Gender</label>
								<select required name="gender" class="form-control" id="gender" value=<?phpInput::get('gender') ?>>
									<option selected value=''>I am</option>
									<option>Male</option>
									<option>Female</option>
								</select>
								<p class="help-block text-danger"></p>
                            </div>
                        </div>
						
                        
						
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input required type="password" class="form-control" placeholder="Password" name="password" id="password" value=<?php echo Input::get('password') ?>>  <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirm password</label>
                                <input required type="password" class="form-control" placeholder="Confirm password" name="confirmPassword" id="confirmPassword" onblur='check()' value=<?php echo Input::get('confirmPassword') ?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
					
						
                            <!--<div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Your Image</label>
								<p font color="#DCDCDC">Select your photo</p>
                                <input type="file" class="form-control" id="image" name="profile "accept="image/x-png, image/gif, image/jpeg">
                                <p class="help-block text-danger">
								
								</p>
                            </div>-->
                        </div>
                        <br>
                        
						<div>
                            <div class="form-group col-xs-12">
								
                                <input type="submit" name="add" value="Send"  class="btn btn-success btn-lg">
                            </div>
							<?php
								//echo $mess."<br><br>";
							?>
                        </div>
						
						<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
						
                    </div>
                    </form>
                </div>
				
				
	
	</body>
</html>