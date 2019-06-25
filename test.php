<!DOCTYPE html>
<html>
<?php {
	if(isset($_GET['submit'])){
		$username=$_GET['name'];
		$email=$_GET['email'];
		$password=$_GET['password'];
		echo $username;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $password;
			}
date_default_timezone_set('Asia/kolkata');			
echo "<br>";
echo date('h:i:s a');
echo "<br>";
echo date('d-m-y-l');
echo "<br>";
echo date_default_timezone_get();	
$time=mktime(10,20,45,6,25,99);
echo "<br>";
echo $time;	
echo "<br>";
echo date('d-m-y-l  h:i:s', $time);	
echo "<br>";
$t2= strtotime('+1 Months');
echo date('d-m-y-l', $t2);	
echo "<br>";
}
?>
<head>
	<title>FORM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<center>
	<div class="form-row container">
<form class="col-md-6" method="GET" action="test.php"> 

    <div class="form-group">
			<label> NAME </label>
			<input type="text" name="name" class="form-control ">
	</div>
	<div class="form-group">
			<label> EMAIL </label>
			<input type="email" name="email" class="form-control ">
	</div>
	<div class="form-group">		
			<label> PASSWORD</label>
			<input type="password" name="password" class="form-control ">
	</div>
		    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>			

<form class="col-md-6">

    <div class="form-group">
			<label> NAME </label>
			<input type="text" name="name" class="form-control ">
	</div>
	<div class="form-group">
			<label> EMAIL </label>
			<input type="email" name="email" class="form-control ">
	</div>
	<div class="form-group">		
			<label> PASSWORD</label>
			<input type="password" name="password" class="form-control ">
	</div>
		    <button type="submit" class="btn btn-primary">Submit</button>
 
 </form>
</div>
</center>			
</body>
</html>