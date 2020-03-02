<!doctype html>
<html>
	<?php setcookie("user",$_REQUEST['uname']);
	//$a=$_COOKIE['user'];
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
/*//creating database

	$sql="CREATE database AkData";
		if($conn->query($sql)===TRUE)
		{
			echo"DAtabase created";
		}
		else
		{
			echo"error creating database".$conn->error;
		}
// create Table
			
	$sql="create table userdata( fname varchar (30) not null,lname varchar (30) not null,email varchar (30) not null,uname varchar (30) primary key not null,
		password varchar (30) not null,DOB varchar(10) not null,address varchar (50) not null,mobile varchar (10) not null)";
		if ($conn->query($sql)===TRUE)
		{
			echo"Table created";
		}
		else
		{
			echo"error creating Table".$conn->error;
		}*/
		
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$email=$_REQUEST['email'];
		$uname=$_REQUEST['uname'];
		$password=$_REQUEST['password'];
		$date=$_REQUEST['DOB'];
		$address=$_REQUEST['address'];
		$mobile=$_REQUEST['mobile'];
		$target="images/".$_FILES['pic']['name'];

		move_uploaded_file($_FILES['pic']['tmp_name'],$target);
		
		$sql="insert into userdata( fname, lname ,email ,uname ,
		password ,DOB,address ,mobile,image ) value('$fname','$lname','$email','$uname','$password','$date','$address','$mobile','$target')";
		if ($conn->query($sql)===TRUE)
		{
			echo"data inserted";
		}
		else
		{
			echo"error inserting data".$conn->error;
		}
		
		header("location:login.php");
		$conn->close();
	?>
	</body>
</html>