<html>
<head>
<title>See Record</title>
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
		<br><li><center><b><a href="http://localhost/Akshay/main.html" style="text-decoration:none; color:white; font-family:Lucida Calligraphy;font-size:25px; ">Home</a></link></b></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/dept.php" style="text-decoration:none; color:white;font-family:Lucida Calligraphy;font-size:25px; ">Department</a></b></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/register.php" style="text-decoration:none; color:white;font-family:Lucida Calligraphy;font-size:25px; ">Registration</a></b></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/mission.php" style="text-decoration:none;color:white;font-family:Lucida Calligraphy;font-size:25px; ">Mission</b></a></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/about.php" style="text-decoration:none; color:white;font-family:Lucida Calligraphy;font-size:25px; ">About us</b></a></center></li><span></span><br>
		<br><li><center><b><a href="http://localhost/Akshay/reach.php" style="text-decoration:none;color:white;font-family:Lucida Calligraphy;font-size:25px; ">Reach us</b></a></center></li><span></span><br>
	</ul>
</div>
	<div style="margin-left:16%;">
	<img src ="http://localhost/Akshay/Admission/HeaderLogo.jpg" width="100%"><br>
	<h1 style="color:#3c3c3c;"><br><center style="font-family:Lucida Calligraphy;font-size:50px;">Check Your Registered Record</center></h1>
	<center><br><br><fieldset class="fld">
	<form action="show.php" method="post">
		<p style="color:#FAF0E6; font-size:40px; font-family:Lucida Calligraphy;"><br>Enter Mobile Number :</p><br>
		<input type="text" class="mob" size="45" name="mob" placeholder="Check your Record" Required><br><br><br><br>
		<center><input type="Submit" class="prt" value = "Print Record" name="Print_Record" ></center><br><br>
		</form>
		
	<form action="login.php" method="post">
		<center><input type="Submit" class="log" value = "Login as Administrator" name="Admin" ></center><br><br>
	</form>
	
	<form action="update.php" method="post">
		<center><input type="Submit" class="update" value = "Update Your Profile" name="Admin" ></center><br><br>
	</form>
	</fieldset>
	</center>
	
	
	
	
	</body>
</html>

<style>
.body
{
	background-color:rgb(120, 120, 120);
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
.fld
{
	width:550px;
	background-color:rgb(60, 60, 60);
	border-radius:2px;
}
</style>

<style>
.log{
	padding:12px;
	font-family:ubuntu;
	border-radius:1px;
	width:300px;
	border-style:solid;
	font-size:25px;
	background-color:rgb(60, 60, 60);
	color:#E8E8E8;
}
</style>

<style>
.prt{
	padding:12px;
	font-family:ubuntu;
	border-radius:1px;
	width:300px;
	border-style:solid;
	font-size:25px;
	background-color:rgb(60, 60, 60);
	color:#E8E8E8;
}
</style>
<style>
.update{
	padding:12px;
	font-family:ubuntu;
	border-radius:1px;
	width:300px;
	border-style:solid;
	font-size:25px;
	background-color:rgb(60, 60, 60);
	color:#E8E8E8;
}
</style>

<style>
input::-webkit-input-placeholder {
	font-size:17px;
}
</style>


<style>
table{
    padding:1px;
	
	
}
</style>

	
<style>
.mob{
	padding:15px;
	border-radius:10px;
	border-spacing: 10px 50px;
	
}
</style>

<style>
tr{
    padding-bottom: 20px;
}

</style>

<style>
td{
	padding-top: 10px;
    padding-bottom: 10px;
}

</style>



<div style="margin-left:35%; font-family:Lucida Calligraphy; color:#2b2b2b; font-size:25px;">
<table border="1px" style="padding:20px; ">
<col width="200px"></col>


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

if(isset($_POST['Print_Record']))
{
	$mob = $_POST['mob'];
	$sql = "select * from clgentry where mob = $mob";
	$record = mysqli_query($conn, $sql);
	if(mysqli_num_rows($record))
	{
		while($row = mysqli_fetch_array($record))
		{
			echo"<br>";
			echo"<tr><th>FullName : </th><td>".$row['fname']." ".$row['mname']." ".$row['lname']."</td></tr>";
			echo"<tr><th>Email ID : </th><td>".$row['email']."</td></tr>";
			echo"<tr><th>Mobile Number : </th><td>".$row['mob']."</td></tr>";
			echo"<tr><th>Branch : </th><td>".$row['branch']."</td></tr>";
			echo"<tr><th>Date Of Birth :<br>(YYYY-MM-DD) </th><td>".$row['dob']."   </td></tr>";
			echo"<tr><th>Registration Date :<br>(YYYY-MM-DD) </th><td>".$row['td']."</td></tr>";
			echo"</tr>";
		}
	}
	else
		echo"No Record Found";
	mysqli_free_result($record);
	mysqli_close($conn);
}
?>
</table>
<br>
</div>
<fieldset class="fldset">
		<div style="margin-left:5%;"><br><center><p style="font-family:ubuntu; color:white; font-size:30px;">Quick Links to follow us <p></center></div><br><br>
		<div style="margin-left:35%;">
		<table>
			<th><a href="https://www.facebook.com/SVITSinnar/"><img src="http://localhost/Akshay/Admission/fb.png" width="80px" title="http://localhost/Akshay/Admission/fb.png"></a></th>
			<th><a href="https://twitter.com/SVIT_sinnar"><img src="http://localhost/Akshay/Admission/twitter-icon-vector.png"class="img" width="250px"></a></th>
			<th><a href="https://plus.google.com/u/0/110571980129784584868"><img src="http://localhost/Akshay/Admission/download.png" width="80px"></a></th>
		</table>
	</fieldset>



