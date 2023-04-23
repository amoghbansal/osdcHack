<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $quantity=$_GET['quantity'];
    $user_id = $_SESSION['user_id'];
    $d=strtotime("today");
    $dt=date("Y-m-d h:i:sa", $d);
    $today=substr($dt, 0, 10);
    $query = "INSERT INTO users_items(user_id, item_id, status,Date, quantity) VALUES('$user_id', '$item_id', 'Added to cart','$today','$quantity')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>
