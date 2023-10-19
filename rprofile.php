<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['rid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['rid'])){
		$id=$_SESSION['rid'];
		$sql = "SELECT * FROM receivers WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Receiver Profile"; ?>
<?php require 'deleteitnav.php';?>
<style>
    body{
    background: url(image/p4.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 800px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
	<?php require 'deleteitnav.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<section data-bs-version="5.1" class="menu menu2 cid-tJS6tZXiPa" once="menu" id="menu02-0">


		<nav class="navbar navbar-dropdown navbar-top navbar-expand-lg">
			<div class="container">
				<div class="navbar-brand">
					<span class="navbar-logo">
						<a href="userp.html">
							<img src="assets2/images/5a294f737879c9.7477950615126567554935-160x199.png"
								alt="" style="height: 5rem;">
						</a>
					</span>
					<span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4"
							href= "userp.html">Blood Bank</a></span>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
					data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<div class="hamburger">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					

					<div class="navbar-buttons mbr-section-btn"><a class="btn btn-black display-4"
							href="rprofile.php">Profile</a></div>

							<div class="nav-item">
								<a class="nav-link link text-black text-primary display-4" href="logout.php">Log out</a>
							</div>
				</div>
			</div>
		</nav>
	</section>

<br>

<br>

<br>
<br>

<br>

<br>
<br>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Name</label>
						<input type="text" name="rname" value="<?php echo $row['rname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Email</label>
						<input type="email" name="remail" value="<?php echo $row['remail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Password</label>
						<input type="text" name="rpassword" value="<?php echo $row['rpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Phone Number</label>
						<input type="text" name="rphone" value="<?php echo $row['rphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver City</label>
						<input type="text" name="rcity" value="<?php echo $row['rcity']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Blood Group</label>
						<select class="form-control mb-3" name="bg" required>
                             <option selected><?php echo $row['rbg']; ?></option>
                             <option>A-</option>
                             <option>A+</option>
                             <option>B-</option>
                             <option>B+</option>
                             <option>AB-</option>
                             <option>AB+</option>
                             <option>O-</option>
                             <option>O+</option>
                        </select>
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="Userpage.html" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>