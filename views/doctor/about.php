<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Dashboard</title>
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

<?php 
	require_once '../../core/init.php';
	
	
	//getting the values from the created session
	$arr=[];
	foreach(Session::get('doctor') as $t)
	{
		array_push($arr,"{$t}");;
	}

	$currentDoctor=array('doctor_Id'=>$arr[0],'doc_Reg_Id'=>$arr[1],'doctor_Fname'=>$arr[2],'doctor_Lname' =>$arr[3],'address_No'=>$arr[4],'address_Street'=>$arr[5],'address_City' => $arr[6],'date_Of_Birth' => $arr[7],'rank'=>$arr[8],'email'=>$arr[9],'password'=>$arr[10],'gender'=>$arr[11],'mobile_Number'=>$arr[12]);

	//print_r($arr);
	//print_r($currentPharmacy);
	
	
	?>


<div class="wrapper row-offcanvas row-offcanvas-left">


<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        About Me

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">About Me</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">




<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-7 connectedSortable">


    <!-- Custom tabs (Charts with tabs)-->
    <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
            <li class="active"><a href="#view-chart" data-toggle="tab">View</a></li>
            <li><a href="#edit-chart" data-toggle="tab">Edit</a></li>
            <li class="pull-left header"><i class="fa fa-male"></i> Your Details</li>
        </ul>
        <div class="tab-content no-padding">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="view-chart" style="position: relative; height: 1000px;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">

                                    <tr>
                                        <td>Name </td>

                                        <td><?php echo $currentDoctor['doctor_Fname'].' '.$currentDoctor['doctor_Lname'];?></td>

                                    </tr>

                                    <tr>
                                        <td>Gender</td>

                                        <td><?php echo $currentDoctor['gender'];?> </td>

                                    </tr>

                                    <tr>
                                        <td>Date of Birth </td>

                                        <td><?php echo $currentDoctor['date_Of_Birth'];?></td>

                                    </tr>

                                    <tr>

                                        <td>Contact Number</td>

                                        <td><?php echo $currentDoctor['mobile_Number'];?></td>

                                    </tr>

                                    <tr>
                                        <td>Address</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>&nbsp;&nbsp;Number </td>

                                        <td><?php echo $currentDoctor['address_No'];?></td>

                                    </tr>

                                    <tr>
                                        <td>&nbsp;&nbsp;Street </td>

                                        <td><?php echo $currentDoctor['address_Street'];?></td>

                                    </tr>

                                    <tr>
                                        <td>&nbsp;&nbsp;City </td>

                                        <td><?php echo $currentDoctor['address_City'];?> </td>

                                    </tr>
									<tr>
                                        <td>Doctor Rank </td>

                                        <td><?php echo $currentDoctor['rank'];?> </td>

                                    </tr>
									<tr>
                                        <td>Doctor Reg. No. </td>

                                        <td><?php echo $currentDoctor['doc_Reg_Id'];?> </td>

                                    </tr>
                                    

                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>


            </div>

            <!--Edit form-->
            <div class="chart tab-pane" id="edit-chart" style="position: relative; height: 1000px;">
                
                    <form role="form" method="POST" action="update.php" style="width:550px; ">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="doctor_Fname" value=<?php echo "\"".$currentDoctor['doctor_Fname']."\"";?> >
                            </div>

                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName"name="doctor_Lname" value=<?php echo "\"".$currentDoctor['doctor_Lname']."\"";?>>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option <?php if($currentDoctor['gender']=='Male') echo "selected";?> >Male</option>
                                    <option <?php if($currentDoctor['gender']=='Female') echo "selected";?> >Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="date_Of_Birth" value=<?php echo "\"".$currentDoctor['date_Of_Birth']."\"";?> >
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="address1" name="address_No" value=<?php echo "\"".$currentDoctor['address_No']."\"";?>>
                                <input type="text" class="form-control" id="address2"name="address_Street" value=<?php echo "\"".$currentDoctor['address_Street']."\"";?>>
                                <input type="text" class="form-control" id="address3" name="address_City" value=<?php echo "\"".$currentDoctor['address_City']."\"";?>>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Contact Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile_Number" value=<?php echo "\"".$currentDoctor['mobile_Number']."\"";?>>
                            </div>

                            <div class="form-group">
                                <label for="lnumber">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value=<?php echo "\"".$currentDoctor['email']."\"";?>>
                            </div>
							
							<div class="form-group">
                                <label for="mobile">Doctor Rank</label>
                                <input type="text" class="form-control" id="rank" name="rank" value=<?php echo "\"".$currentDoctor['rank']."\"";?>>
                            </div>

                            <div class="form-group">
                                <label for="lnumber">Doctor Reg. No.</label>
                                <input type="text" class="form-control" id="docRegNo" name="doc_Reg_Id" value=<?php echo "\"".$currentDoctor['doc_Reg_Id']."\"";?>>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload a profile picture</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Click and upload.</p>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                

            </div>
        </div>
    </div><!-- /.nav-tabs-custom -->







</section><!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">










</section><!-- right col -->
</div><!-- /.row (main row) -->

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->




<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

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