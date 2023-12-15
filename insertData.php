<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="INSERT INTO user (fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>
<!DOCTYPE html >
<html>
<head>
    <title>Insertion</title>
	<link rel="stylesheet" href="formstyle.css"/>
</head>
<body>
<div id="form-div">
    <h1> BOOK MANAGEMENT SYSTEM </h1>
	<p><?php
	      if($status==1)
			  echo "you are successfully Registered" ;
		  else 
			  echo "not registered" ;
		?>
	</p>
	<button><a style="text-decoration:none" href="login.php">login</a></button>
	</div>
	</body>
</html>





