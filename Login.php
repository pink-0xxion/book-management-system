<!DOCTYPE html>
<html>
<head>
<title>Login Window</title>
<link rel="stylesheet" href="formstyle.css"/>
</head>
<body>

<div id="form-div">
<h1>Login Window</h1>
<form action="validation.php" method="post">
 <table>
 <tr>
 <td>email</td>
 <td><input type="text" name="email" /></td>
 </tr>
 <tr>
 <td>password</td>
 <td><input type="password" name="password" /></td>
 </tr>
 </table>
 <input type="submit" value="Login" />
 <button><a style="text-decoration:none" href="registration.php">Register</a></button>
 </form>
 </div>
</body>
</html>