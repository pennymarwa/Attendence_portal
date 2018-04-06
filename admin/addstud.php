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
<label for="name">Name</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"> </div>
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="fatname">Father's Name</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="fatname" placeholder="Enter fater's Name" name="fatname"></div></div><br /><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="motname">Mother's Name</label></div> <div class="col-lg-3"> <input type="text" class="form-control" id="motname" placeholder="Enter mother's name" name="motname"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="gender" class="col-lg-1 control-label">
GENDER</label></div>
<div class="col-lg-1">
Male<input type="radio" name="gender" value="male" /></div><div class="col-lg-1">
Female<input type="radio" name="gender" value="female" /></div></div>
<br />
<br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<h5>Department</h5>
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="dept"><option value="">select</option> 
<option value="Electrical Engg">Electrical Engg</option>
<option value="Mechanical Engg">Mechanical Engg</option>
<option value="Civil Engg">Civil Engg</option>
<option value="Electronics and Communication Engg">Electronics and Communication Engg</option>
<option value="Computer science Engg">Computer science Engg</option>
<option value="Information Technology">Information Technology</option>
<option value="Production Engg">Production Engg</option>
</select>
</div></div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="phno">Phone No</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="phno" placeholder="Enter phone number" name="phno"> </div></div><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="urollno">University Roll NO</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="urollno" placeholder="Enter university roll no" name="urollno"> </div>


<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="crollno">Class Roll No</label></div> <div class="col-sm-3"> <input type="number" class="form-control" id="crollno" placeholder="Enter class roll no" name="crollno"> </div> </div><br />



<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1"><label for="add">Address</label> </div><div class="col-sm-3"> <input type="text" class="form-control" id="add" placeholder="Enter Name" name="add"> </div>



<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="dob">D.O.B</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="dob" placeholder="Enter date of birth(dd/mm/yy)" name="dob"> </div> </div><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="email">Email</label></div> <div class="col-sm-3"> <input type="email" class="form-control" id="email" placeholder="Enter email id" name="email"> </div></div>





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

