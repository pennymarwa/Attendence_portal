<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<body>
<div class="row" id="heading">
<div class="col-lg-12">
<h1><b>&nbsp;&nbsp;&nbsp;&nbsp;ABC College</b></h1>
<style>
#heading
{
	color:#FFF;
	font-family:"MS Serif", "New York", serif;
	background-color:#66C;
}
body{
	background-color:#F0F0FF;
	}
</style>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<ul class="nav nav-pills nav-justified" id="menu">
 
<li><a href="checkattend.php">Attendence</a></li>  
<li><a href="sturesult.php">Results</a></li>
<li><a href="#">Notes</a></li>
<li><a href="stulogout.php">Logout</a></li> 
</ul></div></div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>