<!DOCTYPE html>
<html lang="en">
<head>
<link href="s.css" type="text/css" rel="stylesheet">
<link href="sam.css" type="text/css" rel="stylesheet">
<meta charset="utf-8">
<title>S.W.A.T Hospital: Doctor</title>
<script>
function myFunction() {
	var d = new Date();
	var n = d.getDay();
if(n==7)
    alert("Sunday : Available");
else
alert ("Today Doctor Not Available");
}
</script>
</head>
<script type="text/javascript" async src="http://www.google.analytics.com/ga.js"></script>
<body onload="myFunction()">
<img src="logo.png" class="imga">
<div class="bum">
<ul>
<div class="abbu">
<a href="s.html">Home</a>
</div>
</ul>
<ul><div class="abbu">
<a href="doctor.html">Doctors<div class="bo"></div>
</a>
</div>
</ul>
</div>
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
<div class="wra">
<fieldset class="cp">
<img src="tab.jpg" class="imga">
<h2>Your Appointments</h2>
<?php
$db='webauth';
$lh='localhost';
$us='root';
$ps='';
$mysqli = new mysqli($lh , $us, $ps, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); }
$abc="SELECT * FROM `app` where time='Dr. Tabish Sunday From 08:00 '";
$a123 = $mysqli->query($abc);
if($a123->num_rows>0){
while($row = $a123->fetch_assoc()){
echo "Your Patient : ".$row["first"]."<br>";
echo $row["date"]."<br>";
echo "<br>";
}
}
?>
</fieldset>
<fieldset class="oop">
<?php
$db='webauth';
$lh='localhost';
$us='root';
$ps='';
$mysqli = new mysqli($lh , $us, $ps, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); }
$abc="SELECT * FROM `doc` where id=4";
$a123 = $mysqli->query($abc);
if($a123->num_rows>0){
while($row = $a123->fetch_assoc()){
echo "Days:". "<br>".$row["day"]."<br>";
echo $row["time"]."<br>";
echo "Specialized In: "."<br>".$row["special"]."<br>";
}
}
?>
</fieldset>

</div>
</body>
</html>                                		