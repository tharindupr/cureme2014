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
	
	$_db=DB::getInstance();
	$data=$_db->get('patient',array('patient_Id','=',$currentPatient['patient_Id']));
	$p=$data->results();
	Session::put('patient',$p[0]);
	
	
	
	
	//print_r($arr);
	//print_r($currentPatient);
	
	
	if(Input::exists())
	{	
		echo "Success";
	}
	require_once("header.php");
	require_once("navigation.php");
	
   
		
	?>
		
		
		
       <script type="text/javascript" src="../../js/jquery-2.1.3.js"> 
	
	
		</script>
		<script type="text/javascript">
		
			
		$(document).ready(function() {
				
			
									  
					
				  $.ajax({    //create an ajax request to load_page.php
					type: "GET",
					url: <?php echo "\"profileview.php?id=".$currentPatient['patient_Id']."\"" ?>,             
					dataType: "html",   //expect html to be returned                
					success: function(response){                    
						$("#content").html(response); 
						//alert(response);
					}
							
					});
			
			});
		
		
		</script>
    </head>
	<body>
	
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
                                    <li class="pull-left header"><i class="fa fa-male"></i> Your Details</li>
                                </ul>
                                <div class="tab-content no-padding">
                                    <!-- Morris chart - Sales -->
									<div class='chart tab-pane active' id='view-chart' style='position: relative; height: 1000px;'>
									<div id='content'>
                                    
									</div>
									</div>
									
									
									
									
									
                                    <!--Edit form-->
                                    <div class="chart tab-pane" id="edit-chart" style="position: relative; height: 1000px;">
                                      
                                        <form role="form" method="POST" action="update.php" style="width:550px; " name="user" enctype="multipart/form-data">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="patient_FName">&nbsp;&nbsp;First Name</label>
                                                    <input type="text" required class="form-control" name="patient_FName" value=<?php echo $currentPatient['patient_FName'] ?> >
                                                </div>

                                                <div class="form-group">
                                                    <label for="patient_LName">&nbsp;&nbsp;Last Name</label>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" required  class="form-control" name="patient_LName" value=<?php echo $currentPatient['patient_LName'] ?>>
                                                </div>
			
                                                <div class="form-group">
                                                    <label>&nbsp;&nbsp;Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option  <?php if($currentPatient['gender']=='Male') echo "selected";?> >Male</option>
                                                        <option  <?php if($currentPatient['gender']=='Female') echo "selected";?>	>Female</option>
                                                    </select>
                                                </div>
												
                                                <div class="form-group">
                                                    <label for="dob">&nbsp;&nbsp;Date of Birth </label>
                                                    <input type="date" class="form-control" name="date_Of_Birth" value=<?php  echo date($currentPatient['date_Of_Birth']); ?> >
                                                </div>
												
												<div class="form-group">
                                                    <label>&nbsp;&nbsp;Email</label>
                                                    <input type="email" required  class="form-control" name="email" value=<?php echo $currentPatient['email'] ?> >
                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label>&nbsp;&nbsp;Address </label>
                                                    <input type="text" required  class="form-control" name="address_No"  value=<?php echo "\"".$currentPatient['address_No']."\"" ?> >
                                                    <input type="text" required  class="form-control" name="address_Street" value=<?php echo "\"".$currentPatient['address_Street']."\"" ?>>
                                                    <input type="text" required  class="form-control" name="address_City" value=<?php echo $currentPatient['address_City'] ?>>
                                                </div>

                                                <div class="form-group">
                                                    <label for="mobile">&nbsp;&nbsp;Mobile Number</label>
                                                    <input type="text" required  class="form-control" name="mobile_Number" value=<?php echo $currentPatient['mobile_Number'] ?>>
                                                </div>

                                              


                                                 <div class="form-group">
												<label for="exampleInputFile">Add a profile photo</label>
												<input type="file" id="exampleInputFile"  type='file' name='myfile' accept='image/gif, image/jpeg,image/x-png' required>

												</div>

                                            </div><!-- /.box-body -->

                                            <div class="box-footer">
                                               &nbsp;&nbsp;&nbsp;&nbsp; <button type="submit"  class="btn btn-primary">Save</button>
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
                                       
                                                             
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
								
                                <div class="box-body no-padding">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div><!-- /.box-body -->  

                            </div><!-- /.box -->                            


                           


                        <?php 
              
                $db=DB::getInstance();
                $db->query("SELECT * FROM message WHERE patient_Id=".$currentPatient['patient_Id']);
                $a=$db->results();
                //print_r($a);
                ?>
                
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-comments"></i>
                        <h3 class="box-title">Message</h3>

                    </div>
                    
                    <div class='box-body chat' id='chat-box'>
                    <?php
                    $arraylen=sizeof($a);
                    //echo $arraylen;
                    foreach ($a as $ab){
                        echo"<div class='item'>
                            <img src='img/avatar.png' alt='user image' class='online'/>
                            <p class='message'>
                                <a href='#' class='name'>
                                    <small class='text-muted pull-right'>Message time: ".$ab->date." ".$ab->time."</small>".$ab->message_Subject."
                                </a>".$ab->message_Containt."</p>
                            </div>";
                    
                    }
                
                    ?>

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