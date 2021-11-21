<?php

session_start();

include '../db/conn.php';

$id_2=$_GET['id'];

$delete=$crud->delete_data($id_2);

    header('Location: students.php');

?>