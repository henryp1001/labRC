<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location:indwx.html");
} else {
	echo "welcome" . $_SESSION['user'];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Remote Lab Website</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container">
		<?php
			require "inc/header.php";
		?>
		<div class="content">
			<div class="left">
				<h2>WELCOME TO ARDUINO REMOTE LAB</h2>
				<p class="about">This project is designed to provide a web platform for conducting a series of remote microcontroller laboratory exercises, based on the Arduino platform. The system is remotely programmed and the results are visualised in realtime, by means of a webcam.<br>
				<br>
				It was developed originally at the Hellenic Open University (HOU) in 2011, as part of the final year thesis of Mr Anastasios Spiliopoulos, at that time undergraduate student of Computer Science, under the supervision of Dr Vassilis Fotopoulos. A major redesign took place in 2015 by Mr Anastasios Spiliopoulos using modern web technologies and introducing new functionalities.<br>
				<br>
				This system is openly available, supported by the Digital Systems and Media Computing (DSMC) Laboratory of the HOU, headed currently by Assistant Prof. Theofanis Orphanoudakis, the ΙΕΕΕ Circuits and Systems Society and the Google Computer Science for High School program. In the past it has been offered as a short blended-learning course. You can read more about the system here.<br>
				<br>
				Recommended browser: Latest version of Firefox or Chrome with JavaScript, Java, Flash and Cookies enabled</p>
			</div>
			<div class="right">
				<div class="logout">
				<h2>MEMBER PROFILE</h2>
				<a href="logout.php">LOG OUT</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>