<head>
<script type="text/javascript" src="ajax_post.js"></script>
</head>
<?php
$x=$_REQUEST['x'];
if($x=="yes")
{
?>


<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="pgdept">Department</label>
</div>
<div class="col-lg-3">
<div class="form-group"><select class="form-control" name="pgdept"><option value="">select</option> 
<option value="Electrical Engg">Electrical Engg</option>
<option value="Mechanical Engg">Mechanical Engg</option>
<option value="Civil Engg">Civil Engg</option>
<option value="Electronics and Communication Engg">Electronics and Communication Engg</option>
<option value="Computer science Engg">Computer science Engg</option>
<option value="Information Technology">Information Technology</option>
<option value="Production Engg">Production Engg</option>
<option value="other">Other</option>
</select>
</div></div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="pgcourse">Course</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="pgcourse" placeholder="Enter course choosen" name="pgcourse"> </div></div><br /><br />

<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="pgyr">Year of passing out</label></div> <div class="col-sm-3"> <input type="date" class="form-control" id="pgyr" placeholder="Enter Year of passing out" name="pgyr"> </div>

<div class="col-lg-1"></div>
<div class="col-lg-1">
<label for="pgaggr">Aggregate %age obtained</label></div> <div class="col-sm-3"> <input type="text" class="form-control" id="pgaggr" placeholder="Enter Aggregate %age obtained" name="pgaggr"> </div> </div><br /><br />







<?php

}
else
{
}
?>