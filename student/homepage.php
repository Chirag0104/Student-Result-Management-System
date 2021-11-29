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


<div id="student-information-2" class="student-page">
    <div id="heading-homepage">
      <h1>Student individual information</h1>
    </div>
    <div id="student-info">
        <table>
          <tr>
            <th width="200">Student Name :</th>
            <td><?php echo $data['Name'];?></td><br>
          </tr>
            <tr>
            <th class="text-right" width="150">Email address :</th>
            <td><?php echo $data['Email'];?></td><br> 
          </tr>
          <tr>
            <th class="text-right" width="150">Class :</th>
            <td><?php echo $data["Class"];  $Class=$data["Class"];?></td><br>
          </tr>
          <tr>
            <th class="text-right" width="150">Roll number :</th>
            <td><?php echo $data["Roll_No"];?></td><br>
            
          </tr>

          <th class="text-right" width="150"><div id="subject-heading-2">Subject :</div></th>
              
          <div id="subject-info-2">
            <?php
            $result=$crud->fetch_subject_2($Class);
            while($data=$result->fetch(PDO::FETCH_ASSOC)){ ?>
            <td id="subject-td"><?php echo $data['Subject']; ?></td> 
          </div>             
              
              <?php }
              ?>
            
          <!-- </div> -->
        </table>
    </div>
</div>                                                                                               
</body>
</html>