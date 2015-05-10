<html>
<head>
<link href="s.css" type="text/css" rel="stylesheet">
</head>
<style>
body{
text-align:center;
font-family:'Trebuchet MS';
font-size:30px;
}
</style>
<body>
<img src="logo.png" class="imga">
<div class="bum">
<ul>
<div class="abbu">
<a href="s.html">Home</a>
</div>
</ul>
<ul><div class="abbu">
<a href="doctor.html">Doctors</a>
</div>
</ul>
<ul>Employees<div class="bo"></div>
<div class="abbu">
<li><a href="admin.html">Administrator</a></li>
</div>
</ul>
</div>
<div class="bob">
</div>
<div class="wra">
<?php
$db='webauth';
$lh='localhost';
$us='root';
$ps='';
$a=$_POST['name'];
$b=$_POST['fname'];
$c=$_POST['dob'];
$d=$_POST['pass'];
$mysqli = new mysqli($lh , $us, $ps, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); }
$q = "INSERT INTO `admin`(name,fname,dob,pass) VALUES ('$a','$b','$c','$d')";
$mysqli->query($q);
echo 'Added Successfully'."<br>";

//mysqli_close();
?>
<input type="button" class="bhai" onclick="parent.location='admin.html'" value="Go Back">
</div>
</body>
</html>
