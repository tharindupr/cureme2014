<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CureMe | Dashboard</title>
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

        <![endif]-->
    </head>
	<body>
	<?php 
	require_once '../../core/init.php';
	
	
	//getting the values from the created session
	$arr=[];
	foreach(Session::get('pharmasist') as $t)
	{
		array_push($arr,"{$t}");;
	}

	$currentPharmacy=array('pharmacy_Id'=>$arr[0],'password' =>$arr[3],'active'=>$arr[5],'pharmacy_Name'=>$arr[1],'contact_Number'=>$arr[2],'email'=>$arr[4],'address_No'=>$arr[9],'address_Street' =>$arr[10],'address_City' => $arr[11],'registration_Number' => $arr[7],'owner' => $arr[8],'date_Of_Registration'=>$arr[12]);

	//print_r($arr);
	//print_r($currentPharmacy);
	
	
	?>
		 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Profile

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Profile</li>
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
                                    <li class="pull-left header"><i class="fa fa-home"></i> Pharmacy Details</li>
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
                                                                <td>Pharmacy Name :</td>

                                                                <td><?php echo $currentPharmacy['pharmacy_Name'];?></td>

                                                            </tr>
															
															<tr>
															
															<td>Email </td>

                                                            <td><?php echo $currentPharmacy['email']; ?></td>

                                                            </tr>

                                                            <tr>
                                                                <td>Address</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td>&nbsp;&nbsp;Number </td>

                                                                <td><?php echo $currentPharmacy['address_No']; ?> </td>

                                                            </tr>

                                                            <tr>
                                                                 <td>&nbsp;&nbsp;Street </td>

                                                                 <td><?php echo $currentPharmacy['address_Street']; ?> </td>

                                                            </tr>

                                                            <tr>
                                                                <td>&nbsp;&nbsp;City </td>

                                                                <td><?php echo $currentPharmacy['address_City'] ?> </td>

                                                            </tr>
                                                            <tr>

																<td>Contact Number </td>

																<td><?php echo $currentPharmacy['contact_Number'] ?></td>

                                                            </tr>
                                                            <tr>

                                                                <td>Owner: </td>

                                                                <td><?php echo $currentPharmacy['owner'] ?></td>

                                                            </tr>
															<tr>
																<td>Pharmacy Reg. No.</td>
																
																<td><?php echo $currentPharmacy['registration_Number'] ?></td>
															</tr>


                                                        </table>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div>
                                        </div>


                                    </div>

                                    <!--Edit form-->
                                    <div class="chart tab-pane" id="edit-chart" style="position: relative; height: 1000px;">
                                        <center>
                                        <form role="form"  style="width:550px; ">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="firstName">Pharmacy Name : </label>
                                                    <input type="text" class="form-control" id="firstName" placeholder="Enter Pharmacy Name">
                                                </div>
                                               
                                                

                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="address1" placeholder="Number">
                                                    <input type="text" class="form-control" id="address2" placeholder="Street">
                                                    <input type="text" class="form-control" id="address3" placeholder="City">
                                                </div>

                                                <div class="form-group">
                                                    <label for="mobile">Contact Number</label>
                                                    <input type="text" class="form-control" id="mobile" placeholder="Enter Pharmacy Contact Number">
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
                                        </center>

                                    </div>
                                </div>
                            </div><!-- /.nav-tabs-custom -->







                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable"> 





                            <!-- Calendar -->
                            <div class="box box-solid bg-blue-gradient">
                                <div class="box-header">
                                    <i class="fa fa-calendar"></i>
                                    <h3 class="box-title">Calendar</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <!-- button with a dropdown -->
                                        <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>


                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div><!-- /.box-body -->  

                            </div><!-- /.box -->


                            

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->

        


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