<?php 
require_once '../../core/init.php';
$arr=[];

print_r($_POST);
$qid=$_POST['qid'];
$_db=DB::getInstance();
$_db->answerToQuestion("question",$qid,array("Answer"=>NULL));
header('Location: Conversations.php');
?>