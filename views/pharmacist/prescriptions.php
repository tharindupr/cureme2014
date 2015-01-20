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

        <script type="text/javascript" src="../../js/jquery-2.1.3.js"> </script>

		<script type="text/javascript">
		
		$(document).ready(function() {
				
				$("#search-btn").click(function() { 
							  
			
				  $.ajax({    //create an ajax request to load_page.php
					type: "GET",
					url: "retreaive_prescription.php?id="+$("#pid").val(),             
					dataType: "html",   //expect html to be returned                
					success: function(response){                    
						$("#box").html(response); 
						//alert(response);
					}
							
					});
				
				});
					
		
			
			});

		</script>
    </head>
    <body class="skin-blue">
       

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
			
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Prescriptions

                    </h1>
                    <!--<ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Prescriptions</li>
                    </ol>-->
                </section>

                   

                <!-- Main content -->
                <section class="content">

                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Select Prescription</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          
                                <div class="input-group">
                                    <input type="text" name="txtpresid" id="pid" class="form-control" placeholder="Enter Prescription ID here.....">
                            <span class="input-group-btn">
                                <button  name="seach" id="search-btn" class="btn btn-flat"><i class="fa fa-search"'></i></button>
                            </span>
                                </div>
                           
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
					
					





                </section><!-- /.content -->
				
				<div id='box'>
		
				</div>
            </aside><!-- /.right-side -->
			
		
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


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