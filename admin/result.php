<?php 

include("includes/header.php");
include("../db/conn.php");
if(isset($_POST['class'])){
    $Class=$_POST['class'];
}

$detail=$crud->fetch_student($Class); 
$result=$crud->fetch_subject($Class); 

?>

<div id="declare-heading">
  <h1>Declare Result</h1>
</div>

<form action="addresult.php" method="POST" id="declare-result-form">
           
    <label for="class"><h5>Class :</h5></label>
    <select name="class" class="form-control class-result " id="classid"  >
    <option value="<?php echo $Class ?>"><?php echo $Class ?></option>
    </select>
    <label for="name"><h5>Student Name :</h5></label>
    <select name="name" class="form-control " id="SName" required>
        <option value="">Select Name</option>
    <?php
    while($count=$detail->fetch(PDO::FETCH_ASSOC)){ ?>     
        <option value="<?php echo $count['Name'] ?>" ><?php echo $count['Name'] ?></option>    
        <?php     
        }  ?>
    
    </select><br>
    <div id="subject-result">
        <div id="subject-head">
            <label for="subject" id="subject-label"><h5>Subject :</h5></label><br><br>
        </div>
        <div id="subject-detail">
            <?php
            // $name=1;
            $n=0;
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
            // for($n=0;$n<3;$n++){           
            ?> 

            <input type="hidden" class="subject" id="subject-label" name='subject_<?php echo $n ?>' value="<?php echo $row['Subject'] ?>">
            <label for="subject" id="subject-label"><?php echo $row['Subject'] ?></label><br>   
            <input type="number" class="marks form-control" id="marks" name="marks_<?php echo $n; $n=$n+1;  ?>"  required><br>  
            <?php    
            }  ?>
            <input type="hidden" name='value' value="<?php echo $n ?>">
        </div>
    </div>
    <input id="button-8" type="submit" class="btn btn-primary" value="Submit" name="submit">
</form>