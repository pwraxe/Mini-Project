<html>
<head>
<title>Hey...Student</title>
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
	<div style="margin-left:17%">
	<img src ="http://localhost/Akshay/Admission/HeaderLogo.jpg" width="100%"><br>
	<form method="post" action="register.php">
		<div class="ct">
			<h1 style="color:#3c3c3c;"><br><center style="font-family:Lucida Calligraphy;font-size:50px;">Student Registration Center</center></h1>
			<h1 style="color:#3c3c3c;"><br><center style="font-family:Lucida Calligraphy;font-size:50px;">2017 - 2018</center></h1><br><br>
			<center>
			<fieldset class="fldseta">
				<form action="resister.php" method="post"><br><br>
				<center style="font-size:30px; color:#6A5ACD;"><b style="font-family:ubuntu;">Pune univercity</b></center><br>
				<center style="font-size:20px; color:#6A5ACD;"><b style="font-family:ubuntu;">Sir Visvesvaraya Institude of Technology,Chincholi Dist. Nashik</b></center><br>
				<center style="font-size:20px; color:#6A5ACD;"><b style="font-family:ubuntu";>by,</b></center><br>
				<center style="font-size:20px;color:#6A5ACD; font-family:ubuntu;"><b style="font-family:ubuntu";>INFORMATION TECHNOLOGY</b></center>
				<br><hr><br>
					First Name	: <br><input class="fname" type="text" size="45" placeholder="First Name" name="fname" Required><br><br>
					Middle Name	: <br><input class="mname" type="text" size="45" placeholder="Middle Name" name="mname" Required><br><br>
					Last Name	: <br><input class="lname" type="text" size="45" placeholder="Last Name" name="lname" Required><br><br>
					Email ID	: <br><input class="email" type="text" size="45" placeholder="example@gmail.com" name="email" Required><br><br>
					Mobile No	: <br><input type="text" class="mob" size="45" placeholder="+91..." name="mob" maxlength="10"><br><br>
					Branch 		: <br><input class="branch" type="text" size="45" placeholder="Branch Name Ex. IT Engineering" name="branch" Required><br><br>
					<table>
					<tr>
					<td>Birth Date:<br><input type="date" class="dob" placeholder="Date of Birth" name="dob"></td>
					<td>Today's Date:<br><input class="mrt" type="date" placeholder="Today's Date" name="td"></td>
					</tr>
					</table><br>
					<hr><br>
					<center><input type="Submit" class="btn" value = "Register" name="Register" ></center><br><br>
					
			</fieldset>
			<center>
		</div>
		</form><br><br>
		<form action="show.php" method="post">
		<center><input type="Submit" class="prt" value = "Print Record" name="Print Record" ></center><br><br>
		</form>
	</div>
	
</body>
</html>	
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
.fldseta{
	width:600px;
	border-radius:20px;
	background-color:#DCDCDC;
	
}
</style>

<style>
.fname{
	padding:12px;
	border-radius:1px;
	
}
</style>
<style>
.mname{
	padding:12px;
	border-radius:1px;
	
}
</style>

<style>
.lname{
	padding:12px;
	border-radius:1px;
}
</style>
<style>
.branch{
	padding:12px;
	border-radius:1px;
	
}
</style>

<style>
.email{
	padding:12px;
	border-radius:1px;
}
</style>


<style>
.cast{
	padding:12px;
	border-radius:1px;
}
</style>

<style>
.dob{
	padding:12px;
	border-radius:1px;
}
</style>
<style>
.mrt{
	padding:12px;
	border-radius:1px;
}
</style>

<style>
.prt{
	border-style:solid;
	border-color:black;	
	padding:12px;
	font-family:ubuntu;
	border-radius:1px;
	width:400px;
	font-size:30px;
	background-color:#909090;
	color:black;
}
</style>


<style>
.btn{
	padding:12px;
	font-family:ubuntu;
	border-radius:1px;
	width:300px;
	border-style:solid;
	border-color:black;
	font-size:30px;
	background-color:#DCDCDC;
	color:black;
}
</style>
<style>
.mob{
	padding:12px;
	border-radius:1px;
	
}
</style>

<style>
.body
{
		background-color:#909090;
}
</style>

<center style="font-family:Lucida Calligraphy; font-size:20px;">	

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

//if(isset($_POST['Register']))
if($_SERVER["REQUEST_METHOD"]=="POST")
{
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$mob=$_POST['mob'];
		$branch=$_POST['branch'];
		$dob=$_POST['dob'];
		$td=$_POST['td'];
		$sql = "INSERT INTO clgentry (fname,mname,lname,email,mob,branch,dob,td) values ('$fname','$mname','$lname','$email','$mob','$branch','$dob','$td');";
		if(mysqli_query($conn,$sql))
		{
			?>
			<script>
			alert("Congratulation...Your Record Inserted Successfully");
			</script>
		<?php
		}
		else{
			echo"Cant Insert".mysqli_error($conn);
		}
}
function get($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

mysqli_close($conn);

?>

</center>
<fieldset class="fldset">
		<div style="margin-left:22%;"><br><center><p style="font-family:ubuntu; color:white; font-size:30px;">Quick Links to follow us <p></center></div><br><br>
		<div style="margin-left:45%;">
		<table>
			<th><a href="https://www.facebook.com/SVITSinnar/"><img src="http://localhost/Akshay/Admission/fb.png" width="80px" title="http://localhost/Akshay/Admission/fb.png"></a></th>
			<th><a href="https://twitter.com/SVIT_sinnar"><img src="http://localhost/Akshay/Admission/twitter-icon-vector.png"class="img" width="250px"></a></th>
			<th><a href="https://plus.google.com/u/0/110571980129784584868"><img src="http://localhost/Akshay/Admission/download.png" width="80px"></a></th>
		</table>
	</fieldset>






