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

<body class="skin-blue">

<?php
require_once '../../core/init.php';
$arr=[];
require('header.php');
require('navigation.php');

?>


<div class="wrapper row-offcanvas row-offcanvas-left">

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Helth Tips

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Helth Tips</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!--Main Row-->
        <div class="row">
            <!--left Col-->
            <section class="col-lg-7 connectedSortable ">

                <!-- Tips -->
				
				<?php 
			  
				$db=DB::getInstance();
				$db->query('SELECT * FROM healthtip');
				$a=$db->results();
				//print_r($a);
				?>
				
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-comments"></i>
                        <h3 class="box-title">Tips</h3>

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
                                    <small class='text-muted pull-right'>Tip ID: ".$ab->tip_Id."</small>".$ab->tip_Type."
                                </a>".$ab->tip_Content."</p>
							</div>";
					
					}
					
					?>
					
                    </div><!-- /.tips -->
                    <div class="box-footer ">

					<form role="form" method="post" action="healthtipspost.php">
                        <div class="input-group">
                            <label>Tip Title</label>
                            <input class="form-control" type="text" name="tiptitle" placeholder="Type message titel..."/>
                            <label>Tip body</label>
                            <input class="form-control" type="text" name="tipbody" placeholder="Type message..."/>

                        </div>
                        <div class="input-group-btn">
                            <div class="btn-group">



                            <!-- Single button -->
                            <!--<div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle fa fa-share" data-toggle="dropdown">
                                    Select All <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Send to all<i class="pull-right fa fa-globe"></i></a></li>
                                    <li><a href="#">send to selected area<i class="pull-right fa fa-map-marker"></i></a></li>
                                    <li><a href="#">send to selected patient<i class="pull-right fa fa-map-marker"></i></a></li>

                                </ul>
                            </div>-->
                                <button type="submit" class="btn btn-primary  fa fa-plus">
                                    Send tip
                                </button>


                            </div>

                        </div>
					</form>

                    </div>
            </section>

            <section class="col-lg-5 connectedSortable ui-sortable">

                <div class="box box-solid">

                    <!--event display-->

                    <div class="box  box-solid">
                        <div class="box-header">
                            <i class="fa fa-heart"></i>
                            <h3 class="box-title"> Sent Tips</h3>

                            <table class="table box-solid">
                                <tbody>
                                <tr>
                                    <td>
                                        <label>
                                            Tip ID
                                        </label>
                                    </td>
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
											Tip Title<!-- if docter check it and give comment and do click chech box -->
										</label>	
                                    </td>
                                </tr>
                                <!--Apoinment shedule-->

                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <!-- button with a dropdown -->
                                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>

									<div class="box box-body no-padding ">
									<?php
										$arraylen=sizeof($a);
										//echo $arraylen;
										foreach ($a as $ab){
											echo
												"<tr >
													<td>
														<label>
															".$ab->tip_Id."
														</label>
													</td>
													<td>
														<label>
															".$ab->tip_Date."
														</label>
													</td>
													<td>
														<label>
															".$ab->tip_Time."
														</label>
													</td>
													<td>
														<label>
															".$ab->tip_Type."
														</label>
													</td>";
										}
									?>
                                </div>
                                </div><!-- /. tools -->


                                </tbody>
                            </table>

                        </div>





                        <!--/Event display-->

                </div>


            </section>


        </div><!-- /.box (chat box) -->






            <!--/Left Col-->





    </div>




        <!--/Mainrow-->



    </section>






    <!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->


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