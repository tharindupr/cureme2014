<html>
<head>
<?php 
require_once('../core/init.php');
if(Input::exists())
	{
	echo 'submitted';
	}
?>
</head>

<body>
<form action="" method="post">
<div>
<div>
<label for="username">Username</label>
<input type="text" name="username" id="username" value="" autocomplete="off">
</div>
<div>
<label for="password">Choose Password</label>
<input type="password" name="password" id="password" value="" autocomplete="off">
</div>
<div>
<label for="password_again">Confirm Password</label>
<input type="password" name="password_again" id="password_again" value="" autocomplete="off">
</div>
<div>
<label for="name">FisrtUsername</label>
<input type="text" name="Firstrname" id="firstrname" value="" autocomplete="off">
</div>

<input type="submit" value="Register">



</div>
</form>

</body>

</html>