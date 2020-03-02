<!doctype html>
<?php session_start(); ?>
<html>
	<head>
		<title>display profile</title>
		<STYLE>A{color:black; text-decoration: none;} </STYLE>
	</head>
	
	<body>
		<?php
			include("nav.php");
			$servername="localhost";
			$username="root";
			$password="root";
			$dbname="AkData";
			$conn=new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error)
			{
				die("connection failed".$conn->connect_error);
			}
			if(isset($_SESSION['validuser']))
			{
						$a=$_SESSION['validuser'];
		?>
			<h5 align="Right"><?php echo "Welcome ".$a;?></h5>
			<?php
				$sql="select * from userdata where uname='$a'";
				$result=$conn->query($sql);
					if($result->num_rows>0)
					{
					while($row=$result->fetch_assoc())
						{
			?>
							<div>
								<blockquote>First Name-	<?php echo $row['fname'];?> <img src= "<?php echo $row['image'];?>" height="100px" width="100px"/> </blockquote><br/><hr/>
								<blockquote><?php echo "Last Name-".$row['lname']; ?> </blockquote><br/><hr/>
								<blockquote><?php echo "Email-Id-".$row['email']; ?></blockquote> <br/><hr/>
								<blockquote><?php echo "Your Birthday ☺ -".$row['DOB']; ?> </blockquote><br/><hr/>
								<blockquote><?php echo "Address-".$row['address']; ?> </blockquote><br/><hr/>
								<blockquote><?php echo "Mobile-".$row['mobile']; ?></blockquote> <br/><hr/>
							</div>
						<?php
						}
					}
			}
			else
			{
				?> <a href="login.php"><br/><hr/><h1 align="center">"Please Login  ☺ !!"</h1><br/><hr/></a> 
			<?php
			}
					include("foot.php");
					$conn->close();
					?>
	</body>
</html>