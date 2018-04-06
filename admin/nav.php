<?php
session_start();
error_reporting(0);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	background-color:#000;
}
menu
{
	color:#FFF;
	}
</style>
</div>
</div>
<div class="row">
<div class="col-lg-12" style="color:#FFF;">
<ul class="nav nav-justified" id="menu" style="background-color:#000;">
  
  
  
<?php
if($_SESSION['abc']=="admin")
{

?>
<li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculity<span class="caret"></span> </a>
 <ul class="dropdown-menu">
  <li><a href="facform.php">Add faculity member</a></li>  </ul></li>
	 
 <li><a href="#">Library</a></li>
<li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student<span class="caret"></span> </a>
 <ul class="dropdown-menu">
  <li><a href="addstud.php">Add student</a></li> 
  <li><a href="attend.php">Atendence</a></li>
  <li><a href="stuprofile.php">Check student profile </a></li>
   <li><a href="sturesult.php">Results</a></li>
   <li><a href="upstu.php">Upgrade</a></li>
  </ul></li>
   <li><a href="logout.php">Logout</a></li> 
 <?php
}
 
 ?>
 
 <?php
if($_SESSION['abc']=="faculity")
{

?>
<li><a href='facnav.php'>Faculity</a></li>  
<li> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student<span class="caret"></span> </a>
 <ul class="dropdown-menu">
  <li><a href="addstud.php">Add student</a></li> 
  <li><a href="attend.php">Atendence</a></li>
  <li><a href="stuprofile.php">Check student profile </a></li>
     <li><a href="sturesult.php">Results</a></li>
  </ul> </li>
   <li><a href="logout.php">Logout</a></li> 
 <?php
}
 
 ?>
 
 <?php
if($_SESSION['abc']=="student")
{

?>
 <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student<span class="caret"></span> </a>
 <ul class="dropdown-menu"> 
  <li><a href="checkattend.php">Atendence</a></li>
  <li><a href="stuprofile.php">Check student profile </a></li>
  </ul></li>
   <li><a href="logout.php">Logout</a></li>  
 <?php
}
 
 ?>

   </ul>
   </div>
   </div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>