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
<<<<<<< HEAD
=======

<?php
require_once '../../core/init.php';
$arr=[];

?>

>>>>>>> remotes/origin/sanda
<body class="skin-blue">

<div class="wrapper row-offcanvas row-offcanvas-left">

<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pharmacies

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Pharmacies
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<!--main row-->


<section class="col-lg-12">

<!--Add Appoinment box-->
<!-- general form elements disabled -->
<div class="box box-primary">
<div class="box">
<div class="box-header">
    <h3 class="box-title">Pharamcies List</h3>
<<<<<<< HEAD
=======
	
				<?php 
			  
					$db=DB::getInstance();
					$db->query('SELECT * FROM pharmasist');
					$a=$db->results();
					//print_r($a);
					?>
	
	
>>>>>>> remotes/origin/sanda
</div><!-- /.box-header -->
<div class="box-body table-responsive">

<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<<<<<<< HEAD
    <th>Pharmacy ID</th>
    <th>Pharmacy Name</th>
    <th>Address</th>
=======
    <th>Pharmacy Reg No</th>
	<th>Owner Name</th>
    <th>Pharmacy Name</th>
    <th>Address</th>
	<th>Contact No</th>
>>>>>>> remotes/origin/sanda
    <th>Registered Date</th>
    <th>Edit</th>
</tr>
</thead>
<tbody>

<<<<<<< HEAD
<tr>
    <td>PH011</td>
    <td>City Clinic</td>
    <td>Nuwara Eliya</td>
    <td>2014-06-08</td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td>PH012</td>
    <td>New Pahramacy</td>
    <td>Anuradhapura</td>
    <td>2014-06-08</td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td>PH013</td>
    <td>Osusala</td>
    <td>Colombo</td>
    <td>2014-06-08</td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td>PH014</td>
    <td>City Clinic</td>
    <td>Nuwara Eliya</td>
    <td>2014-06-08</td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td>PH015</td>
    <td>City Clinic</td>
    <td>Nuwara Eliya</td>
    <td>2014-06-08</td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td>PH016</td>
    <td>City Clinic</td>
    <td>Nuwara Eliya</td>
    <td>2014-06-08</td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button class="btn btn-primary btn-flat">Remove</button></td>
</tr>

</tbody>
<tfoot>
<tr>
    <th>Pharmacy ID</th>
    <th>Pharmacy Name</th>
    <th>Address</th>
    <th>Registered Date</th>
    <th>Edit</th>
</tr>
</tfoot>
=======
<?php
	$arraylen=sizeof($a);
	//echo $arraylen;
	foreach ($a as $ab){
	echo
"<tr>
    <td>".$ab->registration_Number."</td>
	<td>".$ab->owner."</td>
    <td>".$ab->pharmacy_Name."</td>
    <td>".$ab->address_No.", ".$ab->address_No.", ".$ab->address_Street.", ".$ab->address_City."</td>
	<td>".$ab->contact_Number."</td>
    <td>".$ab->date_Of_Registration."</td>
    <td><button class='btn btn-primary btn-flat'>Remove</button></td>
</tr>";
}

?>



</tbody>

>>>>>>> remotes/origin/sanda
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->
    </div>
</div><!-- /.box -->









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
<!-- Bootstrap -->
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

</body>
</html>