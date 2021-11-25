<?php
session_start();
include'includes/header.php';
include '../db/conn.php';
$subject=$_GET['subject'];
$Class=$_GET['class'];

$delete=$crud->delete_subject($subject,$Class);

    	$_SESSION['suc']=1;
    header('Location: subject.php');
    
    
?>