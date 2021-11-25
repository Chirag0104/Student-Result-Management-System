<?php


include'includes/header.php';
include '../db/conn.php';

    session_start();

    if(isset($_POST['submit'])){
        $Random=$_POST['randcheck'];
        if($Random==$_SESSION['rand']){
        $SName=$_POST['subject'];
        $Class=$_POST['class'];
        $isSuccess = $crud->subject_data($SName,$Class);}}

    $detail=$crud->fetch_data();
?>

<br><br><br><br><br>
<div class="container">
	<div class="row">
        	<div class="col-5">
	<h1 class="text-center">All subjects</h1>
	<br><br> 
  <?php if(isset($_SESSION['suc'])){?>
          <div class="alert alert-success mt-5">
            <strong>Sucessfully deleted the subject</strong>
          </div>
           <?php }?>

	
          <table class="table">
            <thead>
              
              <th>Class</th>
              <th>Subject</th>
              <th>Action</th>
             
            </thead>
            <tbody>
            <?php 
                 while($row=$detail->fetch(PDO::FETCH_ASSOC))
                 {?>
              <tr>
              	<td><?php echo $row['Class']; ?></td>
                <td><?php echo $row['Subject']; ?></td>
                 <td class="text-center">
                   <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure?')" href="delete-subject.php?subject=<?php echo $row['Subject']?>&class=<?php echo $row['Class'] ?>"><i class="fa fa-trash"></i> Delete  </a>
                 </td>
                

              </tr>

                <?php  }
                ?>
            </tbody>
          </table>
      </div>
      <div class="col-2"></div>
      <div class="col-5">
      	<h1>Add subjects</h1><br><br>
      	 <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success">
            <strong>Subject added successfully! </strong>
          </div>
        <?php } ?>
      	<form action="subject.php" method="POST">
          <?php
                $rand=rand();
                $_SESSION['rand']=$rand;
            ?>
      		<div class="form-group">
              <input type="hidden" value="<?php echo $rand; ?>" name='randcheck' />
              <label>Subject Name :</label>
              <input required type="text" class="form-control" name="subject" placeholder="Subject name">
            </div><br>
            <div class="form-group">
              <label>Class :</label>
              <select name="class" class="form-control" required>
              	<option value="select">Select a class</option>
              	<option value="1">1</option>
              	<option value="2">2</option>
              	<option value="3">3</option>
              	<option value="4">4</option>
              	<option value="5">5</option>
              	<option value="6">6</option>
              	<option value="7">7</option>
              	<option value="8">8</option>
              	<option value="9">9</option>
              	<option value="10">10</option>
                  <option value="11">11</option>
              	<option value="12">12</option>

              </select> 
            </div><br><br>
             <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
      	</form>
      </div>
  </div>
      </div>

      <div id="class-button">   
        
        <a class="btn btn-primary " href="dashboard.php">Back To Dashboard</a>

    </div>

      
  </body>
  </html>


<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['suc']); ?>