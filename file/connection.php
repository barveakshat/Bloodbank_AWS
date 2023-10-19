<?php
$servername = "bloodbankmanagement.cqd75c8yv7oy.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "DSN_2098";
$dbname = "BloodbankManagement";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>