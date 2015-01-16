<!DOCTYPE html>
<html>
<head>
<?php
require_once 'header.php';
require_once 'navigation.php';




?>	
	<script type="text/javascript">
		var i=0;
		var a=0;
		
		function increment(){
		
			a++;
			//alert (a);
			
		}
		
		function disappear(){
			if (a==5){
				document.getElementById("adddrug").style.display='none';;
			}
			else{
				document.getElementById("adddrug").style.display='block';
			}
		}

		function addrow()
		{
			var table=document.getElementById("table1");
			var rowcount=table.rows.length;
			var row=table.insertRow(rowcount);
			//alert (rowcount);
			var cell1=row.insertCell(0);
			var cell2=row.insertCell(1);
			var cell3=row.insertCell(2);
			
			
			cell1.innerHTML="<input class='form-control' type='text' placeholder='Type medicine name' name=txtmedicine["+(i++)+"]>";
			cell2.innerHTML="<input class='form-control' type='text' placeholder='Type dosage' name=txtdose["+(i)+"]>";
			cell3.innerHTML="<button id='add-new-event' class='btn btn-danger pull-right' type='button' onclick='dltrow("+(i-1)+"); disappear()'> Delete Drug </button>";
			

		}

		function dltrow(b){
			
			a--;
			//alert (a);
			
			var table=document.getElementById("table1");
			var rowcount=table.rows.length;
			var dlt=table.deleteRow(b);

		}
		
		function deleteRow(rowid)  
		{   
			var row = document.getElementById(rowid);
			var table = row.parentNode;
			while ( table && table.tagName != 'TABLE' )
				table = table.parentNode;
			if ( !table )
				return;
			table.deleteRow(row.rowIndex);
		}
		
		
		

		function sav(){


		}

</script>


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

?>


<div class="wrapper row-offcanvas row-offcanvas-left">

<!-- Right side column. Contains the navbar and content of the page -->
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
                        <h3 class="box-title">Write Prescription</h3>

                    </div>
					
					
                    <div class="box-footer ">

					<form role="form" method="post" action="prescriptionpost.php">
                        <div class="input-group">
                            <label>Patient Name</label>
                            <input class="form-control" type="text" name="patientname" placeholder="Type patient name"/>
							<br>
                            <label>Medicine</label>
							<table border='0' id='table1' >
                            <!--<input class="form-control" type="text" name="tipbody" placeholder="Type medicine name"/>-->
							
							</table>

                        </div>
                        <div class="input-group-btn">
                            <div class="btn-group">

                                <button type="button" id="adddrug" class="btn btn-primary  fa fa-plus" onclick="addrow(); increment(); disappear()">
                                   Add Drug
                                </button>
								
								<br><br>
								
									<div>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
										<button type="submit" class="btn btn-success pull-right">Send</button>
									
									</div>


                            </div>

                        </div>
					</form>

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