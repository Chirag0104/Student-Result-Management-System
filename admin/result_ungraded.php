<?php 
session_start();
 include("includes/header.php");
  include("../db/conn.php");
  $sql="select exam.*,subject.name as subjectname,class.name as classname,students.name,students.roll,students.id as s_id
from exam,subject,class,students
where (marks=0 AND grade='not graded') AND exam.sub_id=subject.id AND subject.c_id=class.id AND class.id=students.c_id;";
$result=mysqli_query($conn,$sql);
  ?>

 <br><br><br><br><br>
<div class="container">
	<h1 class="text-center">All exams</h1>
	<br><br> 
	 <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success">
            <strong>Updated successfully! </strong>
          </div>
        <?php } ?>
          <table class="table">
            <thead>
              <th>Exam ID</th>
              <th>Class</th>
              <th>Roll</th>
              <th>Student name</th>
              <th>Subject</th>
              
              <th class="text-center">Actions</th>
            </thead>
            <tbody>
              <?php 
                 while($row=mysqli_fetch_assoc($result))
                 {?>
              <tr>
              	<td><?php echo $row['id']?></td>
                <td><?php echo $row['classname']?></td>
                <td><?php echo $row['roll']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['subjectname']?></td>
                

                <td class="text-center">
                  <a class="btn btn-info mb-2" href="mark.php?id=<?php echo $row['id'];?>"><i class="fa fa-eye"></i>
                  mark</a>
                
                </td>

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
      </div>

         <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
  </body>
  </html>

  
    <?php unset($_SESSION['success']); ?>