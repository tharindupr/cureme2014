<?php

require_once '../../core/init.php';
//$pid=$currentPatient['patient_Id'];
$db=DB::getInstance();

$id=$_GET['id'];
$Fname=explode(" ", $_GET['id'])[0];

if(isset(explode(" ", $_GET['id'])[1]))
{
$Lname=explode(" ", $_GET['id'])[1];
//echo("SELECT * FROM patient WHERE patient_Id='".$id."' or patient_FName='".$Fname."' and patient_LName='".$Lname."'");
$db->query("SELECT * FROM patient WHERE patient_Id='".$id."' or patient_FName='".$Fname."' and patient_LName='".$Lname."'");
//"SELECT * FROM patient WHERE patient_Id=".$id."or patient_FName=".$Fname);

}

else
{
$db->query("SELECT * FROM patient WHERE patient_Id='".$id."' or patient_FName='".$Fname."'");

}

//$a=$db->results();
//echo "success";
foreach($db->results() as $i){
		
		echo
		"
		<a href='../treat/profile.php?id=".$i->patient_Id."'>
		<div class='box box-primary' style='height:260px; width:180px;'>
		<div class='box-header' data-toggle='tooltip' title='' data-original-title='Header tooltip'>
                <h5 class='box-title'>".$i->patient_FName."</h5>

            </div>
             <div class='box-body'>  <img src='../../img/".$i->patient_Id.".jpeg'  class='img-rounded' alt='User Image' WIDTH='60%' HIGHT='40%' /> 

              

                <p>
                    ID   : ".$i->patient_Id."</br>
					Name : ".$i->patient_FName." ".$i->patient_LName."</br>
                    
					
                </p> </centre> 
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        </a>
		</div>
		<div class='col-lg-3'>
        ";


	//echo($i->patient_FName);
}
//echo $db->results()[0]->patient_FName;



?>