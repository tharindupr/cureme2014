<?php 
require_once '../../core/init.php';
$arr=[];

print_r($_POST);
//print_r($_POST['txtdose']);

//$comment=$_POST['comment'];
$qid=$_POST['qid'];
//$drug=$_POST['txtmedicine'];
//$dose=$_POST['txtdose'];
//$date=date("Y/m/d");

//$x=count($drug);



$_db=DB::getInstance();

$_db->answerToQuestion("question",$qid,array("Answer"=>NULL));



				
				
				
header('Location: Conversations.php');




?>