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
    <title>Hospital Registration</title>
    <link rel="stylesheet" href="hospitalsignup.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Hospital Registration</h2>
        <br>
        <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
            <label for="name"> Hospiatl Name:</label>
            <input type="text" id="name" name="hname" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="hcity" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="hphone"  required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
            
            <label for="email">Email ID:</label>
            <input type="email" id="email" name="hemail" required>

            <label for="password">Password :</label>
            <input type="password" id="password" name="hpassword" class="form-control mb-3" required minlength="6">

            <input type="submit" name="hregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>
    </div>



    
    
</body>

</html>

<?php } ?>