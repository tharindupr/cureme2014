<?php 
require_once '../../core/init.php';
$arr=[];

//print_r($_POST['txtmedicine']);
//print_r($_POST['txtdose']);


$drug=array('','','','','');
$dose=array('','','','','');
$name=$_POST['patientname'];
$date=date("Y/m/d");
$patientid=$_GET['cid'];
//$cpid=$currentPatient['patient_Id'];
$id=(int)$patientid;
//echo $id;


$j=0;
foreach($_POST['txtmedicine'] as $i)
{
	$drug[$j]=$i;
	$j++;

}

$k=0;
foreach($_POST['txtdose'] as $i)
{
	$dose[$k]=$i;
	$k++;

}

//print_r($drug);
//print_r($dose);

//echo $GLOBALS['pid'];



//$_db=DB::getInstance();

//$_db->insert('prescriptions',array('prescription_Id'=>'1234','patient_Id'=>'123','date'=>'2012-5-5','drug1_name'=>'acfa','drug1_dose'=>'fsggr','drug2_name'=>'ergdh', 'drug2_dose'=>'hdh','drug3_name'=>'thd', 'drug3_dose'=>'dhht','drug4_name'=>'hrdh', 'drug4_dose'=>'hsgdg','drug5_name'=>'hkdh', 'drug5_dose'=>'hfdkgh'));

$prescription=new Prescription();

//$prescription->create(array('prescription_Id'=>'1234','patient_Id'=>'123','date'=>'2012-5-5','drug1_name'=>'acfa', 'drug1_dose'=>'fsggr','drug2_name'=>'ergdh', 'drug2_dose'=>'hdh','drug3_name'=>'thd', 'drug3_dose'=>'dhht','drug4_name'=>'hrdh', 'drug4_dose'=>'hsgdg','drug5_name'=>'hkdh', 'drug5_dose'=>'hfdkgh'));


$prescription->create(array('prescription_Id'=> $prescription->getKey(),'patient_Id'=>$id,'date'=>$date,'drug1_name'=>$drug[0], 'drug1_dose'=>$dose[0],'drug2_name'=>$drug[1], 'drug2_dose'=>$dose[1],'drug3_name'=>$drug[2], 'drug3_dose'=>$dose[2],'drug4_name'=>$drug[3], 'drug4_dose'=>$dose[3],'drug5_name'=>$drug[4], 'drug5_dose'=>$dose[4]));
				
			
				
				

header('Location: prescription.php');



?>