<?php


include("../db/conn.php");

session_start();

$email=$_POST['email'];
$password=$_POST['password'];
$detail=$crud->loginconfirm_admin($email,$password);
$t=$detail->fetch(PDO::FETCH_ASSOC);
$id_2=$t['S_No'];

   if($t>1)
   {
   	 $_SESSION['login']=true;
    header('Location: dashboard.php?id='.$t['S_No']);
    
   }
   else
   {
   	 $_SESSION['error']=true;
  	header("Location: loginform.php");
    echo"Email or password incorrect";
     
   }
   ?>