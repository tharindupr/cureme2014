<html>
	<head>
		    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	
	</style>
	<script language="javascript">
		function check()
		{
			var pass= document.getElementById("pharamacypassword").value;
			var cpass= document.getElementById("pharamacyconfirmPassword").value;
	
			if(pass!=cpass)
			{
				alert("Passowrd Does not Match");
				cpass.value="";
			}
		}
	</script>
	
	
	</head>
	<body>
		<div class="row">
            <div class="col-lg-4 col-lg-offset-4">
				<br><br>
				<h4>Register as a pharmacy</h4>
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Pharmacy Name</label>
                                <input type="text" class="form-control" placeholder="Pharmacy Name" id="pharmacyName" required data-validation-required-message="Please enter your pharmacy name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Pharmacy Registration Number</label>
                                <input type="text" class="form-control" placeholder="Pharmacy Registration Number" id="name" required data-validation-required-message="Please enter your pharmacy registration number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Pharmacy Owner's Name</label>
                                <input type="text" class="form-control" placeholder="Pharmacy Owner's Name" id="ownerName" required data-validation-required-message="Please enter pharmacy owner's name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>District</label>
								<select name="district" class="form-control" id="pharmacydistrict" required data-validation-required-message="Please select your district.">
									<option disabled>Pharmacy is at</option>
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
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="pharmacyphone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="pharmacyemail" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="pharamacypassword" id="pharamacypassword" required data-validation-required-message="Please enter a password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Confirm password</label>
                                <input type="password" class="form-control" placeholder="Confirm password" name="pharamacyconfirmPassword" id="pharamacyconfirmPassword" onblur='check()' required data-validation-required-message="Please confirm your password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Your Pharmacy Image</label>
								<p font color="#DCDCDC">Select your pharmacy photo</p>
                                <input type="file" class="form-control" id="pharmacyimage" accept="image/x-png, image/gif, image/jpeg" required data-validation-required-message="Please select a photo of your pharmacy.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br><br><br>
						
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
            </div>
		</div>
	</body>
</html>