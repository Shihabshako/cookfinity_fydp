<?php
require_once('../../../functions.php');
$id = $_GET['id'];
$deliverStatus = settingsVariablesValueId('order_status', 'delivered');
$query = "UPDATE `distributed_orders` SET `status`=$deliverStatus WHERE id=$id";

if (mysqli_query($con, $query)) {
    $_SESSION['delivered_meal'] = 'success';
    header('location: ../../?page=orders');
} else {
    $_SESSION['delivered_meal'] = 'error';
    header('location: ../../?page=orders');
}
