<?php
include("nav.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<style>
body{
	background-color:#F0F0FF;
	}

</style>
<form method="post" action="attend2.php">
<div class="row" style="margin-top:40px;" >
<div class="col-lg-2">
</div>
<div class="col-lg-1">
<h4>Subjects</h4>
</div>
<div class="col-lg-5">

<select class="form-control" name="sub">
<?php
include("sess.php");

$str=mysql_query("select * from subname where dept='$_REQUEST[dept]' and year='$_REQUEST[year]'");

while($row=mysql_fetch_array($str))
{
	$no=1;
	while($no<=6)
	
	{
		$a=$row[sub.$no];
		
	echo "<option value='$a'>$a</option>";
	
	$no++;
	}
}
?>
</select>
<?php
echo "<input type='hidden' name='year' value='$_REQUEST[year]'>";
?>
</div></div>
<div class="btn-group"> 
<button type="submit" style="margin-left:500px; margin-top:40px;" class="btn btn-default">Submit</button></div></form>
</div>
</body>
</html>