<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	


    <meta charset="UTF-8">
  
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- fullCalendar -->
    <link href="../../css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../../css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />

	
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
	
	<style>
	.hideextra { white-space: nowrap; overflow: hidden; text-overflow:ellipsis; }
	</style>
	
     <?php
			require_once '../../core/init.php';
			$arr=[];
			require('header.php');
			require('navigation.php');
			$arr=[];
		foreach(Session::get('patient') as $t)
		{
			array_push($arr,"{$t}");;
		}

		$currentPatient=array('patient_Id'=>$arr[0],'active'=>$arr[1],'patient_FName'=>$arr[2],'patient_LName'=>$arr[3],'email'=>$arr[4],'address_No'=>$arr[5],'address_Street' =>$arr[6],'address_City' => $arr[7],'date_Of_Birth' => $arr[8],'mobile_Number' => $arr[9],'gender' =>$arr[10],'date_Of_Registration'=>$arr[11],'password' =>$arr[12]);
		
			
			
			
			
	?>
	<script type="text/javascript" src="../../js/jquery-2.1.3.js"> 
	
	
	</script>
	<script type="text/javascript">
	
		
	$(document).ready(function() {

			
		
					              
				
			  $.ajax({    //create an ajax request to load_page.php
				type: "GET",
				url: <?php echo "\"checklist.php?id=".$currentPatient['patient_Id']."\"" ?>,             
				dataType: "html",   //expect html to be returned  
			
				success: function(response){                    
					$("#list").html(response); 
					//alert(response);
				}
						
				});
		
		});
	
	
	</script>
	
	
	
	
</head>
<body class="skin-blue">

<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Appointments
		
		
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Appointments</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<!--main row-->

    <section class="col-lg-12 connectedSortable" id="list">

    <!--event display-->

	
	
    <div class="box  box-solid">
        

	

	</div>
        <!--/Event display-->
    </section>
<div id='responsecontainer'>
</div>	















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
<script type="text/javascript" src="../../js/jquery-2.1.3.js"> </script>
<!-- jQuery UI 1.10.3 -->
<script src="../../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>

<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

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
<!-- fullCalendar -->
<script src="../../js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>


<!-- AdminLTE App -->
<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../js/AdminLTE/dashboard.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>

</body>
</html>