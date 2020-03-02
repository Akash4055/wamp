<!doctype html>
<html>
	<head>
		<title>login here boy!</title>
		<?php include("nav.php"); ?>
	</head>
	<body>
		<div>
			<fieldset>
			<legend align="center">Login</legend>
				<form action="datacheck.php" method="POST" >
					<label for="Enter your Username" align="left">Username :</label> <input type="text" name="uname"  placeholder="Enter Your username" required /><br/><br/>
					<label for="Enter your password" align="left">Password :</label> <input type="password" name="password"  placeholder="Enter Your Password" required /><br/><br/>
					
					<input type="submit" value="Register" /><br/><br/>
				</form>
			</fieldset>
			<?php include("foot.php"); ?>
	</body>

</html>