<head>
<script type="text/javascript" src="ajax_emp.js"></script>
</head>
<?php
mysql_connect("localhost","root","") or die("problem".mysql_error());
mysql_select_db("werender") or die("problem".mysql_error());
$x=$_REQUEST['x'];
?>



<div class="row">
<div class="col-lg-offset-1 col-lg-3 text-right"> 

<b>Specialization</b>
</div>
<div class="col-lg-5">
<!--<select name="service" class="form-control" id="service">
    			<option disabled selected>Select Service</option>-->
				<?php
				
				$sql=mysql_query("SELECT * FROM services where s_type='$x'");
				while($row=mysql_fetch_array($sql))
				{
					echo $row['service']."<input type='radio' name='service' value='$row[service]'>";
				//echo '<option value="'.$row['service'].'">'.$row['service'].'</option>';
				}				

				?>
<!--</select>-->


<br />
</div>
</div>

