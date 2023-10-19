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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donorsignup.css">
    <title>Signup Form</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Register as Donor</h1>
        <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
            <!-- Personal Information -->
            <label for="name"> Name:</label>
            <input type="text" id="name" name="rname" required>

            <label for="bloodType">Blood Group:</label>
            <select id="bloodType" name="rbg" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

            <label for="city"> City :</label>
            <input type="text" name="rcity"  class="form-control mb-3" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="rphone" required pattern="[0,6-9]{1}[0-9]{9,11}"
                title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
            

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="remail" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="rpassword" required minlength="6">
            <input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

        <a href="donorlogin.php" class="text-center mb-4" title="Click here">Already have account?</a>

    </div>


</body>

</html>

<?php } ?>