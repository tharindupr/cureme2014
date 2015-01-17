<!DOCTYPE html>
<html>
    <head>
	<?php
		require_once 'header.php';
		require_once 'navigation.php';
	
	?>
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
	
	
	$pid=$currentPatient['patient_Id'];
	
	$db=DB::getInstance();
	$db->query('SELECT * FROM Prescriptions WHERE patient_Id = '.$pid.'');
	$a=$db->results();
	//print_r($a);
	
	
	
	
	$presid=($a[0]->prescription_Id);
	$date=($a[0]->date);
	
	
	
	
	
   
		
	?>
		 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Prescription
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Prescription</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
				    <!-- Main row -->
                    
						<?php
							foreach ($a as $ab){
                            
                            echo "<div class='row'>
                        <!-- Left col -->
                        <section class='col-lg-7 connectedSortable'>
							<div class='nav-tabs-custom'>
                                <!-- Tabs within a box -->
                                <ul class='nav nav-tabs pull-right'>
                                    
                                    <li class='pull-left header'><i class='fa fa-file-text-o'></i> Prescription Details</li>
                                </ul>
                                <div class='tab-content no-padding'>
                                    <!-- Morris chart - Sales -->
                                    <div class='chart tab-pane active' id='view-chart' style='position: relative; height: 70px;'>
                                        <div class='row'>
                                            <div class='col-xs-12'>
                                                

                                                    <div class='box-body table-responsive no-padding'>
                                                        <table class='table table-hover'>

                                                            <tr>
                                                                <td>Prescription ID </td>

                                                                <td>".$ab->prescription_Id."</td>

                                                            </tr>
															
															<tr>
                                                                <td>Date </td>

                                                                <td>".$ab->date."</td>

                                                            </tr>


                                                          

                                                        </table>
                                                    </div><!-- /.box-body -->
                                                
                                            </div>
                                        </div>


                                    </div>

                                    <!--Edit form-->
                                    
                               
                            </div><!-- /.box (chat box) -->

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->";
					}
					?>
					
					

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
        <script src="../../cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
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