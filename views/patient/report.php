<!DOCTYPE html>
<html>
<head>
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
		<script type="text/javascript" src="../../js/jquery-2.1.3.js"> 
	
	
	</script>
	
	
	<?php 
	require_once '../../core/init.php';
	$updated=0;
	//this method is used to update patient
	
	
	
	//getting the values from the created session
	if($updated==0)
	{
	$arr=[];
	foreach(Session::get('patient') as $t)
	{
		array_push($arr,"{$t}");;
	}

	$currentPatient=array('patient_Id'=>$arr[0],'active'=>$arr[1],'patient_FName'=>$arr[2],'patient_LName'=>$arr[3],'email'=>$arr[4],'address_No'=>$arr[5],'address_Street' =>$arr[6],'address_City' => $arr[7],'date_Of_Birth' => $arr[8],'mobile_Number' => $arr[9],'gender' =>$arr[10],'date_Of_Registration'=>$arr[11],'password' =>$arr[12]);
	}
	
	//print_r($arr);
	//print_r($currentPatient);
	
	
	if(Input::exists())
	{	
		echo "Success";
	}
	require_once("header.php");
	require_once("navigation.php");
	
   
		
?>
?>
?>
</head>
<body class="skin-blue">

<aside class="right-side col-lg-12">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Report Submission

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Report Submission</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
    <!-- general form elements -->
    <div class="box box-primary">

        <!-- form start -->
        <form role="form" action="upload.php" name="user" method="POST" enctype="multipart/form-data" >
            <div class="box-body">
                <div class="form-group">
                    <label for="ReportType">Report type</label>
                    <!--drop box-->
					&nbsp&nbsp&nbsp
                    <th><select id="reporttype" required >
                    <option >Full Blood Count</option>
                    <option >Haemoglobin Count</option>
                    <option >Platelets Count </option>
					<option >Urine Count </option>
					<option >Audiometry Report </option>
					<option >Auscultation Report </option>
					<option >Coloscopy Report </option>
					<option >Other </option>
					
                    </select></th>


                </div>
               
                <!--text area-->
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" id='description' placeholder="Enter ..." required></textarea>
                </div>
                <!-- text area-->
                <div class="form-group">
                    <label for="exampleInputFile">Add report</label>
                    <input type="file" id="exampleInputFile"  type='file' name='myfile' accept='image/gif, image/jpeg,image/x-png' required>

                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type='submit' class="btn btn-primary" id='upload' >Submit</button>
            </div>
			
			
			<label id='response' class='danger'>
			</label>
			
			
        </form>
    </div><!-- /.box -->
    </div>


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