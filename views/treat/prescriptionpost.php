<?php 
require_once '../../core/init.php';
$arr=[];

print_r($_POST['txtmedicine']);
print_r($_POST['txtdose']);

$name=$_POST['patientname'];
$drug=$_POST['txtmedicine'];
$dose=$_POST['txtdose'];
$date=date("Y/m/d");

$x=count($drug);



//$_db=DB::getInstance();

//$_db->insert('prescriptions',array('prescription_Id'=>'1234','patient_Id'=>'123','date'=>'2012-5-5','drug1_name'=>'acfa','drug1_dose'=>'fsggr','drug2_name'=>'ergdh', 'drug2_dose'=>'hdh','drug3_name'=>'thd', 'drug3_dose'=>'dhht','drug4_name'=>'hrdh', 'drug4_dose'=>'hsgdg','drug5_name'=>'hkdh', 'drug5_dose'=>'hfdkgh'));

$prescription=new Prescription();

//$prescription->create(array('prescription_Id'=>'1234','patient_Id'=>'123','date'=>'2012-5-5','drug1_name'=>'acfa', 'drug1_dose'=>'fsggr','drug2_name'=>'ergdh', 'drug2_dose'=>'hdh','drug3_name'=>'thd', 'drug3_dose'=>'dhht','drug4_name'=>'hrdh', 'drug4_dose'=>'hsgdg','drug5_name'=>'hkdh', 'drug5_dose'=>'hfdkgh'));


$prescription->create(array('prescription_Id'=>$prescription->getkey(),'patient_Id'=>'123','date'=>$date,'drug1_name'=>$drug[0], 'drug1_dose'=>$dose[1],'drug2_name'=>$drug[1], 'drug2_dose'=>$dose[2],'drug3_name'=>$drug[2], 'drug3_dose'=>$dose[3],'drug4_name'=>$drug[3], 'drug4_dose'=>$dose[4],'drug5_name'=>$drug[4], 'drug5_dose'=>$dose[5]));
				
				
				
				

header('Location: doctor.php');



?>