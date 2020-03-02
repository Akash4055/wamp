<!doctype html>
	<?php
		session_start();
	?>
<html>
	<?php setcookie("user",$_REQUEST['uname']);
	$a=$_COOKIE['user'];
	?>
	<head>
		<title>Database</title>
	</head>
	<body>
	<?php
		$servername="localhost";
		$username="root";
		$password="root";
		$dbname="AkData";
		$conn= new mysqli($servername,$username,$password,$dbname);
		
		if($conn->connect_error)
		{
			die("connection failed");
		}
		
		$uid=$_REQUEST['uname'];
		$pass=$_REQUEST['password'];
		$sql="select uname, password from userdata where uname='$uid' and password='$pass'";
	
		$result = $conn->query($sql);
		//if ($conn->query($sql)===TRUE)
		if($result->num_rows>0)
		{
			$_SESSION['validuser']=$uid;
			header("location:profile.php");
		}
		else
		{
			header("location:login.php");
		}
		$conn->close();
	?>
	</body>
</html>