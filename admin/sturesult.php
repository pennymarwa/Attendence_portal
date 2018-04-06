<?php
include("nav.php");
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
<style>
body{
	background-color:#F0F0FF;
	}

</style>
<form method="post" action="sturesult1.php">
  <div class="row" style="margin-top:100px;" >
    <div class="col-lg-2"> </div>
    <div class="col-lg-1">
      <h4>Department</h4>
    </div>
    <div class="col-lg-5">
      <div class="form-group">
        <select class="form-control" name="dept">
          <option value="">select</option>
          <option value="Electrical Engg">Electrical Engg</option>
          <option value="Mechanical Engg">Mechanical Engg</option>
          <option value="Civil Engg">Civil Engg</option>
          <option value="Electronics and Communication Engg">Electronics and Communication Engg</option>
          <option value="Computer science Engg">Computer science Engg</option>
          <option value="Information Technology">Information Technology</option>
          <option value="Production Engg">Production Engg</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top:40px;" >
    <div class="col-lg-2"> </div>
    <div class="col-lg-1">
      <h4>Year</h4>
    </div>
    <div class="col-lg-5">
      <select class="form-control" name="year">
        <option value="">select</option>
        <option value="1yr">1yr</option>
        <option value="2yr">2yr</option>
        <option value="3yr">3yr</option>
        <option value="4yr">4yr</option>
      </select>
    </div>
  </div>
  <div class="btn-group">
    <button type="submit" style="margin-left:500px; margin-top:40px;" class="btn btn-default">Submit</button>
  </div>
</form>
</body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>