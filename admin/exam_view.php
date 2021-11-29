<?php 

include("includes/header.php");
include("../db/conn.php");

?>

<div id="declare-heading">
  <h1>Declare Result</h1>
</div>

<form action="result.php" method="POST" id="declare-result-form">
           
      <label for="class"><h5>Class :</h5></label>
      <select name="class" class="form-control " id="classid" onchange='if(this.value != 0) { this.form.submit(); }'>
        <option value="0">Select a Class</option>
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
     
</form>






