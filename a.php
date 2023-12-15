<!DOCTYPE html>
<html>
<head>
<title>Registrtion</title>
<script >
function validator()
{
	var result=true;
	var e=document.getElementByName("email")[0].value;
	var atindex=e.indexOf('@');
	var dotindex=e.lastIndex('.');
	if(atindex<1 || dotindex>=e.length || dotindex-atindex<3)
		result=false;
	return(result);
}
</script>
</head>
<body>
<h2>Registration Window</h2>
<form onsubmit="return validator()" >
  Emailid<input   type="text" name="email" required />
  <input type="submit" value="Register" />
 </form>
</body>
</html>