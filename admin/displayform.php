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

</style>
<div class="container">
<table border="1">

<table class="table table-striped">
 <thead>
<?php
include("sess.php");
$str=mysql_query("select* from form");
echo"
<tr>
<th>Name</th>
<th>Father's Name</th>
<th>Department</th>
<th>University Roll NO</th>
<th>Class Roll No</th>
</tr>
";?>
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
}
?>
</table></table></div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>