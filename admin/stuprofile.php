<?php
include("nav.php");
?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<body>
<style>
body{
	background-color:#F0F0FF;
	}

</style><div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-5">
<form action="#" method="post">
<div class="form-group"><select class="form-control" name="dept"><option value="">select</option> 
<option value="Electrical Engg">Electrical Engg</option>
<option value="Mechanical Engg">Mechanical Engg</option>
<option value="Civil Engg">Civil Engg</option>
<option value="Electronics and Communication Engg">Electronics and Communication Engg</option>
<option value="Computer science Engg">Computer science Engg</option>
<option value="Information Technology">Information Technology</option>
<option value="Production Engg">Production Engg</option>
</select></div>
<input type="submit" name="submit" style="margin-left:200px;" />
</form></div></div>
<div class="container">
<table border="1">
<table class="table table-striped">
 <thead>

<?php
include("sess.php");
if(isset($_REQUEST['submit']))
{
  $str=mysql_query("select * from form where dept='$_REQUEST[dept]'");
  echo"
<tr>
<th>Name</th>
<th>Father's Name</th>
<th>Department</th>
<th>University Roll NO</th>
<th>Class Roll No</th>
</tr>
";
?>
</thead>
<?php
while($row=mysql_fetch_array($str))
{ 
echo"
<tr>
<td><a href='displayform2.php?a=$row[sno]'>$row[name]</a></td>
<td>$row[fatname]</td>
<td>$row[dept]</td>
<td>$row[urollno]</td>
<td>$row[crollno]</td>
</tr>";
}}
//header("location:stuprofile1.php");
?>
</table></table>
</div>
</body></html>


<!--echo"
<tr>
<th>Name</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>GENDER</th>
<th>Department</th>
<th>Phone No</th>
<th>University Roll NO</th>
<th>Class Roll No</th>
<th>Address</th>
<th>D.O.B</th>
<th>Email</th>
<th>Admission Date</th>
<th>Admission type</th>
<th>Father's income</th>
<th>Father's Qualification</th>
<th>Father's Occupation</th>
<th>Mother's income(p.a.)</th>
<th>Mother's Qualification</th>
<th>Mother's Occupation</th>
<th>Height</th>
<th>Blood group</th>
<th>Weight</th>
<th>Any Disease</th>
</tr>
";



echo"
<tr>
<td>$row[name]</td>
<td>$row[fatname]</td>
<td>$row[motname]</td>
<td>$row[gender]</td>
<td>$row[dept]</td>
<td>$row[phno]</td>
<td>$row[urollno]</td>
<td>$row[crollno]</td>
<td>$row[add]</td>
<td>$row[dob]</td>
<td>$row[email]</td>
<td>$row[admdate]</td>
<td>$row[admtype]</td>
<td>$row[fatinc]</td>
<td>$row[fatqual]</td>
<td>$row[fatoccup]</td>
<td>$row[motinc]</td>
<td>$row[motqual]</td>
<td>$row[motoccup]</td>
<td>$row[height]</td>
<td>$row[bloodg]</td>
<td>$row[weight]</td>
<td>$row[disease]</td>
</tr>";-->