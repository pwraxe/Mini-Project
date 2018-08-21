<html>
<head>
<title>Hey...Admin</title>
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
	<div style="margin-left:16%">
	<img src ="http://localhost/Akshay/Admission/HeaderLogo.jpg" width="100%"><br>
		<div class="ct">
			<center><br><fieldset class="fld">
			<form action="Admin.php" method="post">
				<p style="color:gray; font-size:25px; font-family:Lucida Calligraphy;"><br>Username :</p><input type="text" placeholder="root" size="40" name="user" class="usr" Required>
				<p style="color:gray; font-size:25px; font-family:Lucida Calligraphy;"><br>Password :</p><input type="password" placeholder="Akshay" size="40" name="passwd" class="pswd" Required><br>
				<br><center><input type="Submit" value="Admin Login" name="Admin" class="btn"></center>
				</form>
			</fieldset><br>
			</center>
		</div>
	</div>
	
<style>
.hr{
	width:100%;
	height:2%;
}

</style>	
	
	
	
	
<style>
.btn{
	padding:12px;
	font-family:ubuntu;
	border-radius:1px;
	width:300px;
	font-size:30px;
	border-color:black;
	background-color:rgb(60, 60, 60);
	color:#E8E8E8;
}
</style>	
	
	
<style>
.usr{
	padding:12px;
	border-radius:10px;
	position:center;
}
</style>
<style>
.pswd{
	padding:12px;
	border-radius:10px;
}
</style>	
	
	
	
	
<style>
.fld
{

	width:500px;
	border-style:solid;
	border-color:black;
	height:400px;
	border-radius:2px;
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
.tlink{
	margin: 20px;
	padding: 0 20px 10px;
	border: 2px solid #666;
	border-radius: 50px;
	box-shadow: 0 0 10px #666;
	padding-top: 10px;
	background-color:#3b5998;
	text-decoration:none;
	
}
</style>

<style>
.flink{
	margin: 20px;
	padding: 0 20px 10px;
	border: 2px solid #666;
	border-radius: 50px;
	box-shadow: 0 0 10px #666;
	padding-top: 10px;
	background-color:#3b5998;
	
}
</style>

<style>
.glink{
	margin: 20px;
	padding: 0 20px 10px;
	border: 2px solid #666;
	border-radius: 100px;
	box-shadow: 0 0 10px #666;
	padding-top: 10px;
	height:40px;
	width:5px;
	background-color:#FF0000;
	
}
</style>
<style>
.ct
{
		font-family:ubuntu;
		font-size:50px;
		background-color:rgb(60, 60, 60);
}
</style>
<style>
.body{
	background-color:#dfe3ee;
	width:100%;
}
</style>


<?php

error_reporting("E_NOTICE");
$server = "localhost";
$username = "root";
$passwd = "Akshay";
$dbname = "admin";
$conn= mysqli_connect($server, $username, $passwd,$dbname);
//mysqli_select_db($conn,$dbname);
if(!$conn)
{
	die("Error Occure While Connecting to Database".mysqli_connect_error());
}

if(isset($_POST['Admin']))
{ 
        $user = $_POST['user']; 
        $passwd = $_POST['passwd']; 
		$sql = "select user from up where passwd = $passwd";
		$record = mysqli_query($conn, $sql);
        if($user == "Admin" && $passwd == "Akshay")
		{
			echo"<center>Welcome Admin</center>";
		}
		else
		{
			echo"Invalid username & Password";
		}	
}	
mysqli_close($conn);
?>
<fieldset class="fldset">
		<div style="margin-left:22%;"><br><center><p style="font-family:ubuntu; color:white; font-size:30px;">Quick Links to follow us <p></center></div><br><br>
		<div style="margin-left:45%;">
		<table>
			<th><a href="https://www.facebook.com/SVITSinnar/"><img src="http://localhost/Akshay/Admission/fb.png" width="80px" title="http://localhost/Akshay/Admission/fb.png"></a></th>
			<th><a href="https://twitter.com/SVIT_sinnar"><img src="http://localhost/Akshay/Admission/twitter-icon-vector.png"class="img" width="250px"></a></th>
			<th><a href="https://plus.google.com/u/0/110571980129784584868"><img src="http://localhost/Akshay/Admission/download.png" width="80px"></a></th>
		</table>
	</fieldset>