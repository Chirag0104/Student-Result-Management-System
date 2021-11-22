<?php
    include'includes/header.php';
    include '../db/conn.php';
    
$id_2=$_GET['id'];

$detail=$crud->student_info($id_2);        

$data=$detail->fetch(PDO::FETCH_ASSOC);

?>

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
        <div id="student-info-button">
        <a class="btn btn-primary" href="students.php">Back To Students List</a>

    </div>

   