<html>
	<head>
		<?php
		
			$mess="";
			if(isset($_POST["add"])&&($_POST["add"]=="Send"))
			{
				$mess="Hello World";
				require_once('../conn/conn.php');

				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['email'];
				$adno = $_POST['adNo'];
				$adstreet = $_POST['adstreet'];
				$district = $_POST['district'];
				$dob = $_POST['dob'];
				$mobileNo = $_POST['mobileNo'];
				$gender = $_POST['gender'];
				$password = $_POST['txtPassword'];
				
				echo $fname;

				$query ="INSERT INTO patient(patient_FName,patient_LName,email,address_No,address_Street,address_City,date_Of_Birth,mobile_Number,gender,password)VALUES('$fname','$lname','$email','$adno','$adstreet','$district','$dob','$mobileNo','$gender','$password')";
			  
				$result = mysql_query($query ) or die(mysql_error());

				if($result>0)
				{

					$mess = "Successfully Saved";
				}
				else
				{
					$mess = "Not Saved";
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
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" method="POST" action="" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name" id="name" required data-validation-required-message="Please enter your first name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="lname" id="name" required data-validation-required-message="Please enter your last name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email"id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address Number</label>
                                <input type="text" class="form-control" placeholder="Address Number" name="adNo" id="name" required data-validation-required-message="Please enter your Address Number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address Street</label>
                                <input type="text" class="form-control" placeholder="Address Street" name="adstreet" id="name" required data-validation-required-message="Please enter your Address Street.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>District</label>
								<select name="district" class="form-control" id="district" required data-validation-required-message="Please select your district.">
									<option disabled>I am from</option>
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
                                <input type="date" class="form-control" id="dob" name="dob" required data-validation-required-message="Please select your date of birth.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="mobileNo" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Gender</label>
								<select name="gender" class="form-control" id="gender" required data-validation-required-message="Please select your gender.">
									<option disabled>I am</option>
									<option>Male</option>
									<option>Female</option>
								</select>
								<p class="help-block text-danger"></p>
                            </div>
                        </div>
						
                        
						
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required data-validation-required-message="Please enter a password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirm password</label>
                                <input type="password" class="form-control" placeholder="Confirm password" name="confirmPassword" id="confirmPassword" onblur='check()' required data-validation-required-message="Please confirm your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Your Image</label>
								<p font color="#DCDCDC">Select your photo</p>
                                <input type="file" class="form-control" id="image" accept="image/x-png, image/gif, image/jpeg" required data-validation-required-message="Please select a recent photo of yours.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="submit" name="add" value="Send"  class="btn btn-success btn-lg">
                            </div>
							<?php
								echo $mess."<br><br>";
							?>
                        </div>
						
                    </div>
                    </form>
                </div>
				
				
	  <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
	</body>
</html>