<?php
session_start();
if (isset($_SESSION['hid'])) {
	header("location:bloodrequest.php");
} elseif (isset($_SESSION['rid'])) {
	header("location:sentrequest.php");
} else {
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title> Hospital login</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
			integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="hospitallogin.css">

	</head>

	<body>
		<!-- partial:index.partial.html -->
		<div class="box-form">
			<div class="left">
				<div class="overlay">
					<h1>Hey, welcome back!</h1>
					<p>"Healthcare workers are the silent heroes, making miracles happen every day"</p>
					<br>
				</div>
			</div>


			<div class="right">
				<h5>Login</h5>
				<p>Don't have an account? <a href="hospitalsignup.php">Create Your Account</a> it takes less than a minute
				</p>
				<form action="file/hospitalLogin.php"
				class="login-form" method="post"> 
				<div class="inputs" id="hospitals>
		<label class=" text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Email</label>
					<input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-4">
					
					<input type="password" name="hpassword" placeholder="Hospital Password" class="form-control mb-4">
					<input type="submit" name="hlogin" value="Login" class="btn btn-primary btn-block mb-4">
					</form>
				</div>

				

				<br>
				
			</div>

		</div>
		<!-- partial -->
	</body>

	</html>
<?php } ?>