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
body
{
	background-color:#F0F0FF;
}
</style>
<br /><br />

<div class="container">
<h4>Total Marks=100</h4><br /><br />
<table border="1">

<table class="table table-striped">
 <thead>
<?php
include("sess.php");
$sub1=$_REQUEST['sub1'];
$ext=$sub1."ext";
$int=$sub1."int";
$dept=$_REQUEST['dept'];
$str=mysql_query("select * from $dept");
echo"
<tr>
<th>Name</th>
<th>Univ rollno</th>
<th>$ext</th>
<th>$int</th>

</tr>
";?>
</thead>
<?php
while($row=mysql_fetch_array($str))
{ 
echo"
<tr>
<td>$row[name]</td>
<td>$row[urollno]</td>
<td>$row[$ext]</td>
<td>$row[$int]</td>
</tr>";
}
?>
</table></table></div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>