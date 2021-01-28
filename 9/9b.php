<?php
$con=mysqli_connect("localhost","root","","iwt"); //or die(mysqlierror($con));
$name=$_GET['name1'];
$res=mysqli_query($con,"select * from student where name='$name'");
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Address1</th><th>Address2</th><th>Email</th></tr>";
while($arr=mysqli_fetch_row($res))
	echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td></tr>";
echo "</table>";
?>