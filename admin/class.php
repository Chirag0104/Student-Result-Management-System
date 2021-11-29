<?php

session_start();
include '../db/conn.php';
include'includes/header.php';
$details=$crud->class_count();

?>

<div id="class-heading">
    <h1>All Classes</h1>
</div>

<div id="class-table">
    <table>
        <tr>
            <th>Class</th>
            <th>No. Of Students</th>
        </tr>

        <?php while($data=$details->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td>
                    <?php echo $data['Class'];  ?>
                </td>  

                <?php            
              
                    $class=$data['Class'];                   
                    $student_count=$crud->student_count($class);
                    while($count=$student_count->fetch(PDO::FETCH_ASSOC)){ ?>                
                    <td>
                        <?php echo $count['COUNT(Class)']; ?>
                    </td>           
                    <?php
                    $class=$class-1;}      
                ?> <br>  

                <?php }
                ?>

            </tr>
    </table>
</div>

<div id="class-button">   
    <a class="btn btn-primary " href="dashboard.php">Back To Dashboard</a>
</div>

