<html>
<head>
<title>Hi...Admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body">
<div id="sidebar">
	<div class = "toggle-btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul>
		<br><li><center><b><a href="http://localhost/Akshay/main.html" style="text-decoration:none; color:white; font-family:Lucida Calligraphy;font-size:25px; ">Home</a></b></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/dept.php" style="text-decoration:none; color:white; font-family:Lucida Calligraphy;font-size:25px; ">Department</a></b></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/register.php" style="text-decoration:none; color:white; font-family:Lucida Calligraphy;font-size:25px; ">Registration</a></b></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/mission.php" style="text-decoration:none;color:white; font-family:Lucida Calligraphy;font-size:25px; ">Mission</b></a></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/about.php" style="text-decoration:none; color:white; font-family:Lucida Calligraphy;font-size:25px; ">About us</b></a></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/reach.php" style="text-decoration:none;color:white; font-family:Lucida Calligraphy;font-size:25px; ">Reach us</b></a></center></li><span></span><br>
	</ul>
	</div>
	<center><div style="margin-left:17%">
	<img src ="http://localhost/Akshay/Admission/HeaderLogo.jpg" width="100%"><br><br><center>
	<div>
		<h1 style="color:white;"><br><center><marquee style="font-family:Lucida Calligraphy;">Sir Visvesvaraya Institude of Technology, Chincholi Nashik</marquee></center></h1><br>
	</div>
	<table border="8" style="background-color:#DCDCDC;" cellspacing="10px">
		<th>FullName</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Branch</th>
		<th>Birth Date</th>
		<th>Register Date</th>
		<tr>
		</div>
	</center>
	
</body>

<style>
.mob{
	padding:15px;
	border-radius:10px;
	border-spacing: 10px 50px;
	
}
</style>


<style>
.body
{
	background-color:rgb(60, 60, 60);
}
</style>
<style>
.fldsetl
{
	background-color:black;
	height:300px;
	border:0;
}
</style>
<style>
.fldset
{
	background-color:black;
	height:300px;
	border:0;
}
</style>
<style>
.prt{
	padding:10px;
	font-family:ubuntu;
	border-radius:1px;
	width:300px;
	border-color:white;
	font-size:30px;
	border-style:solid;
	background-color:rgb(60, 60, 60);
	color:#E8E8E8;
}
</style>
<style>
.out{
	
	padding:12px;
	font-family:Lucida Calligraphy;
	border-radius:1px;
	width:300px;
	font-size:30px;
	border-style:solid;
	background-color:#333333;
	color:#E8E8E8;
}
</style>

<?php
error_reporting("E_NOTICE");
$server = "localhost";
$username = "root";
$passwd = "Akshay";
$dbname = "teit";
$conn= mysqli_connect($server, $username, $passwd,$dbname);
//mysqli_select_db($conn,$dbname);
if(!$conn)
{
	die("Error Occure While Connecting to Database".mysqli_connect_error());
}

$sql = "select * from clgentry";
$record = mysqli_query($conn, $sql);
if(mysqli_num_rows($record))
{
	while($row = mysqli_fetch_array($record))
	{	
		echo"<td> ".$row['fname']." ".$row['mname']." ".$row['lname']."</td>";
		echo"<td> ".$row['email']."</td>";
		echo"<td> ".$row['mob']."</td>";
		echo"<td> ".$row['branch']."</td>";
		echo"<td> ".$row['dob']."</td>";
		echo"<td><center> ".$row['td']."</td>";
		echo"</tr>";
	}
}

mysqli_close($conn);



?>


</table>
<br>
<a href="http://localhost/Akshay/login.php"><p class="out" style="text-decoration:none;">Logout</p></a>
<div style="margin-left:5%;">
<form action="Admin.php" method="post">
		<p style="color:#FAF0E6; font-size:40px; font-family:Lucida Calligraphy;"><br>Enter Mobile No. </p><br>
		<input type="text" class="mob" size="45" name="mob" placeholder="Delete Record" Required><br><br><br><br>
		<center><input type="Submit" class="prt" value = "Delete Record" name="delete" class="dlt" ></center><br><br>
		</form>

</div>

<?php

include("config.php");
$server = "localhost";
$username = "root";
$passwd = "Akshay";
$dbname = "teit";

$emailErr="";
$email="";
$conn= mysqli_connect($server, $username, $passwd, $dbname);
$emailErr="";
//$conn = mysqli_connect("localhost","root","","teit");
if(!$conn)
{
	die("Error Occure While Connecting to Database".mysqli_connect_error());
}

if(isset($_POST['delete']))
{
	$mob = $_POST['mob'];
	$sql = "delete from clgentry where mob=$mob";
	if(mysqli_query($conn,$sql))
	{
	?>
		<script>
		alert("Record has been Deleted");
		</script>
		<?php
		}
		else{
			echo"Unable to delete".mysqli_error($conn);
		}
}

?>



</table>
<fieldset class="fldset">
		<div style="margin-left:0%;"><br><center><p style="font-family:ubuntu; color:white; font-size:30px;">Quick Links to follow us <p></center></div><br><br>
		<div style="margin-left:1%;">
		<table>
			<th><a href="https://www.facebook.com/SVITSinnar/"><img src="http://localhost/Akshay/Admission/fb.png" width="80px" title="http://localhost/Akshay/Admission/fb.png"></a></th>
			<th><a href="https://twitter.com/SVIT_sinnar"><img src="http://localhost/Akshay/Admission/twitter-icon-vector.png"class="img" width="250px"></a></th>
			<th><a href="https://plus.google.com/u/0/110571980129784584868"><img src="http://localhost/Akshay/Admission/download.png" width="80px"></a></th>
		</table>
</fieldset>

