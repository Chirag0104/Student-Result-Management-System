<?php


include("../db/conn.php");

session_start();


if(isset($_POST['submit'])){
$d=$_POST['value'];
for($n=0;$n<$d;$n++){
$SName=$_POST['name'];
$Class=$_POST['class'];
$Marks=$_POST['marks_'.$n];
$Subject=$_POST['subject_'.$n];
$isSuccess = $crud->result_update($SName,$Class,$Subject,$Marks);}
header('Location: result_view.php');
}

?>