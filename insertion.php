<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="INSERT INTO book (title,price,author) VALUES('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>
<!DOCTYPE html >
<html>
<head>
<link rel="stylesheet" href="formstyle.css"/>
    <title>Insertion</title>
</head>
<body>
<div id="form-div">
    <h1> BOOK MANAGEMENT SYSTEM </h1>
	<p><?php
	      if($status==1)
			  echo "Record Inserted" ;
		  else 
			  echo "Insertion Failed" ;
		?>
	</p>
	Do you want to insert more records<a href="insertionForm.php">CLICK HERE</a>
	</div>
	</body>

</html>





