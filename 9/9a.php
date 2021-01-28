<?php
$con=mysqli_connect("localhost","root","","iwt") ; //or die(mysqli_error($con));
$name=$_GET['name1'];
$addr1=$_GET['addr1'];
$addr2=$_GET['addr2'];
$email=$_GET['email11'];
echo "Hello ". $name;
$query="insert into student values('$name','$addr1','$addr2','$email')";
mysqli_query($con,$query); //or die(mysqli_error($con));
echo "Inserted";
?>