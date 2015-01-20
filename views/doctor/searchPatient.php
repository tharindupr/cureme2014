
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
<body>

<?php
require_once '../../core/init.php';


$name=$_POST['searchName'];

$_db=DB::getInstance();

$sql="SELECT * FROM patient WHERE patient_FName='{$name}'";
$_db->query($sql);

$a=$_db->results();
//echo "1,$name,$sql";
//print_r($a);

if(count($a)>0){

foreach ($a as $ab){
			echo
		
        "
        <div class=\"col-sm-2\">
		<a href='../treat/patient.php?id=".$ab->patient_Id."'>
		<div class='box box-primary' style='height:220px; width:150px;'>
		<div class='box-header' data-toggle='tooltip' title='' data-original-title='Header tooltip'>
                <h5 class='box-title'>".$ab->patient_FName."</h5>

            </div>
            <div class='box-body'>

                <img src='img/avatar3.png' class='img-rounded' alt='User Image'>

                <p>
                    Name : ".$ab->patient_FName." ".$ab->patient_LName."</br>
                    Gender : ".$ab->gender."</br>
                    Location : ".$ab->address_City."
					
                </p>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        </a>
		</div>
		<div class='col-sm-2'>
        ";
	}
	
}else
{
    echo
        
        "
        <div class='col-sm-6 box box-danger' style='height:220px; width:150px; '>
            Sorry..!, Patient has no named $name
        <div class='col-sm-6'>
        ";
}




?>

</body>