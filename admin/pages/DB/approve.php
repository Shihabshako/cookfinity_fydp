<?php
    require_once('../../../functions.php');
    $id = $_GET['id'];
    $uid = $_SESSION['uid'];
    $status = settingsVariablesValueId('status', 'Approved');
    $query = "UPDATE approvals SET `status`=$status,`actioned_by`=$uid WHERE id=$id";

    if(mysqli_query($con, $query)){ 
        $_SESSION['approved'] = 'success';
        header('location: ../../?page=approval');
    }else{
        $_SESSION['approved'] = 'error';
        header('location: ../../?page=approval');
    }
?>