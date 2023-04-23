<?php

require("includes/common.php");

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$query = "SELECT NGO.NGOId, NGO.email FROM NGO,admin WHERE NGO.email='" . $email . "' AND admin.pass='" . $password . "' AND NGO.NGOId=admin.NGOId";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
  $error = "<span style='color:red'>Please enter correct E-mail id and Password</span>";
  header('location: admin_login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['NGOId'];
  header('location: NGO.php');
}

