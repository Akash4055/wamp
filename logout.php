<!document>
<html>
	<head>
		<title>see you soon !</title>
	</head>
	<body>
	<?php
		session_start();
		session_unset();
		session_destroy();
		Header("Location:HDR.php")
	?>
	</body>