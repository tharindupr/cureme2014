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
		
		<script>
					$(document).ready(function(){
					$('.button').click(function(){
						var clickBtnValue = $(this).val();
						var ajaxurl = 'ajax.php',
						data =  {'action': clickBtnValue};
						$.post(ajaxurl, data, function (response) {
							// Response div goes here.
							alert("action performed successfully");
						});
					});

				});
		</script>
		
		
    </head>
    <body class="skin-blue">
	
	
	
	<?php
	require_once '../../core/init.php';
	$arr=[];

	foreach(Session::get('patient') as $pid)
	{
		break;
	}
	
	
	
	
	
	
	
	//$a->create($_POST['date'],$_POST['time'],$_POST['title'],$_POST['description'],$pid);

	?>
      
                   <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Appoinment

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Appoinment</li>
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
                                    <li class="active"><a href="#add-appoinment" data-toggle="tab">Add Appoinment</a></li>
                                    <li><a href="#edit-appoinment" data-toggle="tab">Edit Appoinment</a></li>
                                    <li class="pull-left header"><i class="fa fa-clock-o"></i><i class="fa fa-calendar"></i> Appoinment</li>
                                </ul>
                                <div class="tab-content no-padding">
                                    <!-- Morris chart - Sales -->
                                    <div class="chart tab-pane active" id="add-appoinment" style="position: relative; height: 1000px;">


                                        <!--Add Appoinment box-->
                                        <!-- general form elements disabled -->
                                        <div class="tab-pane">
                                            <div class="box-header">
                                                <h3 class="box-title">&nbsp;&nbsp;Create a new appoinment</h3>
                                            </div><!-- /.box-header -->
                                            <div class="box-body">
                                                <form role="form" action="appoinmentpost.php" method="POST">
                                                    <!-- appoinment title input -->
                                                    <div class="form-group">
                                                        <label>&nbsp;&nbsp;Title</label>
                                                        <input type="text" class="form-control" placeholder="Enter the appoinment title ..." name="title" required/>
                                                    </div>
                                                    <!--/appoinment title input-->
                                                    <!-- Discription of appoinment -->
                                                    <div class="form-group">
                                                        <label>&nbsp;&nbsp;Discription</label>
                                                        <textarea class="form-control" rows="3" placeholder="Enter appoinment discription ..." name="description" required></textarea>
                                                    </div>
                                                    <!--/Discription of appoinment -->
                                                    <!-- Date dd/mm/yyyy -->
                                                    <div class="form-group">
                                                        <label>&nbsp;&nbsp;Appoinment Date:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                            <input id="calander" type="DATE" name="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
                                                        </div><!-- /.input group -->
                                                    </div><!-- /.form group -->

                                                    <!-- Date mm/dd/yyyy -->

                                                    <!--Time picker-->
                                                    <div class="form-group">
                                                        <label>&nbsp;&nbsp;Appoinment Time:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-clock-o"></i>
                                                            </div>
                                                            <input  type="time" name="time" class="form-control calendar-time " data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>
                                                        </div><!-- /.input group -->
                                                    </div><!-- /.form group -->

                                                    <button class="btn btn-primary right pull-right" type="submit">
                                                        &nbsp;&nbsp;Add
													</button>

                                                    <div class="right">


                                                    </div>




                                                    <!--/time picker-->




                                                </form>
                                            </div><!-- /.box-body -->
                                        </div><!-- /.box -->
                                        <!--/Add apoinment box-->


                                    </div>

                                    <!--Edit form-->
                                    <div class="chart tab-pane" id="edit-appoinment" style="position: relative; height: 1000px;">
                                        <div class="box-header" style="cursor: move;">
                                            <h3 class="box-title">&nbsp;&nbsp;Edit a new appoinment</h3>
                                        </div>

                                        <!--Edite Appoinment-->
                                        <div class="form-group">

                                            <label>

                                                &nbsp;&nbsp;Select Appoinment

                                            </label>
                                            <select class="form-control">
                                                <option>

                                                   &nbsp;&nbsp;Suger Checking

                                                </option>
                                                <option>

                                                   &nbsp;&nbsp;M R I Scan..

                                                </option>
                                                <option>
                                                    &nbsp;&nbsp;About blood report
                                                </option>
                                            </select>

                                        </div>

                                        <!-- Date dd/mm/yyyy -->
                                        <div class="form-group">
                                            <label>&nbsp;&nbsp;Appoinment Date:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input id="calander" type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->

                                        <!-- Date mm/dd/yyyy -->

                                        <!--Time picker-->
                                        <div class="form-group">
                                            <label>&nbsp;&nbsp;Appoinment Time:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                                <input  type="time" class="form-control calendar-time " data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="right">

                                            <button class="btn btn-danger right pull-right">
                                                &nbsp;&nbsp;Detete
                                            </button>


                                        </div>

                                        <div class="right">

                                            <button class="btn btn-primary right pull-right">
                                                &nbsp;&nbsp;Add
                                            </button>


                                        </div>






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

                            <!--event display-->

                            <div class="box  box-solid">
                                <div class="box-header">
                                    <i class="fa fa-eye"></i>
                                    <h3 class="box-title"> Event List</h3>

                                    <table class="table box-solid">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    Date
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    Time
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    Titel
                                                </label>
                                            </td>
                                            <td>
                                                Check <!-- if docter check it and give comment and do click chech box -->
                                            </td>
                                        </tr>
                                        <!--Apoinment shedule-->

                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <!-- button with a dropdown -->
                                            <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>


                                        </div><!-- /. tools -->



                                        <div class="box box-body no-padding ">

                                            <tr >
                                                <td>
                                                    <label>
                                                        03/09/2014
                                                    </label>
                                                </td>
                                                <td>
                                                    <label>
                                                        14:30h
                                                    </label>
                                                </td>
                                                <td>
                                                    <label>
                                                        Check Suger
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="icheckbox_minimal" style="position: relative;" aria-checked="false" aria-disabled="false">

                                                        <input type="checkbox" disabled="" style="position: absolute; opacity: 0;"></input>
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width…roll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins>
                                                    </div>
                                                    <ul class="dropdown-menu">
                                                        <!--Doctor's Comment-->
                                                        <p>
                                                            <label>
                                                                thes testin
                                                            </label>
                                                        </p>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="box box-solid bg-yellow"> <!--Argent= yellow col0ur-->
                                                <td>
                                                    <label>
                                                        03/10/2014
                                                    </label>
                                                </td>
                                                <td>
                                                    <label>
                                                        14:00h
                                                    </label>
                                                </td>
                                                <td>
                                                    <label>
                                                        About blod report
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="icheckbox_minimal" style="position: relative;" aria-checked="false" aria-disabled="false">

                                                        <input type="checkbox" disabled="" style="position: absolute; opacity: 0;"></input>
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width…roll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="box box-solid ">
                                                <td>
                                                    <label>
                                                        05/10/2014
                                                    </label>
                                                </td>
                                                <td>
                                                    <label>
                                                        08:00h
                                                    </label>
                                                </td>
                                                <td>
                                                    <label>
                                                        Do MRI scan
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="icheckbox_minimal" style="position: relative;" aria-checked="false" aria-disabled="false">

                                                        <input type="checkbox" disabled="" style="position: absolute; opacity: 0;"></input>
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width…roll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--/Apoinment shedule-->


                                        </div>


                                        </tbody>
                                    </table>

                                </div>





                                <!--/Event display-->


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