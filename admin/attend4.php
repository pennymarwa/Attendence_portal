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
<table border="1">

<table class="table table-striped">
 <thead>
<?php
include("sess.php");
$sub1=$_REQUEST['sub1'];
$dept=$_REQUEST['dept'];
$str=mysql_query("select* from $dept");
echo"
<tr>
<th>Name</th>
<th>Univ rollno</th>
<th>$sub1</th>

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
<td>$row[$sub1]</td>
</tr>";
}
?>
</table></table></div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body></html>