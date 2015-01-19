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
		 <?php
			require_once '../../core/init.php';
			$arr=[];
			require('header.php');
			require('navigation.php');
			
			

			foreach(Session::get('patient') as $pid)
			{
				break;
			}
	
		?>
		 
		 <script type="text/javascript" src="jquery-2.1.3.js"> </script>

		 <script type="text/javascript">

		 $(document).ready(function() {

			$(".date").change(function() {                

			  $.ajax({    //create an ajax request to load_page.php
				type: "GET",
				url: "display.php?d="+$(".date").val(),             
				dataType: "html",   //expect html to be returned                
				success: function(response){                    
					$("#responsecontainer").html(response); 
					//alert(response);
				}
				
				
				

				});
			
			});
			
			
			
			
			
	
			
			$(".date").datepicker({
				 
				  onSelect: function(dateText, inst) {
					$(this).change();
					
				}
				
					
				
				 
			});

			
			
			
			
			              
				
			  $.ajax({    //create an ajax request to load_page.php
				type: "GET",
				url: "<?php echo "appoinmentlist.php?id=".$currentPatient['patient_Id'] ?>",             
				dataType: "html",   //expect html to be returned                
				success: function(response){                    
					$("#box").html(response); 
					//alert(response);
				}
						
				});
			
			 $.ajax({    //create an ajax request to load_page.php
				type: "GET",
				url: "<?php echo "appoinmentdelete.php?id=".$currentPatient['patient_Id'] ?>",             
				dataType: "html",   //expect html to be returned                
				success: function(response){                    
					$("#delete").html(response); 
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
                                    <li class="active"><a href="#add-appoinment" data-toggle="tab">Add Appointment</a></li>
                                    <li><a href="#edit-appoinment" data-toggle="tab">Delete Appointment</a></li>
                                    <li class="pull-left header"><i class="fa fa-clock-o"></i><i class="fa fa-calendar"></i> Appointment</li>
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
                                                        &nbsp;&nbsp;<input type="text" width="48" class="form-control" placeholder="Enter the appoinment title ..." name="title" required/>
                                                    </div>
                                                    <!--/appoinment title input-->
                                                    <!-- Discription of appoinment -->
                                                    <div class="form-group">
                                                        <label>&nbsp;&nbsp;Descriptions</label>
                                                        &nbsp;&nbsp;<textarea class="form-control" rows="3" placeholder="Enter appoinment discription ..." name="description" required></textarea>
                                                    </div>
                                                    <!--/Discription of appoinment -->
                                                    <!-- Date dd/mm/yyyy -->
                                                    <div class="form-group">
                                                        <label>&nbsp;&nbsp;Appointment Date:</label>
														&nbsp;&nbsp;
                                                        <div class="input-group">
                                                            &nbsp;<div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
													    <input class="date" data-date-format="yyyy/mm/dd" name="date" required>

															
															
                                                        <!-- <input id="calander" type="DATE" name="date"  class="form-control" value='2015-1-15' data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
                                                        </div><!-- /.input group -->
                                                    </div><!-- /.form group -->

                                                    <!-- Date mm/dd/yyyy -->

                                                    <!--Time picker-->
                                                    <div class="form-group">
													<label>&nbsp;&nbsp;Time </label>
													<div id="responsecontainer" align="center">
													</div>
												&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
															 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
															  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
															  <button class="btn btn-primary" type="submit" id="add">&nbsp;&nbsp;Add</button>
															  
															

                                                    <div class="right">


                                                    </div>

												

                                                  



                                                </form>
                                            </div><!-- /.box-body -->
                                        </div><!-- /.box -->
                                        <!--/Add apoinment box-->
										
										



		</div>	
	

                                    </div>

                                    <!--Edit form-->
                                    <div class="chart tab-pane" id="edit-appoinment" style="position: relative; height: 1000px;">
                                        <div class="box-header" style="cursor: move;">
                                            <h3 class="box-title">&nbsp;&nbsp;Delete Appointment</h3>
                                        </div>
									</br>
                                       
										<form method='POST' action=<?php echo "appoinmentdelete2.php?id=".$currentPatient['patient_Id'] ;?>> 
										<div id="delete" >
										</div>
											&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
													    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
														    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
															 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
															  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
										<button class="btn btn-danger" type='submit' id="deletebutton">Delete</button>
										
										
										<form>
										<div id='ok'></div>



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
							
                            <div class="box  box-solid" id="box">
                                




							</div>
                                <!--/Event display-->


                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<script type="text/javascript" src="../../js/jquery-2.1.3.js"> </script>
        
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