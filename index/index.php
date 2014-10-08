<!DOCTYPE html>
<html lang="en">

<head>
	<?php
require_once '../core/init.php';
	
	//var_dump(Token::check(Input::get('token')));
	
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
				
				
			}
			catch(Exception $e){
				
				die($e->getMessage());
			}
		} 
		else {
			print_r($validation->errors());
		}
	}
	
	

	?>
	
	<script>
		var flag=0;
		function p_clicked()
		{
			flag=1;
			//alert(flag);
		}
		
		function ph_clicked()
		{
			flag=2;
			//alert(flag);
		}
	
		function showdata()
		{
			

			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					if(flag==1)
					{
						document.getElementById("loadData").innerHTML=xmlhttp.responseText;
						//xmlhttp.open("GET","signupPatient.html",true);
					}
					if(flag==2)
					{
						document.getElementById("loadData").innerHTML=xmlhttp.responseText;
						//xmlhttp.open("GET","signupPharmacist.html",true);
					}

				}
			}
			if(flag==1)
			{
			xmlhttp.open("GET","signupPatient.php",true);
			xmlhttp.send();
			}
			
			if(flag==2)
			{
			xmlhttp.open("GET","signupPharmacist.php",true);
			xmlhttp.send();
			}
			
			//xmlhttp.open("GET","signupPharmacist.html",true);
			

		}

</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cure Me</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

	

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div><a class="navbar-brand" href="#page-top">Cure Me</a></div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#login">Log In</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#signup">Sign Up</a>
                    </li>
					<li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<form method="post" action="test.php" >
						<input type="submit" value="Login">
	</form>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="./img/background.png" alt="">
                    <div class="intro-text">
                        <!--<span class="name">Get connected to keep the body in good health.</span>
                        <hr class="star-light">-->
                        <span class="skills">Get connected to keep your body in good health.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
    <!-- Log In Section -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Log In</h2><hr>
                    <!--<hr class="star-primary">
                </div>
            </div>
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				

					</br>
					<a name="login">
                    <form action="test.php" name="sentMessage" method="POST" id="contactForm" >
					
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Username</label>
                                <input type="email" class="form-control" placeholder="Email address" name="txtUser" id="emailAd" required data-validation-required-message="Please enter the username.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="txtPassword" id="password" required data-validation-required-message="Please enter the password.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br><br><br><br>
						
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="Submit" name="submit" value="Login">
							
                            </div>
                        </div>
                    </form>
					</a>
                </div>
            </div>
        </div>
    </section>
	
	

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2><hr>
                    <!--<hr class="star-light">-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Cure Me is a new experience for doctors, patients and pharmacists. Cure Me is a web base system for patients to keep in touch with their doctor. You can download the mobile application to get the services even while travelling. Cure me is easy to use and will save a lot of time.</p>
                </div>
                <div class="col-lg-4">
                    <p>Using Cure Me, you can make appointments, get medicines for minor diseases, get medical advises ,health tips, submit reports and much more. Doctor keeps a track of each patient's disease history since registration. You simply have to make the registration fee and get registered to get the facilities.</p>
                </div>
                <!--<div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>-->
            </div>
        </div>
    </section>

    <!-- Sign Up Section -->
    <section id="signup">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sign Up</h2><hr>
                    <!--<hr class="star-primary">-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-13">
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="button" class="btn btn-success btn-lg" id="patientSignUp" onclick='p_clicked(); showdata(); '>Register as a patient</button>
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-lg-4 col-lg-offset-2">
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="button" class="btn btn-success btn-lg" id="pharmacySignUp" onclick='ph_clicked(); showdata()'>Register as a pharmacist</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
		<div id="loadData">
		</div>
    </section>

    <!-- Contact Section -->
    <footer id="contact" class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
					<div class="col-lg-12 text-center">
                    <h2>Contact</h2>
                    <!--<hr class="star-light">-->
					</div>
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>City Clinic<br>Nuwara Eliya<br>Sri Lanka</p>
                    </div>
                    <div class="footer-col col-md-4">
						<br><br>
						<img src="./img/logo.jpg">
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Doctor</h3>
                        <p>Dr. Aruna Sampath Yatigammana<br>MBBS Sri Lanka</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Cure Me 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
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
