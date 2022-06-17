<?php
require_once('../../../functions.php');
$uid = $_SESSION['uid'];
$id = $_GET['id'];
$price = $_GET['price'];

$status = settingsVariablesValueId('response_status', 'reviewing');

$query = "INSERT INTO `responses`(`request_id`, `responsed_by_uid`, `price`, `status`) VALUES ($id, $uid, $price, $status)";

mysqli_query($con, $query);

header('location: ../../?page=responses');
