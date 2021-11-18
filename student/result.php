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
                    <a href="result.php?id=<?php echo $data['S_No']; ?>"><li id="li-3">Your Result</li></a><br>
                  </ul>
                  
                  <div id="li-4" class="dropup">
                  <i class="fa fa-fw fa-user"></i>  
                  <?php echo $data['Name']; ?>
                  <!-- <i class="bi bi-arrow-up-circle-fill"></i> -->
                  <!-- <i class="fas fa-arrow-circle-up"></i> -->

                  <div class="dropup-info">
                
                        <a class="dropup-content" href="#">Privacy & policy</a><br>
                         <a class="dropup-content" href="#">Help</a><br>
                        <a class="dropup-content" href="#">Settings</a><br>
                        <a class="dropup-content" href="homepage.php?id=<?php echo $data['S_No'];?>">Profile</a><br>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                        <a class="dropup-content" href="../index.php">Logout</a>
                    </ul>
                    </div>
                    </div>
            <!-- </nav> -->
        </div>
    </div>
    <div id="result-page">
        <div id="result-heading">
            <h1>Your Result</h1>
        </div>
        <table>
            <tr>
                <th>Subject</th>
                <th>Marks</th>
                <th>Grade</th>
            </tr>
        </table>
    </div>
    
</body>
</html>