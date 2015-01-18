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
$arr=[];
require('header.php');
require('navigation.php');

foreach(Session::get('patient') as $pid)
{
	break;
}



?>


<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
       Conversations

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Conversations</li>
    </ol>
</section>

    <section class="content">
    <div class="col-md-12">
    <form role="form" method="post" action="questionpost.php" style="width:100% ">
		
        <div class="box-body">
            <div class="form-group">
                <label>Post you question here</label>
				
				<textarea class="form-control" rows="1" placeholder="Subject" name="subject"></textarea>
				
                <textarea class="form-control" rows="3" placeholder="Question" name="question"></textarea>
				
            </div>

         </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </form>
    </div>

        &nbsp;<br>
        &nbsp;<br>
		<?php 
			  
			  $db=DB::getInstance();
			  $db->query('SELECT * FROM question WHERE Patient_patient_Id=? ORDER BY question_Id DESC',array('Patient_patient_Id'=>$pid));
			  $a=$db->results();
			  //print_r($a);
			  
			  
			  

		?>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li class="time-label">
                                    <span class="bg-red">
                                        Conversations
                                    </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>
						
						<?php 
					
						 foreach($a as $i)
						 {	
							$ray=array();
							foreach($i as $j)
							{
								array_push($ray,$j);
							}
							
							echo(
							" <div class=\"timeline-item\">
                            <span class=\"time\"><i class=\"fa fa-clock-o\"></i>".$ray[2]."</span>
                            <h3 class=\"timeline-header\"><a href=\"#\">".$ray[5]."</a> </h3>
                            <div class=\"timeline-body\">
                                ".$ray[1]."
                            </div>
                            <div class=\'timeline-footer\'>
								 <textarea class='form-control' rows='3' placeholder='Question' name='question'></textarea>
                                <a class=\"btn btn-danger btn-xs\">Delete</a>
                            </div>
							</div>");
							
							
						 }
						?>
                        
                    </li>


                    <!-- END timeline item -->
                    <li>
                        <i class="fa fa-clock-o"></i>
                    </li>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->



    </section><!-- /.content -->
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