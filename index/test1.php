<html>
<head>
</head>
<body>
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
                                <input type="Submit" name="submit" class="btn btn-success btn-lg" value="Login">
							
                            </div>
                        </div>
                    </form>
</form>

</body>