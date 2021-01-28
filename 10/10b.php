<?php
 $con = mysqli_connect("localhost","root","", "iwt") or die(mysqli_error($con));
 $title = $_GET['sea'];
 $res1 = mysqli_query($con, "select * from book where tit='$title'");
 echo "<table border='1'>";
 echo "<tr><th>Accession
Number</th><th>title</th><th>authors</th><th>edition</th><th>publisher</th></tr>";
while($arr=mysqli_fetch_row($res1))
echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
 echo "</table>";
?>