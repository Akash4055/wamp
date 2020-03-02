<!doctype html>
<html>
	<head>
		<title>register here boy!</title>
		<?php include("nav.php"); ?>
	</head>
	<body>
		<div>
			<fieldset>
			<legend align="center">Enter Your Details</legend>
				<form action="welcome.php" enctype="multipart/form-data" method="POST" >
					<label for="Enter your name" align="left">First name :</label> <input type="text" name="fname" size="20" autofocus placeholder="Enter Your first name" pattern=[a-zA-z]{3-15}required /><br/><br/>
					<label for="Enter last name" align="left">Last name :</label> <input type="text" name="lname" size="20" placeholder="Enter Your last name" pattern=[a-zA-z]{3-15}required /><br/><br/>
					<label for="Enter your Email" align="left">EMAIL-ID :</label> <input type="email" name="email"  placeholder="Enter Your Email" required /><br/><br/>
					<label for="Enter your Username" align="left">Username :</label> <input type="text" name="uname"  placeholder="Enter Your username" required /><br/><br/>
					<label for="Enter your password" align="left">Password :</label> <input type="password" name="password"  placeholder="Enter Your Password" required /><br/><br/>
					<label for="Enter your DOB" align="left">Date Of Birth:</label> <input type="Date"  name="DOB" required /><br/><br/>
					<label for="Enter your Address" align="left">Address :</label> <textarea name="address"  placeholder="Enter Your address" row="5" col="10" required ></textarea/><br/><br/>
					<label for="Enter your Mobile No" align="left">Mobile :</label> <input type="number" name="mobile"  required /><br/><br/>
					<label for="upload image" align="left">Upload image :</label> <input type="file" name="pic"/><br/><br/>					
					<input type="submit" value="Register" /><br/><br/>
					<input type="reset" value="Reset" /><br/><br/>
					
				</form>
			</fieldset>
			<?php include("foot.php"); ?>
	</body>
</html>
