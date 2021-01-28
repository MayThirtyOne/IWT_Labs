<?php
$con = mysqli_connect("localhost","root","", "iwt") or die(mysqli_error($con));
$acn=$_GET['acn'];
$title=$_GET['tit'];
$aut=$_GET['aut'];
$edi=$_GET['edi'];
$pub=$_GET['pub'];
$query="insert into book values('$acn','$title','$aut','$edi','$pub')";
mysqli_query($con, $query) or die(mysqli_error($con));
echo "INSERTED Book Details";
?>