

<script src="ajax_exp.js"></script>
<div class="container">
<div class="row" style="margin-bottom:3%" >
<h3 class="text-center">EMPLOYEE</h3>
</div>
<form class="form-horizontal" method="post" action="prac/insert_emp.php">
<div class="row">
<div class="col-lg-offset-1 col-lg-3 text-right">

<b>Name</b>
</div>
<div class="col-lg-5">
<input type="text" class="form-control" name="name" required="required"  /><br />
</div>
</div>
       
<div class="row">
<div class="col-lg-offset-1 col-lg-3 text-right"> 
<b>Service type</b>
</div>
<div class="col-lg-5">
<select name="s_name" class="form-control" id="s_name" onblur="select_patient(this.value)">
    			<option disabled selected>Select Service</option>
				<?php
				$adstr1=mysql_query("select * from main_service");
				while($adrow1=mysql_fetch_array($adstr1))
				{
					$id=$adrow1['s_name'];
					echo "<option value='$id'>$adrow1[s_name]	
					</option>"; 
					
					}
				?>
</select>


<br />
</div>
</div>


<div id="table">
<div class="row">
<div class="col-lg-offset-1 col-lg-3 text-right"> 

<b>Specialization</b>
</div>
<div class="col-lg-5">

<select name="service" class="form-control" id="service">
    			<option disabled selected>Select Service type first</option>
				<?php
				
				/*$sql=mysql_query("SELECT * FROM services");
				while($row=mysql_fetch_array($sql))
				{
				echo '<option value="'.$row['service'].'">'.$row['service'].'</option>';
				}				
*/
				?>
</select>


<br />
</div>
</div>
</div>


<div class="row">
<div class="col-lg-offset-1 col-lg-3 text-right">
<b>Contact</b> &nbsp;
</div>
<div class="col-lg-5">
<input type="number" required="required" name="contact"  class="form-control" /><br />
</div>
</div>




<div class="row" align="center">
<input type="submit" value="REGISTER" class="btn btn-lg" />
</div>
</form>
</div>

