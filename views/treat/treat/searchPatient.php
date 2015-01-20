<?php
require_once '../../core/init.php';


$name=$_POST['searchName'];

$_db=DB::getInstance();

$_db->query("SELECT * FROM patient WHERE patient_FName={$name}");

$a=$db->results();


foreach ($a as $ab){
			echo
		
        "
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
	




?>