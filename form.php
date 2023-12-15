<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="formstyle.css"/>
<script src="formscript.js"></script>
</head>
<body>
<div id="form-div">
<h1>Application Form</h1>
<form action="#" method="post">
<div>
<label>Name</label>
<input type="text" name="username"/>
</div>
<div>
<label>Select State</label>
<select onchange="fetchCities(this.value)">
<option>select state</option>
<option>Bihar</option>
<option>madhya pradesh</option>
<option>utter pradesh</option>
</select>
</div>
<div>
<label>select city</label>
<select id="cities">
<option>first select state</option>
</select>
</div>
<div>
<input type="submit" value="submit"/>
</div>
</form>
</body>
</html>