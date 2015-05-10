<html>
<head>
<link href="s.css" type="text/css" rel="stylesheet">
<title>S.W.A.T Hospital: Admin</title>
</head>
<body>
<img src="logo.png" class="imga">
<div class="bum">
<ul>
<div class="abbu">
<a href="s.html">Home</a>
</div>
</ul>
<ul><div class="abbu">
<a href="doctor.html">Doctors</a></div>
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
<fieldset class="multi">

<h1>See Appointments:</h1>
<form>
<table border="1" height="auto">
<?php
$db='webauth';
$lh='localhost';
$us='root';
$ps='';
$mysqli = new mysqli($lh , $us, $ps, $db);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(); }
$abc="SELECT * FROM `app` ";
$a123 = $mysqli->query($abc);
if($a123->num_rows>0){
while($row = $a123->fetch_assoc()){
echo "<tr>";
echo "<td>"."Name:"."</td>";
echo "<td>".$row["first"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Father Name:"."</td>";
echo "<td>".$row["father"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Mobile #:"."</td>";
echo "<td>".$row["mobile"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Date Of Birth:"."</td>";
echo "<td>".$row["dob"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Gender:"."</td>";
echo "<td>".$row["gender"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."E-mail:"."</td>";
echo "<td>".$row["email"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Address:"."</td>";
echo "<td>".$row["address"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."Time:"."</td>";
echo "<td>".$row["time"]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>"."ID:"."</td>";
echo "<td>".$row["id"]."</td>";
echo "</tr>";
echo "<tr>"."<td>"."<td>"."</tr>";
}
}
?>
</table>
</form>
</fieldset><br>
<fieldset class="multi">
<h1>Delete</h1>
<form method="post" action="<?php $_PHP_SELF ?>">
 ID:<input type="text" name="id" ><br>
<input type="submit" class="bhai">
</form>
<?php
error_reporting(0);
$db='webauth';
$lh='localhost';
$us='root';
$ps='';
$a = $_POST['id'];
$mysqli = new mysqli($lh , $us, $ps, $db);
$q = "DELETE FROM `app` WHERE id=$a";
$query = $mysqli->query($q);
if($query){
echo 'Deleted Successfully'."<br>";
}//mysqli_close();
?>
<br><input type="button" value="Sign Out" class="bhai" onclick="parent.location='admin.html'">
</fieldset>
</div>
<script type="text/javascript" src="abc.js"></script>
<script type="text/javascript" src="s.js"></script>
</body>
<footer>
<marquee onmouseover="this.stop();" onmouseout="this.start();"><strong>We Prioritize People Who Have Serious Trauma Condition So You May Be Seen More Quickly By Us, If You Think Life is At Risk You Should Rushed to Us.</strong>
</marquee>
</footer>
</html>