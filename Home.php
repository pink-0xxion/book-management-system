<?php 
 session_start();
    if(!isset($_SESSION['fname']))
	 header('location:http://localhost:8090/book/Login.php');
 ?>
 <!DOCTYPE html >
<html>
<head>
    <title>HOME PAGE</title>
	<link rel="stylesheet" href="formstyle.css"/>
	<link rel="stylesheet" href="./css/viewStyle.css" />
</head>
<body>
<div id="form-div">
 <h2>HELLO,<?php echo $_SESSION['fname'];?></h2>
    <h1> BOOK MANAGEMENT SYSTEM </h1>
	<a href="insertionForm.php">Insert Book</a><br/>
	<a href="view.php">View Book Records</a><br/>
	<a href="deleteForm.php">Delete Book Records</a><br/>
	<a href="updateForm.php">Update Book Records</a><br/>
	<a href="logout.php">Logout</a>
	</div>
</body>
</html>