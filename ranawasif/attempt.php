<?php
$db='webauth';
$lh='localhost';
$us='root';
$ps='';
$a=$_POST['name'];
$b=$_POST['pass'];
$mysqli = new mysqli($lh , $us, $ps, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); }
$abc="SELECT * FROM `admin` where name='$a'";
$a123=$mysqli->query($abc);
$count=mysqli_num_rows($a123);
if($count==1)
print "<script>document.location.href='login.php' ;</script>";

else
print "<script>alert('Wrong Entries');</script>";
print "<script>document.location.href='admin.html' ;</script>";

?>