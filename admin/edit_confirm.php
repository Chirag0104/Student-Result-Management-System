<?php

include("../db/conn.php");
$S_No=$_GET['id'];

if(isset($_POST['Update'])){
        $Name=$_POST['name'];
        $Class=$_POST['class'];
        $Roll_No=$_POST['rollno'];
        $Email=$_POST['email-2'];
        $Password=$_POST['password'];
        $isSuccess = $crud->update_data($Name,$Class,$Roll_No,$Email,$Password,$S_No);

}
header("Location: students.php");

?>