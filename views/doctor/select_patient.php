<!DOCTYPE html>
<html>
<head>
   <?php
require_once '../../core/init.php';
require('header.php');
require('navigation.php');
$arr=[];

?>
   
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
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	  <link rel="stylesheet" href="/resources/demos/style.css">
	 
	  <script type="text/javascript" src="../../js/jquery-2.1.3.js"> 
	
	
	  </script>
	  <script type="text/javascript">
	
		
	    $(document).ready(function() {
           $("#test").click(function() {
				$( "#select1" ).hide();
				$.ajax({    
				type: "GET",
				url: "search.php?id="+$("#tags").val(),             
				dataType: "html",            
				success: function(response){                    
					$("#select").html(response); 
					
				}
						
				});
				
				
			});
			
			
			$("#all").click(function() {
				$( "#select" ).hide();
				$( "#select1" ).show();
						
			});
			
			  
				
		
		});
	
	
	   </script>
	  
	  
	  
	  
	  
	  <?php 
	 	$d=DB::getInstance();
		$d->query('SELECT patient_Id,patient_FName,patient_LName FROM patient');
				
		$ar=array();
			
				
	  
	  
	  
	  
	  echo "
	  <script>
	  
	
	   
	  $(function() {
		var availableTags = [
		" ;
		

	foreach($d->results() as $i){
				
		echo	"\"".$i->patient_Id."\",\"".$i->patient_FName." ".$i->patient_LName."\",
				
				
				";}
				
	  echo "\"10000\"
		
		];
		
		
		
		
		$( \"#tags\" ).autocomplete({
		  source: availableTags
		});
	  });
  </script>";

	
?>
	
	
	
</head>








<body class="skin-blue">

<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Patients

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Patients</li>
    </ol>
</section>

<?php 
			  
				$db=DB::getInstance();
				$db->query('SELECT * FROM patient');
				$a=$db->results();
				
				
				
			
				
				
				
				?>

<!-- Main content -->
<section class="content">

<!--main row-->


<section class="col-lg-12">

    <!-- general form elements disabled -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Select Patient <div id='list'> </div></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          
                <div class="input-group">
                    <input type="text" id="tags" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
							
								
                                <button  id="test" class="btn btn-flat"><i class="fa fa-search"></i></button>
								<button   id="all" class="btn btn-flat"><i class="fa fa-reply-all "></i></button>
								
                            </span>
							
                </div>
           
			
        </div><!-- /.box-body -->
		
    </div><!-- /.box -->
	<div id='select'>
	</div>
	<div id='select1'>
    <div  class="col-lg-3">
        


     
		<?php
			
			foreach ($a as $ab){
			echo
		
        "
		<a href='../treat/profile.php?id=".$ab->patient_Id."'>
		<div class='box box-primary' style='height:260px; width:180px;'>
		<div class='box-header' data-toggle='tooltip' title='' data-original-title='Header tooltip'>
           <centre>     <h5 class='box-title'>".$ab->patient_FName."</h5>

            </div>
            <div class='box-body'>  <img src='../../img/".$ab->patient_Id.".jpeg'  class='img-rounded' alt='User Image' WIDTH='60%' HIGHT='40%' /> 

              

                <p>
                    ID   : ".$ab->patient_Id."</br>
					Name : ".$ab->patient_FName." ".$ab->patient_LName."</br>
                    
					
                </p> </centre> 
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        </a>
		</div>
		<div class='col-lg-3'>
        ";
	}
	
	?>
	
    
</div>   
</section>

<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-sm-2 connectedSortable">

</section><!-- right col -->


<!-- Left col -->

<section class="col-lg-7 connectedSortable">

</section>









<!-- Main row -->


</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


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