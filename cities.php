<?php 
$state=$_GET['state'];
$c1=array('patna');
$c2=array('bhopal','indore','jabalpur');
$c3=array('kanpur','agra','lucknow');

if($state=="Bihar")
{
	foreach($c1 as $c)
	 echo"<option>$c</option>";
}

else if($state=="madhya pradesh")
{
	foreach($c2 as $c)
	 echo"<option>$c</option>";
}

else if($state=="utter pradesh")
{
	foreach($c1 as $c)
	 echo"<option>$c</option>";
}
else 
	echo "<option>first select state</option>";

?>