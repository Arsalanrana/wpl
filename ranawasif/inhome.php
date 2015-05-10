<!DOCTYPE html>
<html lang="en">
<head>
<link href="s.css" type="text/css" rel="stylesheet">
<meta charset="utf-8">
<title>Show Hide Dropdown Using CSS</title>
</head>
<body>
<img src="logo.png" class="imga">
<div class="bum">
<ul>
<div class="abbu">
<a href="s.html">Home</a>
</div>
</ul>
<ul>
<div class="abbu">
<a href="doctor.html">Doctors</a></div>
</ul>
<ul>Employees
<div class="abbu">
<li><a href="admin.html">Administrator</a></li>
</div>
</ul>
<ul>
<a href="appoint.php">Appointment<div class="bo"></div></a>
</ul>
</div>
<div class="bob">
<marquee direction="down" onmouseover="this.stop();"
onmouseout="this.start();">
<img src="tab.jpg" height="100px">
<a href="doc4.php">Dr. Mohammad Tabish</a>
<img src="ran.jpg" height="100px">
<a href="doc3.php">Dr. Mohammad Arsalan Yousuf</a>
<img src="was.jpg" height="100px">
<a href="doc2.php">Dr. Sheikh Wasif Badar</a>
<img src="sam.jpg" height="100px">
<a href="doc1.php">Dr. Mohammad Sami Mansoor Usmani</a></marquee>
</div>
<div class="wra"><br> 

<?php 
$database="webauth";
$first=$_POST['first']; 
$father=$_POST['father'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$address=$_POST['address'];
$time=$_POST['time'];
$date=$_POST['date'];
$mysqli = new mysqli("localhost", "root", "", $database);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); }
$query = "INSERT INTO app (first, father, mobile , dob , gender , email , address , time, date)VALUES ('" . $first . "','" . $father . "',$mobile,'" . $dob . "','" . $gender . "','" . $email . "','" . $address . "','" . $time . "','$date')"; 
//echo $query;
$mysqli->query($query);
echo "<script type='text/javascript'>\n"; 
echo "alert('you are Succesflly registered');\n"; 
echo "</script>";
//mysql_close(); 
?>
<input type="button" onclick="parent.location='appoint.php'" value="Back" class="bhai">
<h1>S.W.A.T Hospital</h1>
<h2>Providing the Best Healthcare Services in District Central, Karachi</h2>
</div>
</body>
<footer>
<marquee onmouseover="this.stop();" onmouseout="this.start();"><strong>We Prioritize People Who Have Serious Trauma Condition So You May Be Seen More Quickly By Us, If You Think Life is At Risk You Should Rushed to Us.</strong>
</marquee>
</footer>
</html>         
