<!DOCTYPE html >
<html>
<head>
<link rel="stylesheet" href="formstyle.css"/>
    <title>Insertion Form</title>
</head>
<body>
<div id="form-div">
    <h1> BOOK MANAGEMENT SYSTEM </h1>
	
	<form action="insertion.php" method="post" >
	 <table>
	 <tr>
	 <th>Title</th>
	 <td><input type="text" name="title" required ></td>
	 </tr>
	 <tr>
	 <th>Price</th>
	 <td><input type="text" name="price" required ></td>
	 </tr>
	 <tr>
	 <th>Author</th>
	 <td><input type="text" name="author" required ></td>
	 </tr>
	 <tr>
	 <td><input type="submit" value="insert" ></td>
	 </tr>
	 </table>

	 
	 
	 
	</form>
	</div>

</body>
</html>
