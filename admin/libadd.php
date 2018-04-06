<?php
include("nav.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>

<style>
body{
	background-color:#F0F0FF;
	}

</style>

<div class="row">
<div class="col-lg-5"></div>
<div class="col-lg-7">
<h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">BASIC DETAILS -</h3><br /><br />
</div>

</div>
<form class="form-horizontal" action="addstud0.php" method="post">
<div class="row"><div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="acno">Book Access no</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="acno" placeholder="Enter Book Access no" name="acno"> </div>
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="date">Date of entry</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="date" placeholder="Enter Date of entry" name="date"></div></div><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="title">Title</label></div> <div class="col-lg-3"> <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="yr">Year</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="yr" placeholder="Enter Year" name="yr"></div></div><br />




<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="rack">Rack</label></div> <div class="col-lg-3"> <input type="text" class="form-control" id="rack" placeholder="Enter rack" name="rack"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="price">Price</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="price" placeholder="Enter price of book" name="price"> </div></div><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="noofcop">No of copies</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="noofcop" placeholder="Enter No of copies" name="noofcop"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="billno">Bill No</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="billno" placeholder="Enter Bill No" name="billno"> </div> </div><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1"><label for="billdate">Bill Date</label> </div><div class="col-sm-3"> <input type="date" class="form-control" id="billdate" placeholder="Enter bill date" name="billdate"> </div>



<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="publisher">Publisher</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="publisher" placeholder="Enter publisher" name="publisher"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="aurthor">Aurthor</label></div> <div class="col-sm-3"> <input type="aurthor" class="form-control" id="aurthor" placeholder="Enter aurthor" name="aurthor"> </div>



<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="subject">Subject</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject"> </div> </div><br />


<div class="row">
<div class="col-lg-8">
</div>
<div class="col-lg-4">
<input type="submit" class="btn" value="submit" /></div></div>
</form>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

