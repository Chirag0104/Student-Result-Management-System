<?php 

include("includes/header.php");
include("../db/conn.php");
$details=$crud->view_result();

?>

<div id="class-heading">
    <h1>All Results</h1>
</div>

<div id="class-table">
    <table>
        <tr>
            <th>Class</th>
            <th>Name</th>
            <th>Aggregate Marks </th>
            <th>Percentage</th>

        </tr>
        <br><br><br>

        <?php while($data=$details->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <td>
                <?php echo $data['Class'];  ?>
            </td>  
                                 
            <td>
                <?php echo $data['Name']; ?>
            </td>
            
            <td>   
                <?php 
                $Name=$data['Name'];
                $Class=$data['Class'];
                $detail=$crud->aggregate_result($Name,$Class);
                while($row=$detail->fetch(PDO::FETCH_ASSOC)){  ?>
                <?php echo $row['Total_Marks']; ?>
            </td>

            <td>
                <?php echo ($row['Total_Marks'])/5; ?> 
            </td>
                
            <?php } ?>
            <?php }
            ?>
        </tr>

    </table>
</div>

<div id="class-button">      
    <a class="btn btn-primary " href="dashboard.php">Back To Dashboard</a>
</div>