<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> donor login</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="donorlogin.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Hey, Donor welcome back!</h1>
				<p>"Share the gift of life with a needle and arm"</p>
				<span>
					<p>login with social media</p>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
				</span>
			</div>
		</div>


		<div class="right">
			<h5>Login</h5>
			<p>Don't have an account? <a href="donorsignup.php">Create Your Account</a> it takes less than a minute</p>
			<div class="tab-pane container fade" id="receivers">
				<form action="file/receiverLogin.php" class="login-form" method="post">
					
					<input type="email" name="remail" placeholder="User Email" class="form-control mb-4">
					
					<input type="password" name="rpassword" placeholder="User Password" class="form-control mb-4">
					<input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
				</form>
			</div>


		</div>

	</div>
	<!-- partial -->

</body>

</html>
<?php } ?>