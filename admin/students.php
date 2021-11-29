<?php
    include 'includes/header.php';
    include '../db/conn.php';
    $details=$crud->students_data();        

?>

<div id="students-heading">
    <h2>All Students</h2>
</div>

<div id="student-table">
    <table id="admin-student-table">
  
        <thead>
            <th>Roll No.</th>
            <th>Name</th>
            <th>Class</th>
            <th id="actions">Actions</th>
        </thead>

        <tbody>
            <?php while($data=$details->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td><?php echo $data['Roll_No'];?></td>
                <td><?php echo $data['Name'];?></td>
                <td><?php echo $data['Class'];?></td>
                <td class="text-center">
                    <a class="btn btn-info mb-2" href="student-info.php?id=<?php echo $data['S_No'];?>"><i class="fa fa-eye"></i> View  </a>
                    <a class="btn btn-danger mb-2" onclick="return confirm('Are you sure?')" href="delete_student.php?id=<?php echo $data['S_No'];?>"><i class="fa fa-trash"></i> Delete  </a>
                    <a class="btn btn-warning mb-2" href="edit.php?id=<?php echo $data['S_No'];?>"><i class="fa fa-pencil"></i> Edit  </a> 
                </td>
                <?php }
                ?>
            </tr>
        </tbody>
    </table>
</div>

<div id="class-button">    
    <a class="btn btn-primary " href="dashboard.php">Back To Dashboard</a>
</div>

