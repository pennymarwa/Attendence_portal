<?php
include("facnav.php");
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
<div class="col-lg-1"></div>
<div class="col-lg-7"><h3 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">BASIC DETAILS -</h3></div></div><br /><br />
</div>
<form class="form-horizontal" action="facform1.php" method="post">
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="salut">Salutation</label>
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="salut"><option value="">select</option> 
<option value="mr">Mr</option>
<option value="mrs">Mrs</option>
<option value="dr">Dr</option>
</select>
</div></div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="marrital">
Maritial Status</label></div>
<div class="col-lg-1">	
Single<input type="radio" name="marrital" value="single" /></div><div class="col-lg-1">
Married<input type="radio" name="marrital" value="marrid" /></div><div class="col-lg-1">
Divorced<input type="radio" name="marrital" value="divorced" /></div><div class="col-lg-1">
Widow<input type="radio" name="marrital" value="widow" /></div></div>
<br />
<br />



<div class="row"><div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="firstname">First Name</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="firstname" placeholder="Enter first Name" name="firstname"> </div>
<div class="col-lg-1"></div>

<div class="col-lg-1">
<label for="fatname">Father/Husband's Name</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="fatname" placeholder="Enter fater's Name" name="fatname"></div></div><br /><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="middname">Middle Name</label></div> <div class="col-lg-3"> <input type="text" class="form-control" id="middname" placeholder="Enter middle name" name="middname"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="dob">D.O.B</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="dob" placeholder="Enter date of birth(dd/mm/yy)" name="dob"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="lname">Last Name</label></div> <div class="col-lg-3"> <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="motname"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="gender">
Gender</label></div>
<div class="col-lg-1">
Male<input type="radio" name="gender" value="male" /></div><div class="col-lg-1">
Female<input type="radio" name="gender" value="female" /></div></div>
<br />
<br />



<div class="row">

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="phno">Phone No</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="phno" placeholder="Enter phone number" name="phno"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1"><label for="add">Address</label> </div><div class="col-sm-3"> <input type="text" class="form-control" id="add" placeholder="Enter address" name="add"> </div></div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="email">Email</label></div> <div class="col-sm-3"> <input type="email" class="form-control" id="email" placeholder="Enter email id" name="email"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="joindate">Joining Date</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="joindate" placeholder="Enter date of join(dd/mm/yy)" name="joindate"></div></div><br /><br />

<div class="row">
<div class="col-lg-8">
</div>
<div class="col-lg-4">
<input type="submit" class="btn" value="next" /></div></div>
</form>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

