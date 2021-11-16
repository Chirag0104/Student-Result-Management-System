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
    
</head>
<body>


<?php

include '../db/conn.php';

$id_2=$_GET['id'];

$detail=$crud->student_info($id_2);

$data=$detail->fetch(PDO::FETCH_ASSOC);


?>
    <div id="sidenav">
        <div id="element">
            <!-- <nav id="navbar"> -->
                <ul>
                    <!-- <i class="fas fa-bars"></i> -->
                    <li id="li-1">Menu</li><br>
                    <a href="homepage.php?id=<?php echo $data['S_No'];?>"><li id="li-2">Your Profile</li></a><br>
                    <a href="result.html"><li id="li-3">Your Result</li></a><br>
                    <li id="li-4"><i class="fa fa-fw fa-user"></i>Chirag</li>
                </ul>
            <!-- </nav> -->
        </div>
    </div>

    <div id="student-information">
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
                  <td><?php echo $data["Class"];?></td><br>
                </tr>


               <tr>
                <th class="text-right" width="150">Roll number :</th>
                <td><?php echo $data["Roll_No"];?></td><br>
                
              </tr>

               <tr>
                <th class="text-right" width="150">Subject :</th>
                <td>hello</td>               
               </tr>
</table>
        </div>                                                                                               

    </div>


</body>
</html>