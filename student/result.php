<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
</head>
<body>

<?php

include '../db/conn.php';
$id_2=$_GET['id'];
$detail=$crud->student_info($id_2);
$data=$detail->fetch(PDO::FETCH_ASSOC);
include'includes/sidenav.php';

?>

<div id="result-page">
    <div id="result-heading">
        <h1>Your Result</h1>
    </div>
    <table>
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>

        <tr>
            <?php
            $Name=$data['Name'];
            $Class=$data['Class'];
            $row=$crud->fetch_result_2($Class,$Name);
            while($data=$row->fetch(PDO::FETCH_ASSOC)){ ?>
            <td><?php echo $data['Subject']; ?></td>
            <td><?php echo $data['Marks']; ?></td>               
        </tr>
        <?php }
        ?>
    
    </table>
</div>
    
</body>
</html>