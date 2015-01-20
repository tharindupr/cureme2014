<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cure Me|Administrator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../../css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="../../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="../../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<?php
require_once '../../core/init.php';
require('header.php');
require('navigation.php');
$arr=[];

?>

<body class="skin-blue">

<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pending aproved Pharmacys

    </h1>
    <ol class="breadcrumb">
        <li><a href="doctor.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pending pharmacy</li>
    </ol>
</section>

<?php 
			  
				$db=DB::getInstance();
				$db->query('SELECT * FROM pharmasist WHERE active=0');
				$a=$db->results();
				//print_r($a);
				?>

<!-- Main content -->
<section class="content">

<!--main row-->


<section class="col-lg-12">

    
 
    <div class="col-sm-2">
        


        <!-- Primary box -->
		
		<!--<div class='box box-primary'>-->
		<?php
			
			foreach ($a as $ab){
			echo
		
        "
		
		<div class='box box-primary' style='height:320px; width:150px;'>
		<div class='box-header' data-toggle='tooltip' title='' data-original-title='Header tooltip'>
                <h5 class='box-title'>".$ab->pharmacy_Name."</h5>

            </div>
            <div class='box-body'>
                <div style='height:200px; width:150px;'>
                <p>
                    Name    : ".$ab->pharmacy_Name."</br>
                    Reg. no : ".$ab->registration_Number."</br>
                    Location: ".$ab->address_City."</br>
					Email   : ".$ab->email."
                </p>
                </div>
                <div class='box-footer box'>
                <center>
                <form action='activatePharmacy.php' method='post'>
                <input type='txt' name='pharmacy_Id' value=\"$ab->pharmacy_Id\" hidden=''>
                <button type='submit' class='btn-md button btn-success' name='active'>active</button>
                </form>
                </center>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        
		</div>
		<div class='col-sm-2'>
        ";
	}
	
	?>
	
    
   
</section>

<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">

</section><!-- right col -->


<!-- Left col -->

<section class="col-lg-7 connectedSortable">

</section>









<!-- Main row -->


</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->







<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="../../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../js/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="../../js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="../../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="../../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="../../js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="../../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="../../js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="../../js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../js/AdminLTE/dashboard.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>

</body>
</html>