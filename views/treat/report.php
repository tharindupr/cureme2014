<!DOCTYPE html>
<html>
<head>
<?php
require_once 'header.php';
require_once 'navigation.php';

?>

    <meta charset="UTF-8">
    <title>CureMe| Dashboard</title>
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
<body class="skin-blue">

<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Report Submission

        </h1>
        <ol class="breadcrumb">
            <li><a href="../doctor/select_patient.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Submitted Report</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
   <div class="row">
            <!-- left column -->

    <!-- general form elements -->
	
   
	<div class='col-sm-4'>
	<?php  
	require_once('../../core/init.php');
	$arr=[];
	foreach(Session::get('patient') as $t)
	{
		array_push($arr,"{$t}");;
	}

	$currentPatient=array('patient_Id'=>$arr[0],'active'=>$arr[1],'patient_FName'=>$arr[2],'patient_LName'=>$arr[3],'email'=>$arr[4],'address_No'=>$arr[5],'address_Street' =>$arr[6],'address_City' => $arr[7],'date_Of_Birth' => $arr[8],'mobile_Number' => $arr[9],'gender' =>$arr[10],'date_Of_Registration'=>$arr[11],'password' =>$arr[12]);
	
	
	
	
	$db=DB::getInstance();

	$db->query("SELECT * FROM report WHERE Patient_patient_Id=".$currentPatient['patient_Id']." order by report_Id desc limit 10");
	
	//print_r($db->results());
	
	
	foreach ($db->results() as $report)
	{
	
		$rp = array();
		foreach ($report as $key => $value) {
		$rp[$key]=	$value;			
		}
		//print_r($rp);
		
		$reportType=$rp['report_Type'];
		$dateTime=$rp['created_Date'];
		$description=$rp['description'];
		$img=$rp['fileName'];
		
		
		
		//echo $reportType;
	
	
	echo"
		<a href='../../img/reports/ ".$currentPatient['patient_Id']."/".$img."' >
		<div class='box box-primary' style='height:550px; width:250px;'>
		<div class='box-header' data-toggle='tooltip' title='' data-original-title='Header tooltip'>
                <h5 class='box-title'>".$reportType."</h5>

            </div>
            <div class='box-body'>

                <img src='../../img/reports/ ".$currentPatient['patient_Id']."/".$img."' class='img-rounded' alt='User Image'>

                <p>
                    Submitted Date:</br>".$dateTime."</br>
					</br>
                    Description :</br>". $description."
                   
					
                </p>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
		
        </a>
		</div>
		
		<div class='col-sm-4'>
        "; 
	}
     ?>  
    </div><!-- /.box -->
    


    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-2 connectedSortable">






    </section><!-- /.content -->





    <!-- /.content -->
<!-- add new calendar event modal -->


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