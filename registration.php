<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<script >
function validate()
{
	var result=true;
	var e=document.getElementsByName("email")[0].value;
	var atindex=e.indexOf('@');
	var dotindex=e.lastIndexOf('.');
	if(atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
		result=false;
	return(result);
}
</script>
<link rel="stylesheet" href="regis.css"/>
</head>
<body>

<form onsubmit="return validate()"  action="insertData.php" method="post">
<td>Registration Window</td>
 <table id="t">
 
 <tr>
 <td>Firstname</td>
 <td><input type="text" name="fname" required /></td>
 </tr>
 <tr>
 <td>laststname</td>
 <td><input type="text" name="lname"  required /></td>
 </tr>
 <tr>
 <td>email</td>
 <td><input   type="text" name="email" required /></td>
 </tr>
 <tr>
 <td>password</td>
 <td><input type="password" name="password" required /></td>
 </tr>
 <tr>
  <td><input type="submit" value="Register" /></td>
 </tr>
 </table>
 
 </form>
 
</body>
</html>