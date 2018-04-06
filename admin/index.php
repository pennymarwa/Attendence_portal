<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<body>
<div class="container">
<style>
form 
{
	margin-top:100px;
	
	}
	body
	{
		background-color:#303;
		font-family:Verdana, Geneva, sans-serif;
		color:#CFF;
		}
</style>
<form class="form-horizontal" action="index1.php" method="post">
<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-1"><h4>Choose</h4></div>
<div class="col-lg-8">
<div class="form-group"><select class="form-control input-lg" name="id"><option value="">select</option> 
<option value="admin">admin</option>
<option value="faculity">faculity</option>
<option value="library">library</option>
</select>
</div></div></div>


<div class="row">
<label for="pass" class="col-sm-3 control-label">Password</label> <div class="col-sm-8"> <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="pass"> </div> </div><br />

<div class="form-group"> <div class="col-sm-offset-3 col-sm-8"> <button type="submit" class="btn btn-default">Submit</button> </div> </div> </div></form>

<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>